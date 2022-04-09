<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // ponemos filtros para la asignación masiva de propiedades al crear,updatear registros
    // con $fillable le pasamos a Laravel los campos que queremos que se modifiquen, creen en un array
    // con $guarded le pasamos a Laravel los campos que NO queremos que se modifiquen, creen en un array
    // con utilizar uno de los 2 tendremos suficiente

    /* protected $fillable=[
        'name',
        'descripcion',
        'categoria'
    ]; */

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug' ;
    }
}
