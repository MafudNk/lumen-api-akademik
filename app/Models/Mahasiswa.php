<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nbi', 
        'nama',  
        'alamat', 
        'tgl_lahir',  
        'email', 
        'no_telp', 
        'prodi',  
        'fakultas', 
        'ipk', 
        'dosen_wali', 
        'foto'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   
}
