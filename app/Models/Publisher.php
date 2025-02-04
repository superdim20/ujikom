<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    protected $fillable = ['nama_publisher'];
    protected $visible =['nama_publisher'];

    public function publisher(){
        return $this-> hashMany(Buku::class);
    }
}
