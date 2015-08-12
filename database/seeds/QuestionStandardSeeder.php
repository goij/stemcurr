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

        $q = Question::find(1);

        $q->standards()->sync([1,2,3,4,5]);
    }
}