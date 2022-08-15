<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    protected $fillable = [
        'user_id', 'date', 'price', 'description' , 'for_what','importance','title','family_id'
    ];
}
