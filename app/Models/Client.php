<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='clients';
    public $timestamps = false;
    // guarded ma obliga sa completez toate campurile
    
    protected $guarded=[];
    //alternativ pot sa folosesc filable
    use HasFactory;
}
