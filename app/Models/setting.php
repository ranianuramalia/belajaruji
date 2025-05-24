<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $fillable =[
         'nama_sekolah',
             'kepala_sekolah',
             'alamat_sekolah',
             'foto_sekolah',
             'visi',
             'misi'
    ];
}
