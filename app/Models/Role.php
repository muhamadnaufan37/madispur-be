<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'deskripsi',
        'jumlah_user',
        'created_date',
        'created_by',
        'modified_date',
        'modified_by',
    ];
}
