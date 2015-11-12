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
    }
}