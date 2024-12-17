<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KNTVattuModel extends Model
{
    use HasFactory;
    protected $table = "kntvattu";
    protected $fillable = ['KNTMaVT','KNTTenVT','KNTDVTinh','KNTPhantram'];
}
