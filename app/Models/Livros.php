<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;

    protected $table = 'livros';

    protected $fillable = ['image', 'titulo', 'autor', 'sinopse', 'paginas', 'paginas_lidas', 'editora', 'isbn', 'status'];

    public $timestamps = false;
}
