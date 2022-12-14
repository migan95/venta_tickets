<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'precio',
        'costo',
        'posicion',
        'codigo',
        'user_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id');
    }

    /*public function carritos()
    {
        return $this->hasMany('App\Models\Carrito', 'ticket_id');
    }*/
}
