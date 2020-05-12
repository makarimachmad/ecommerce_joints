<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'berandas';
    protected $fillable = ['kategori', 'nama', 'deskripsi', 'gambar', 'harga'];
    public $updated_at = false;
    public $created_at = false;
    public $timestamps = false;
}