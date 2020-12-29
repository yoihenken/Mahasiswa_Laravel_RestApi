<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    //Nama table
    protected $table = 'mahasiswa';
    //atribut primary key
    protected $primaryKey = 'nim';
}
