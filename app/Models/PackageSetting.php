<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageSetting extends Model
{
    protected $table = 'packages_setting';
    protected $primaryKey = 'id';
    public $incrementing = 'true';
    protected $keyType = 'int';
    public $timestamps = false;
}
