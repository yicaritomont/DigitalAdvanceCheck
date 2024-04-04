<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\From;

class Question extends Model {
    use HasFactory;
    protected $table = "question";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'statement',
        'status',
        'form_id',
    ];
    public $timestamps = true;

    /**
     * Include the relation whit model Form.
     */
    public function form() {
        return $this->belongsTo('App\Models\Form', 'form_id');
    }
}