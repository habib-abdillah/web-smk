<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
    public function index()
    {
        $title = 'Delete Photo!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.galeri.index', [
            'photos' => Photo::orderBy('id', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'image' => 'required|max:10240|mimes:jpg,jepg,png,webp',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'image.required' => 'Foto Wajib Diisi',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        //image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('photo', $fileName);
        // Storage::disk('public')->putFileAs('photo', request->file('image'), $fileName);

        Photo::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);

        toast('Photo berhasil disimpan!', 'success', 'top-right');
        return redirect(route('photo'));
    }

    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);

        // jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:10000|mimes:jpg,jepg,png,webp';
        } else {
            $fileCheck = '';
        }

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'image' => $fileCheck,
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'image.required' => 'Foto Wajib Diisi',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        //jika ada image baru 
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('photo/' . $photo->image)) {
                Storage::disk('public')->delete('photo/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('photo', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $photo->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
        ]);

        toast('Data photo berhasil diupdate!', 'success', 'top-right');
        return redirect(route('photo'));
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        if (Storage::disk('public')->exists('photo/' . $photo->image)) {
            Storage::disk('public')->delete('photo/' . $photo->image);
        }
        $photo->delete();

        toast('Data photo berhasil dihapus!', 'success', 'top-right');
        return redirect(route('photo'));
    }
}
