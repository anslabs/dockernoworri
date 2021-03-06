<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\UsesUuid;

class TrustedLogo extends Model
{
    use HasFactory;

    //protected $guarded = []; 

    protected $fillable = [
        'url', 'path', 'name'
    ];

}
