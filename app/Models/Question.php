<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\From;
use App\Models\Answer;

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

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function cantidadRespuestas()
    {
        return $this->answers()->count();
    }

    public function howManyAnswers($question) {
        $pregunta = Question::findOrFail($question);
        $cantidadRespuestas = $pregunta->cantidadRespuestas();
        return $cantidadRespuestas;
    }
}