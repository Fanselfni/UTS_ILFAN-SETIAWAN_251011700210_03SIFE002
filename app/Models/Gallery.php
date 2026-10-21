<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    // Menentukan kolom apa saja yang boleh diisi (mass assignable)
    protected $fillable = [
        'title',
        'artist',
        'resolution',
        'price',
        'image',
        'software_used',
    ];
}