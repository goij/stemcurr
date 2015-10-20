<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 3/30/2015
 * Time: 5:35 PM
 */


use Illuminate\Database\Seeder;
use App\Question;

class QuestionStandardSeeder extends Seeder
{
    public function run()
    {
        DB::table('question_standard')->delete();

        $question_standards = [


        ];

        foreach ($question_standards as $qs) {

            DB::table('question_standard')->insert(
                [
                    'question_id' => $qs[0],
                    'standard_id' => $qs[1]
                ]
            );
        }
    }
}