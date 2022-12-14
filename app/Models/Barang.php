<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        "nama",
        "harga",
        'genre',
        "stok",
        "image",
        "deksripsi",
        "review",
        "nama_review"
    ];
}
