<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factor;

class Dimension extends Model {
    use HasFactory;
    protected $table = "dimension";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'status',
        'min_range',
        'max_range',
        'description',
        'additional_info',
        'factor_id',
    ];
    public $timestamps = true;
    /**
     * Include the relation whit model dimension.
     */
    public function factor() {
        return $this->belongsTo('App\Models\Factor', 'factor_id');
    }
}
