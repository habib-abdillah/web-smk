<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index()
    {
        // $title = 'Delete Data!';
        // $text = "Are you sure you want to delete?";
        // confirmDelete($title, $text);

        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jepg,png,webp',
            'desc' => 'required|min:20',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'image.required' => 'Foto Wajib Diisi',
            'desc.required' => 'Artikel Wajib Diisi',
        ]);

        //image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('artikel', $fileName);

        //artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        //untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        //menghapus buffer kesalahan libxml
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = ImageManager::imagick()->read($src);
                $image->resize(1440, 720)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        toast('Data artikel berhasil disimpan!', 'success', 'top-right');
        return redirect(route('blog'));
    }

    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
            'artikel' => $artikel
        ]);
    }

    public function update(Request $request, $id)
    {
        $artikel = Blog::find($id);

        // jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jepg,png,webp';
        } else {
            $fileCheck = '';
        }

        $request->validate([
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'image.required' => 'Foto Wajib Diisi',
            'desc.required' => 'Artikel Wajib Diisi',
        ]);

        //jika ada image baru 
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('artikel/' . $artikel->image)) {
                Storage::disk('public')->delete('artikel/' . $request->old_image);
            }
            // if (\File::exists('artikel' . $artikel->image)) {
            //     \File::delete('artikel' . $request->old_image);
            // }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('artikel', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = ImageManager::imagick()->read($src);
                $image->resize(1440, 720)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $artikel->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        // return redirect(route('blog'))->with('success', 'Data artikel berhasil diupdate!');
        // Alert::success('Hore!', 'Post Created Successfully');
        toast('Data artikel berhasil diupdate!', 'success', 'top-right');
        return redirect(route('blog'));
    }

    public function destroy(Request $request, $id)
    {
        $artikel = Blog::find($id);
        if (Storage::disk('public')->exists('artikel/' . $artikel->image)) {
            Storage::disk('public')->delete('artikel/' . $artikel->image);
        }
        $artikel->delete();

        toast('Data artikel berhasil dihapus!', 'success', 'top-right');
        return redirect(route('blog'));
    }
}
