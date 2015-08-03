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

        $categories =[

        ["AU/CAT Student Framework",0,0],



        ["NGSS",0,0],
            ["CC",1,2],
            ["DCI-Physical Science",1,2],
            ["DCI-Life Science",1,2],
            ["DCI-Earth and Space Science",1,2],
            ["DCI-Engineering, Technology & Applications of Science",1,2],
            ["SEP",1,2],

        ["CCSS Math",0,0],
            ["3rd Grade",1,9],
            ["4th Grade",1,9],
            ["5th Grade",1,9],
            ["6th Grade",1,9],
            ["7th Grade",1,9],
            ["8th Grade",1,9],
        ["CCSS ELA",0,0],
            ["3rd Grade",1,16],
            ["4th Grade",1,16],
            ["5th Grade",1,16],
            ["6th Grade",1,16],
            ["7th Grade",1,16],
            ["8th Grade",1,16],
            ["6-8th Grade",1,16],
        ["Illinois Pathways",0,0],
        ["Supply Chain Connections",0,0],
        ["JCD STEM Labs",0,0],
        ["Corporate/Not for Profit Connection",0,0],


        ];
        foreach($categories as $category){
            Category::create(['name' => $category[0],'subcategory' => $category[1], 'parent_category_id' => $category[2]]);
        }
    }
}