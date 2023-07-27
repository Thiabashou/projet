<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Demande extends Model
{
    use HasFactory;
    protected $fillable = ['motif', 'destination','date_depart', 'date_retour', 'type', 'status', 'user_id', 'heure_depart', 'index_km_depart', 'heure_retour','index_km_retour'];
    protected $table = 'demande';
    protected $primaryKey = 'idDm';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
   
    
}