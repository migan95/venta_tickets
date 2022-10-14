<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Carrito;
use App\Models\Evento;

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
        'role',
        'password',
        'dpi',
        'nit',
        'telefono'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'cliente_status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contadorCarrito(){
        return Carrito::where('user_id', $this->id)->with('ticket')->get()->count();
    }

    public function eventos(){
        $carritos = Carrito::where('user_id', $this->id)->with('ticket')->get();

        $ticketIds = [];
        foreach($carritos as $carrito){
            $tickets = $carrito->ticket()->get();

            if(count($tickets) > 0) array_push($ticketIds, $tickets[0]->id);
        }

        $events = Evento::with([ 'tickets' => function($query) use ($ticketIds){
                $query->whereIn('id', $ticketIds);
        }])->get();

        $ticketAgregado = false;

        foreach($events as $evento){
            if(!empty($evento->tickets)){

                foreach($evento->tickets as $ticket){
                    $ticketId = $ticket->id;
                    foreach($carritos as $carrito){
                        if($ticketId == $carrito->ticket_id){
                            $ticket["carrito_id"] = $carrito->id;

                            if(!$ticketAgregado) $ticketAgregado = true;
                        }
                    }
                }
            }
        }

        return $ticketAgregado ? $events : [];
    }
}
