<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model {

    protected $table = 'chat';
    protected $primaryKey = 'id';
    public $timestamps = false;
}