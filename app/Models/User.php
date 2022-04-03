<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    // con esta función modificamos el atributo name y lo pasamos a minusculas al entrar a la BBDD y Capitalizamos las palabras cuando recuperamos la propiedad name

    protected function name() : Attribute
    {
        return new Attribute(
            /* get: function($value){
                return ucwords($value);
            }, 

            set: function($value){
                return strtolower($value);
            }*/

            //En php 8 se introducen las funciones flecha muy usadas en js. El código anterior quedaria así

            get: fn($value) =>ucwords($value),
            set: fn($value) =>strtolower($value)
        );
    }
}
