<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = "Sede";
    protected $primaryKey="id_sede";
    public $timestamps =false;

    protected $fillable=['nombre_sede', 'ciudad', 'descripcion'];
    protected $guarded=[];
}

