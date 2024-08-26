<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $respuestas = [
            [
                "option" => "Totalmente De acuerdo",
                "point" => 2.5,
            ],
            [
                "option" => "De acuerdo",
                "point" => 1.5,
            ],
            [
                "option" => "Indiferente",
                "point" => 1,
            ],
            [
                "option" => "Desacuerdo" ,
                "point" => 0.5,
            ],
            [
                "option" =>  "Totalmente en Desacuerdo" ,
                "point" => 0,
            ],
        ];
        $preguntas = [];
        $j = 1;
        for ($i = 1; $i <= 40; $i++) {
            foreach( $respuestas as $value) {
                $preguntas[$j] = [
                    'id' => $j,
                    'option' => $value['option'],
                    'points' => $value['point'],
                    'status' => 1,
                    'question_id' => $i,
                ];
                $j++;
            }
        }
  
        DB::table('answer')->insert( $preguntas);
    }
}
