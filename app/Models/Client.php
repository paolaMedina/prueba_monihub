<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';

    protected $fillable = ['names', 'identity_card', 'email'];

    public function acounts()
    {
        return $this->belongsTo('App\Models\Acount');
    }
}
