<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $table = "TokenTransaction";
    protected $fillable = [
        "amount",
        "type",
        "description",
        "balance",
        "user_id",
    ];
}
