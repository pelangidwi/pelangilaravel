<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;


class Buku extends Model
{
    //
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'idpengarang',
        'idketegori',
        'tahunterbit',
        'sinopsis',
        'cover'
    ];

    public function buku()
    {
        return $this->belongsTo(Category::class);
    }



}
