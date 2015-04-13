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
        User::create(['username'=>'mmichaels01','password'=>bcrypt('123456'),'name'=>'Mike Michaels','admin'=>true,'faculty'=>true,'teacher'=>true,'email'=>'mmichaels01@aurora.edu']);
        User::create(['username'=>'goij','password'=>bcrypt('123456'),'name'=>'Gregory Oij','admin'=>true,'faculty'=>true,'teacher'=>true,'email'=>'goij@aurora.edu']);
        User::create(['username'=>'cpatel','password'=>bcrypt('123456'),'name'=>'Chetna Patel','admin'=>true,'faculty'=>true,'teacher'=>true,'email'=>'cpatel@aurora.edu']);
        User::create(['username'=>'rrahn','password'=>bcrypt('123456'),'name'=>'Regina Rahn','admin'=>true,'faculty'=>true,'teacher'=>true,'email'=>'rrahn@aurora.edu']);
        User::create(['username'=>'sjmiller','password'=>bcrypt('123456'),'name'=>'Sharon Miller','admin'=>true,'faculty'=>true,'teacher'=>true,'email'=>'sjmiller@aurora.edu']);
        User::create(['username'=>'teacher','password'=>bcrypt('123456'),'name'=>'teacher','admin'=>false,'faculty'=>false,'teacher'=>true,'email'=>'teacher@aurora.edu']);
        User::create(['username'=>'admin','password'=>bcrypt('123456'),'name'=>'admin','admin'=>true,'faculty'=>false,'teacher'=>false,'email'=>'admin@aurora.edu']);
        User::create(['username'=>'faculty','password'=>bcrypt('123456'),'name'=>'faculty','admin'=>false,'faculty'=>true,'teacher'=>false,'email'=>'faculty@aurora.edu']);
        User::create(['username'=>'guest','password'=>bcrypt('123456'),'name'=>'guest','admin'=>false,'faculty'=>false,'teacher'=>false,'email'=>'guest@aurora.edu']);
    }
}