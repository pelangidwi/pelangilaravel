<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Category extends Model
{
    //
    use HasFactory;

    // definisikan nama table
    protected $table = 'kategori';

    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }

}
