<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_messages';
    protected $primaryKey = 'id';
    public $incrementing = 'true';
    protected $keyType = 'int';
    public $timestamps = false;
}
