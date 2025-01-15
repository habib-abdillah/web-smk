@extends('admin.layout.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Foto</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Beranda</li>
                            <li class="breadcrumb-item active">Data Foto</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="" class="btn btn-primary mb-3" data-toggle="modal"
                                    data-target="#uploadModal">Upload Foto</a>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Gambar</th>
                                            <th>Kegiatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($photos as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/photo/' . $item->image) }}" height="150"
                                                        alt="">
                                                </td>
                                                <td>{{ $item->judul }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#editModal{{ $item->id }}">Edit</a>
                                                    <a href="{{ route('photo.destroy', $item->id) }}" class="btn btn-danger"
                                                        data-confirm-delete="true">Hapus</a>
                                                </td>
                                            </tr>
                                            {{-- editmodal --}}
                                            <div class="modal fade" id="editModal{{ $item->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Upload photo</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('photo.update', $item->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <input type="hidden" name="id_photo"
                                                                    value="{{ $item->id }}">

                                                                <div class="form-group">
                                                                    <label for="Inputimage">Upload Foto</label>
                                                                    <div class="col-lg-4">
                                                                        <img src="{{ asset('storage/photo/' . $item->image) }}"
                                                                            alt="" height="150">
                                                                    </div>
                                                                    <input type="hidden" name="old_image"
                                                                        value="{{ $item->image }}">
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input"
                                                                                id="Inputimage" name="image">
                                                                            <label class="custom-file-label"
                                                                                for="Inputimage">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="InputJudul">Judul Kegiatan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="InputJudul" value="{{ $item->judul }}"
                                                                        placeholder="Masukan Judul" name="judul">
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {{-- uploadModal --}}
    <div class="modal fade" id="uploadModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload photo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="Inputimage">Upload Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="Inputimage" name="image">
                                    <label class="custom-file-label" for="Inputimage">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputJudul">Judul Kegiatan</label>
                            <input type="text" class="form-control" id="InputJudul" value="{{ old('judul') }}"
                                placeholder="Masukan Judul" name="judul">
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

@section('js')
    {{-- Datatables --}}
    <script src="{{ asset('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    {{-- custom file input  --}}
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('assets/adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Good job!',
                '{{ session('success') }}',
                'success'
            )
        </script>
    @endif
    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
