<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder{
    public function run(){
        DB::table('categories')->delete();

        Category::create(['name'=>'AU/CAT Student Framework']);
        Category::create(['name'=>'NGSS']);
        Category::create(['name'=>'CCSS Math']);
        Category::create(['name'=>'CCSS ELA']);
        Category::create(['name'=>'Illinois Pathways']);
        Category::create(['name'=>'Corporate/Not for Profit Connection']);
    }
}