<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kategori'];
    protected $visible =['nama_kategori'];

    
    public function kategori(){
        return $this-> hashMany(Buku::class);
    }
}
