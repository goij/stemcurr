<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        $this->call('GradesSeeder');
        $this->command->info('Seeded grades table');
        $this->call('SubjectsSeeder');
        $this->command->info('Seeded subjects table');
        $this->call('TopicsSeeder');
        $this->command->info('Seed topics table');
        $this->call('QuestionsSeeder');
        $this->command->info('Seed questions table');
	}

}
