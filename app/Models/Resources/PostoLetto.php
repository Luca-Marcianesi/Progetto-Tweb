<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class PostoLetto extends Model {

    protected $table = 'postoLetto';
    protected $primaryKey = 'offerta';
    protected $guarded = ['offerta'];

    public $timestamps = false;
}