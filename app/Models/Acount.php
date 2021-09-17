<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acount extends Model
{
    use HasFactory;
    protected $table = 'acounts';

    protected $fillable = ['balance', 'type', 'holder_id'];

    public function holder()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
