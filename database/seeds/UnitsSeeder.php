<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsSeeder extends Seeder
{
    /**
     * These are permanent fixtures in the database
     */
    public function run()
    {
        DB::table('units')->delete();
        Unit::create(['grade_id' => '1', 'subject_id' => '1']);
        Unit::create(['grade_id' => '2', 'subject_id' => '1']);
        Unit::create(['grade_id' => '3', 'subject_id' => '1']);
        Unit::create(['grade_id' => '4', 'subject_id' => '1']);
        Unit::create(['grade_id' => '5', 'subject_id' => '1']);
        Unit::create(['grade_id' => '6', 'subject_id' => '1']);
        Unit::create(['grade_id' => '1', 'subject_id' => '2']);
        Unit::create(['grade_id' => '2', 'subject_id' => '2']);
        Unit::create(['grade_id' => '3', 'subject_id' => '2']);
        Unit::create(['grade_id' => '4', 'subject_id' => '2']);
        Unit::create(['grade_id' => '5', 'subject_id' => '2']);
        Unit::create(['grade_id' => '6', 'subject_id' => '2']);
        Unit::create(['grade_id' => '1', 'subject_id' => '3']);
        Unit::create(['grade_id' => '2', 'subject_id' => '3']);
        Unit::create(['grade_id' => '3', 'subject_id' => '3']);
        Unit::create(['grade_id' => '4', 'subject_id' => '3']);
        Unit::create(['grade_id' => '5', 'subject_id' => '3']);
        Unit::create(['grade_id' => '6', 'subject_id' => '3']);
        Unit::create(['grade_id' => '1', 'subject_id' => '4']);
        Unit::create(['grade_id' => '2', 'subject_id' => '4']);
        Unit::create(['grade_id' => '3', 'subject_id' => '4']);
        Unit::create(['grade_id' => '4', 'subject_id' => '4']);
        Unit::create(['grade_id' => '5', 'subject_id' => '4']);
        Unit::create(['grade_id' => '6', 'subject_id' => '4']);
        Unit::create(['grade_id' => '1', 'subject_id' => '5']);
        Unit::create(['grade_id' => '2', 'subject_id' => '5']);
        Unit::create(['grade_id' => '3', 'subject_id' => '5', 'title' => "TITLE", 'overview' => "Students have the opportunity to engage in an energy filled unit of study as they examine how plants and animals acquire, use and release energy. Through a series of research and investigations, students will become illuminated about energy productions in organisms of all kinds. The unit will also allow the opportunity for students to apply their light-bulb moments to the design and creation of a highly efficient greenhouse model where they can observe the best technology and research about plant energy at work.
", "team_leader" => "Sandy Quintanilla(SD129)", "team_members" => "Leigh Apple(SD308), Allison Landstrom(SD204)
", "non_profit_partners" => "Hannah Rennard (Morton Arboretum), Margo Schmitt (Robert Crown Centers)
", "corporate_partners" => "William Spitzig & Tamara Vincer (Cabot Micro Electronics)
", "au_faculty" => "Chetna Patel
"]);
        Unit::create(['grade_id' => '4', 'subject_id' => '5']);
        Unit::create(['grade_id' => '5', 'subject_id' => '5']);
        Unit::create(['grade_id' => '6', 'subject_id' => '5']);
        Unit::create(['grade_id' => '1', 'subject_id' => '6']);
        Unit::create(['grade_id' => '2', 'subject_id' => '6']);
        Unit::create(['grade_id' => '3', 'subject_id' => '6']);
        Unit::create(['grade_id' => '4', 'subject_id' => '6']);
        Unit::create(['grade_id' => '5', 'subject_id' => '6']);
        Unit::create(['grade_id' => '6', 'subject_id' => '6']);
    }
}