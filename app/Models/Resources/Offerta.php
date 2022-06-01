<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Appartamento;
use App\Models\Resources\PostoLetto;

class Offerta extends Model {

    protected $table = 'offerta';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public $timestamps = false;

    public function postoLetto(){
        return $this->hasOne(PostoLetto::class,'offerta');
    }

    public function appartamento(){
        return $this->hasOne(Appartamento::class,'offerta');
    }
}