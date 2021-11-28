<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laydulieutext extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'texttruyen',
    ];
    protected $primaryKey = 'id';
    protected $table = 'laydulieutext';
}
