<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dimension;
use App\Models\MadurityLevel;

class DimensionPoint extends Model {

    use HasFactory;
    protected $table = "dimension_point";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'min_score',
        'max_score',
        'recomendations',
        'remark',
        'best_practice',
        'congrats',
        'dimension_id',
        'madurity_level_id',
    ];
    public $timestamps = true;

    /**
     * Include the relation whit model dimension.
     */
    public function dimension() {
        return $this->belongsTo('App\Models\Dimension', 'dimension_id');
    }

    /**
     * Include the relation whit model MadurityLevel.
     */
    public function madurityLevel() {
        return $this->belongsTo('App\Models\MadurityLevel', 'madurity_level_id');
    }
}
