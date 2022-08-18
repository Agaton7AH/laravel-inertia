<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZonaTipo extends Model
{
    use HasFactory;
    protected $connection ='pgsql';
    protected $table='public.zonas_tipo';
    protected $primaryKey = 'id_zonas_tipo';
    public $timestamps = false;
    protected $fillable =[
        'cod', 'nom_corto','nombre_'
    ];
}
