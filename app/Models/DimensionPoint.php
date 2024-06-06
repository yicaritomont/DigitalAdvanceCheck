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

    public function progressitemDimension($item){

        $howlong = strlen($item);
        switch (true) {
            case  ($howlong <= 100):
                $porcent = 25;
                $style = "bg-danger";
            break;
            case  ($howlong > 100 && $howlong <= 200):
                $porcent = 50;
                $style = "bg-warning";
            break;
            case  ($howlong > 200 && $howlong <= 300):
                $porcent = 90;
                $style = "bg-info";
            break;
            case  ($howlong > 300 ):
                $porcent = 100;
                $style = "bg-success";
            break;
            default:
              $porcent = 0;
              $style = "";
          }

        return '<div class="col-4">
            <div class="progress">
                <div class="progress-bar progress-bar-striped '.$style.'" role="progressbar" style="width: '.$porcent.'%" aria-valuenow="'.$porcent.'" aria-valuemin="0" aria-valuemax="100" alt="le le le "></div>
            </div>
        </div>';
        
    }
}
