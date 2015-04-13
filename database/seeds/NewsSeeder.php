<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Unit;
use App\News;
class NewsSeeder extends Seeder
{
    /**
     * These are permanent fixtures in the database
     */
    public function run()
    {
        DB::table('news')->delete();

        News::create(['title'=>'Next On Agenda','text'=>'Investigating response file attachments and possible excel spreadsheet for standards. Compact standards list to expandable tabs.','user_id'=>1]);
        News::create(['title'=>'Revisions','text'=>'Added assessment section in responses. Changed smiller to sjmiller in the database. Changed purple to "sea". Removed grades 1 and 2.','user_id'=>1]);
    }
}