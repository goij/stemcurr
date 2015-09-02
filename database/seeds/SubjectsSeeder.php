

<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsSeeder extends Seeder{
    public function run(){
        DB::table('standards')->delete();

        $names =[
            'Ecosystems & Adaptations',
            'Force & Motion',
            'Geology & Space',
            'Matter & Energy',
            'Structure & Function',
            'Weather, Climate, & Human Impact'
        ];


        foreach($names as $name){
            Subject::create(['name' => $name]);
        }
    }
}