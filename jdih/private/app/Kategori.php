<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    protected $fillable = [
        'nama_kategori'
    ];

    use SoftDeletes;
    protected $dates =['deleted_at'];
}
