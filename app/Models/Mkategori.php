<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mkategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
   
    #kalau kolom primary keynya bernama id, maka baris dibawah ini boleh diisi, dan boleh juga tidak buat
    protected $primaryKey = 'kdkategori';
    public $incrementing = false;          
    
    protected $fillable = [
            'kdkategori',
            'namakategori'
    ];
    public function get_berita(){
        return $this->hasMany('App\\Models\\Mberita', 'kdkategori');
    }

    
}
