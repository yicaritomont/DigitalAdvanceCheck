<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    use HasFactory;
    protected $table = "factor";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'status',
    ];
    public $timestamps = true;
}
