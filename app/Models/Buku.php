<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['nama_buku,author,id_publisher,id_kategori,image,stok'];
    protected $visible =['nama_buku,author,id_publisher,id_kategori,image,stok'];

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'id_publisher');    
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');   
    }
   
}
