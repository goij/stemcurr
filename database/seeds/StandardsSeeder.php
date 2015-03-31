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
            ["Career Awareness","AU/CAT Student Framework","http://localhost"],
            ["Design Process Understanding","AU/CAT Student Framework","http://localhost"],
            ["5-LS1-1 [SEP 7, DCI: LS1.C, CC5]","NGSS","http://localhost"],
            ["Career Awareness","AU/CAT Student Framework","http://localhost"],
            ["MS-LS1-3 [SEP 7, DCI: LS1.A, CC4]","NGSS","http://localhost"],
            ["MP.4", "CCSS Math", "http://localhost"],
            ["6.EE.C.9","CCSS Math", "http://localhost"],
            ["6.EE.C.9","CCSS ELA", "http://localhost"],
            ["6.EE.C.9","Illinois Pathways", "http://localhost"],
            ["Agricultural Application", "Supply Chain Process", "http://localhost"],
            ["Morton Arboretum","Corporate/Not for Profit Connection", "http://localhost"]
        ];

        foreach($standards as $standard){
            Standard::create(['name' => $standard[0],'category' => $standard[1], 'link' => $standard[2]]);
        }
    }
}