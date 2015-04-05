

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
    /**
     * These are permanent fixtures in the database
     */
    public function run(){
        DB::table('units')->delete();
        Unit::create(['grade_id'=>'1','subject_id'=>'1']);
        Unit::create(['grade_id'=>'2','subject_id'=>'1']);
        Unit::create(['grade_id'=>'3','subject_id'=>'1']);
        Unit::create(['grade_id'=>'4','subject_id'=>'1']);
        Unit::create(['grade_id'=>'5','subject_id'=>'1']);
        Unit::create(['grade_id'=>'6','subject_id'=>'1']);
        Unit::create(['grade_id'=>'7','subject_id'=>'1']);
        Unit::create(['grade_id'=>'8','subject_id'=>'1']);
        Unit::create(['grade_id'=>'1','subject_id'=>'2']);
        Unit::create(['grade_id'=>'2','subject_id'=>'2']);
        Unit::create(['grade_id'=>'3','subject_id'=>'2']);
        Unit::create(['grade_id'=>'4','subject_id'=>'2']);
        Unit::create(['grade_id'=>'5','subject_id'=>'2']);
        Unit::create(['grade_id'=>'6','subject_id'=>'2']);
        Unit::create(['grade_id'=>'7','subject_id'=>'2']);
        Unit::create(['grade_id'=>'8','subject_id'=>'2']);
        Unit::create(['grade_id'=>'1','subject_id'=>'3']);
        Unit::create(['grade_id'=>'2','subject_id'=>'3']);
        Unit::create(['grade_id'=>'3','subject_id'=>'3']);
        Unit::create(['grade_id'=>'4','subject_id'=>'3']);
        Unit::create(['grade_id'=>'5','subject_id'=>'3']);
        Unit::create(['grade_id'=>'6','subject_id'=>'3']);
        Unit::create(['grade_id'=>'7','subject_id'=>'3']);
        Unit::create(['grade_id'=>'8','subject_id'=>'3']);
        Unit::create(['grade_id'=>'1','subject_id'=>'4']);
        Unit::create(['grade_id'=>'2','subject_id'=>'4']);
        Unit::create(['grade_id'=>'3','subject_id'=>'4']);
        Unit::create(['grade_id'=>'4','subject_id'=>'4']);
        Unit::create(['grade_id'=>'5','subject_id'=>'4']);
        Unit::create(['grade_id'=>'6','subject_id'=>'4']);
        Unit::create(['grade_id'=>'7','subject_id'=>'4']);
        Unit::create(['grade_id'=>'8','subject_id'=>'4']);
        Unit::create(['grade_id'=>'1','subject_id'=>'5']);
        Unit::create(['grade_id'=>'2','subject_id'=>'5']);
        Unit::create(['grade_id'=>'3','subject_id'=>'5']);
        Unit::create(['grade_id'=>'4','subject_id'=>'5']);
        Unit::create(['grade_id'=>'5','subject_id'=>'5']);
        Unit::create(['grade_id'=>'6','subject_id'=>'5']);
        Unit::create(['grade_id'=>'7','subject_id'=>'5']);
        Unit::create(['grade_id'=>'8','subject_id'=>'5']);
        Unit::create(['grade_id'=>'1','subject_id'=>'6']);
        Unit::create(['grade_id'=>'2','subject_id'=>'6']);
        Unit::create(['grade_id'=>'3','subject_id'=>'6']);
        Unit::create(['grade_id'=>'4','subject_id'=>'6']);
        Unit::create(['grade_id'=>'5','subject_id'=>'6']);
        Unit::create(['grade_id'=>'6','subject_id'=>'6']);
        Unit::create(['grade_id'=>'7','subject_id'=>'6']);
        Unit::create(['grade_id'=>'8','subject_id'=>'6']);
        }
}