<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Offerta extends Model {

    protected $table = 'offerta';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public $timestamps = false;
}