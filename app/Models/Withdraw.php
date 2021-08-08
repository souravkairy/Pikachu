<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $table = 'withdraw_list';
    protected $primaryKey = 'id';
    public $incrementing = 'true';
    protected $keyType = 'int';
    public $timestamps = false;
}
