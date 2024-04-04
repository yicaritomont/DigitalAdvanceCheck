<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Answer extends Model {
    use HasFactory;
    protected $table = "answer";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'option',
        'points',
        'status',
        'question_id',
    ];
    public $timestamps = true;
    
    /**
     * Include the relation whit model question.
     */
    public function question() {
        return $this->belongsTo('App\Models\Question', 'question_id');
    }
}
