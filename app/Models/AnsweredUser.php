<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Question;
use App\Models\Answer;

class AnsweredUser extends Model {
    use HasFactory;
    protected $table = "answered_user";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'user_id',
        'question_id',
        'answer_id',
    ];
    public $timestamps = true;
    
    /**
     * Include the relation whit model user.
     */
    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Include the relation whit model question.
     */
    public function question() {
        return $this->belongsTo('App\Models\Question', 'question_id');
    }

     /**
     * Include the relation whit model question.
     */
    public function anwser() {
        return $this->belongsTo('App\Models\Answer', 'answer_id');
    }
}
