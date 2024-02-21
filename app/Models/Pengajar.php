<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;
    protected $table=('pengajar');

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_guru',
        'id_mapel',
        'kelas',
        'jam_pelajaran',
    ];

    public function guruData()
    {
        return $this->belongsTo(guru::class, 'id_guru');
    }

    public function mapelData()
    {
        return $this->belongsTo(mapel::class, 'id_mapel');
    }
}
