<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table=('mapel');

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_mapel',
    ];
}