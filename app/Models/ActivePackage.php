<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivePackage extends Model
{
    protected $table = 'active_packages';
    protected $primaryKey = 'id';
    public $incrementing = 'true';
    protected $keyType = 'int';
    public $timestamps = false;

    public function matchUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    // public function ref()
    // {
    //     return $this->hasOne(RefLink::class, 'user_id', 'user_id');
    // }
}
