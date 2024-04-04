<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MadurityLevel extends Model {
    use HasFactory;
    protected $table = "madurity_level";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'status',
    ];
    public $timestamps = true;

}
