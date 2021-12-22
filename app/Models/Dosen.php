<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_dosen', 
        'nama',  
        'alamat', 
        'tgl_lahir',  
        'email', 
        'prodi',  
        'falkutas',
        'foto'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   
}
