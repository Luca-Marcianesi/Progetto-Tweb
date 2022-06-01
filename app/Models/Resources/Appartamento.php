<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Offerta;

class Appartamento extends Model {

    protected $table = 'appartamento';
    protected $primaryKey = 'offerta';
    protected $guarded = ['offerta'];
    public $timestamps = false;

   
}
