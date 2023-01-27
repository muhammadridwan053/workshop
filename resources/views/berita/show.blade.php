@extends('layout.dashboard')

@section('content')
<div class="container">

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Show Berita</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('berita.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <?php foreach ($berita as $beritas) { ?>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul</strong>
                    <input type="text" name="judul" value="{{ $beritas->judul }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isi Berita</strong><br>
                    <textarea name="isi" class="form-control">{{ $beritas->isi }}</textarea> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori:</strong>
                     <select name="kdkategori" id="kdkategori" class="form-control">
                                    
                                    <option value="{{ $beritas->kdkategori }}">{{ $beritas->get_kategori->namakategori }}</option>
                     </select>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <img src="{{ asset('img/'.$beritas->gambar) }}" width="100">

                </div>  
            </div>         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author</strong>
                    <input type="text" name="author" value="{{ $beritas->author }}" class="form-control" placeholder="Author"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pengguna</strong>
                        <select name='idpengguna' id="idpengguna" class="form-control">
                                   <option value="{{ $beritas->idpengguna }}">{{ $beritas->idpengguna }}</option>
                        </select>
                </div>
            </div>            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tampil di Slider</strong>
                        <select name='img_slider' id="img_slider" class="form-control">
                                  <option value="{{ $beritas->img_slider }}">{{ $beritas->img_slider }}</option>
                        </select>
                </div>
            </div>
        </div>
    <?php } ?>
<br>
<br>
<br>
</div>
@endsection
