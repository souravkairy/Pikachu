<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletSetting extends Model
{
    protected $table = 'wallet_setting';
    protected $primaryKey = 'id';
    public $incrementing = 'true';
    protected $keyType = 'int';
    public $timestamps = false;
}
