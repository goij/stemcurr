<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsSeeder extends Seeder{
    public function run(){
        DB::table('units')->delete();

        $names =[
            'Geology & Space',
            'Matter & Energy',
            'Force & Motion',
            'Weather & Climate',
            'Structure & Function',
            'Ecosystems & Adaptations'
        ];

        foreach($names as $name){
            Unit::create(['name' => $name]);
        }
    }
}