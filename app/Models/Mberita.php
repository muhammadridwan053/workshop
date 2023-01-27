<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mberita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    
    #kalau kolom primary keynya bernama id, maka baris dibawah ini boleh diisi, dan boleh juga tidak buat
    protected $primaryKey = 'id';            
    protected $fillable = [
            'judul',
            'isi',
            'tanggal',
            'kdkategori',
            'views',
            'gambar',
            'idpengguna',
            'author',
            'img_slider'
    ];
    public function get_kategori(){
        return $this->belongsTo('App\\Models\\Mkategori', 'kdkategori');
    }
}
