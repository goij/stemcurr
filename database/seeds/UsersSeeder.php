<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();
        User::create(['username'=>'cpatel','password'=>bcrypt('123456'),'name'=>'Chetna Patel','admin'=>true,'faculty'=>true,'teacher'=>true,'email'=>'cpatel@aurora.edu', 'affiliation'=>'Aurora University']);
        User::create(['username'=>'rrahn','password'=>bcrypt('123456'),'name'=>'Regina Rahn','admin'=>true,'faculty'=>true,'teacher'=>true,'email'=>'rrahn@aurora.edu', 'affiliation'=>'Aurora University']);
        User::create(['username'=>'sjmiller','password'=>bcrypt('123456'),'name'=>'Sharon Miller','admin'=>true,'faculty'=>true,'teacher'=>true,'email'=>'sjmiller@aurora.edu', 'affiliation'=>'Aurora University']);
        User::create(['username'=>'mmackay03','password'=>bcrypt('123456'),'name'=>'Margo Mac Kay','admin'=>true,'faculty'=>true,'teacher'=>true,'partner'=>true,'email'=>'mmackay03@aurora.edu', 'affiliation'=>'Aurora University']);
    }
}