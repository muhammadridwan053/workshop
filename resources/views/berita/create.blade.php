@extends('layout.dashboard')

@section('content')
<div class="container">

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Create Berita</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('berita.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul</strong>
                    <input type="text" name="judul" value="" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isi Berita</strong><br>
                    <textarea name="isi" class="form-control"></textarea> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori:</strong>
                     <select name="kdkategori" id="kdkategori" class="form-control">
                                    <option value="">== Kategori ==</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->kdkategori }}">{{ $kategori->namakategori }}</option>
                                    @endforeach
                     </select>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">File Gambar (JPG, maksimal ukuran file 3MB)</label>
                    <input type="file" class="form-control" name="filedokumen" id="filedokumen" placeholder="Dokumen/Berkas">
                </div>  
            </div>         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author</strong>
                    <input type="text" name="author" value="" class="form-control" placeholder="Author"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pengguna</strong>
                        <select name='idpengguna' id="idpengguna" class="form-control">
                                  <option value="Admin">Admin</option>
                                  <option value="Operator">Operator</option>
                        </select>
                </div>
            </div>            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tampil di Slider</strong>
                        <select name='img_slider' id="img_slider" class="form-control">
                                  <option value="1">Ya</option>
                                  <option value="0">Tidak</option>
                        </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Store</button>
            </div>
        </div>

    </form>
<br>
<br>
<br>
</div>
@endsection
