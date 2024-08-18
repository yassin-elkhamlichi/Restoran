<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'table_id',
        'name',
        'email',
        'dateTime',
        'nombre_per'
    ];
    public function table()
    {
        return $this->hasOne('App\Models\table', 'id', 'table_id');
    }

}
