<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
<<<<<<< HEAD
        'name',
        'email',
        'password',
=======
        'email',
        'nama_lengkap',
        'username',
        'password',
        'no_handphone',
        'gender',
        'alamat_lengkap',
        'NIK',
        'nama_kampus/sekolah',
        'NIM',
        'NISN',
        'jurusan/prodi',
        'kelas/semester',
        'Keperluan',
        'status',
        'role_id',
        'login_terakhir',
>>>>>>> bb27095f70afd44f61cef44f68bae7d966f90c2a
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
