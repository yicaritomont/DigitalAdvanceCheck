<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Form;


class Attempt extends Model
{
    use HasFactory;
    protected $table = "attemps";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'user_id',
        'attemp_number',
        'completed',
    ];
    public $timestamps = true;
    
    /**
     * Include the relation whit model question.
     */
    public function question() {
        return $this->belongsTo('App\Models\Question', 'question_id');
    }

    /**
     * Include the relation whit model user.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
    /**
     * Include the relation whit model Fomr
     */
    public function form() {
        return $this->belongsTo(Form::class);
    }
}

