<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'document_number',
    ];
}
