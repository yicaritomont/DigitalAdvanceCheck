<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dimension;

class Form extends Model {
    use HasFactory;
    protected $table = "form";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'dimension_id',
    ];
    public $timestamps = true;

    /**
     * Include the relation whit model dimension.
     */
    public function dimension() {
        return $this->belongsTo('App\Models\Dimension', 'dimension_id');
    }
}
