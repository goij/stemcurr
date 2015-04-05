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

        News::create(['title'=>'News 1','text'=>'News article 1 blah blah blah blah blahNews article 1 blah blah blah blah blahNews article 1 blah blah blah blah blahNews article 1 blah blah blah blah blah','user_id'=>1]);
        News::create(['title'=>'News 2','text'=>'News article 2 blah blah blah blah blahNews article 2 blah blah blah blah blahNews article 2 blah blah blah blah blahNews article 2 blah blah blah blah blah','user_id'=>1]);
        News::create(['title'=>'News 3','text'=>'News article 2 blah blah blah blah blahNews article 2blah blah blah blah blahNews article 2 blah blah blah blah blahNews article 2 blah blah blah blah blah','user_id'=>1]);

    }
}