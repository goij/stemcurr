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

        $this->call('UsersSeeder');
        $this->command->info('Seeded default users');
        $this->call('UserAllianceSeeder');
        $this->command->info('Seeded user alliance table');
        $this->call('GradesSeeder');
        $this->command->info('Seeded grades table');
        $this->call('SubjectsSeeder');
        $this->command->info('Seeded subjects table');
        $this->call('TopicsSeeder');
        $this->command->info('Seeded topics table');
        $this->call('QuestionsSeeder');
        $this->command->info('Seeded questions table');
        $this->call('CategorySeeder');
        $this->command->info('Seeded category table');
        $this->call('StandardsSeeder');
        $this->command->info('Seeded standards table');
        $this->call('UnitsSeeder');
        $this->command->info('Seeded units table');
        $this->call('NewsSeeder');
        $this->command->info('Seeded news table');
        $this->call('QuestionStandardSeeder');
        $this->command->info('Seeded question_standard pivot table');

	}

}
