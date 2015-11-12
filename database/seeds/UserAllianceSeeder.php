<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Alliance;

class UserAllianceSeeder extends Seeder{
    public function run(){
        DB::table('user_alliance')->delete();
    }
}