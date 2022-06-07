<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Appartamento;
use App\Models\Resources\PostoLetto;
use App\Models\Resources\Interagisce;

class Offerta extends Model {

    protected $table = 'offerta';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public $timestamps = false;

    public function interagisce()
    {
        return $this->hasMany(Interagisce::class,'offerta');
    }

}