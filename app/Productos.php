<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = "productos";
    protected $filable=["modelo", "rutaImagen" ,"precio","descripcion", "categoria"];
}
