<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Standard;

class StandardsSeeder extends Seeder{
    public function run(){
        DB::table('standards')->delete();

        $standards =[
            ["Career Awareness",1,"http://www.nextgenscience.org/next-generation-science-standards"],
            ["Design Process Understanding",1,"http://www.socialstudies.org/standards/teacherstandards"],
            ["5-LS1-1 [SEP 7, DCI: LS1.C, CC5]",2,"http://www.nextgenscience.org/next-generation-science-standards"],
            ["MS-LS1-3 [SEP 7, DCI: LS1.A, CC4]",2,"http://www.nextgenscience.org/next-generation-science-standards"],
            ["MP.4", 3, "http://www.nextgenscience.org/next-generation-science-standards"],
            ["6.EE.C.9",3, "http://www.nextgenscience.org/next-generation-science-standards"],
            ["6.EE.C.9",4, "http://www.nextgenscience.org/next-generation-science-standards"],
            ["6.EE.C.9",4, "http://www.nextgenscience.org/next-generation-science-standards"],
            ["Agricultural Application", 5, "http://www.nextgenscience.org/next-generation-science-standards"],
            ["Morton Arboretum",6, "http://www.nextgenscience.org/next-generation-science-standards"]
        ];

        foreach($standards as $standard){
            Standard::create(['name' => $standard[0],'category_id' => $standard[1], 'link' => $standard[2]]);
        }
    }
}