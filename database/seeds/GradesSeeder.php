<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Grade;

class GradesSeeder extends Seeder{
    public function run(){
        DB::table('grades')->delete();

        $grades =[
            '1'=>'One',
            '2'=>'Two',
            '3'=>'Three',
            '4'=>'Four',
            '5'=>'Five',
            '6'=>'Six',
            '7'=>'Seven',
            '8'=>'Eight'
        ];

        foreach($grades as $number => $string){
            Grade::create(['number' => $number, 'string' => $string]);
        }
    }
}