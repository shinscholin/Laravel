<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cl_film_screening extends Model
{
	 protected $fillable = [
	    'date', 'hour', 'cm_movie_id','price','free_seats'
    ];

    public function cmMovie()
    {
    	return $this->belongsTo(cm_movie::class, 'cm_movie_id');
    }

     public function soldTickets()
    {
    	return $this->hasMany(CmSoldTicket::class);
    }
}
