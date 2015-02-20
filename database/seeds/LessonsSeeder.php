<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Lesson;

class LessonsSeeder extends Seeder{
    public function run(){
        DB::table('lessons')->delete();
        $lessons = [
            [
                'In the Thick of Things',
                'How do the internal and external structures of a plant enable it to acquire, use and release energy? How does the release of plant energy affect people in their daily lives?',
                'In this lesson, students develop an understanding of how the internal and external structures of a plant are utilized to aid in all elements of the energy process - acquiring, using and releasing energy. Students will then investigate how plant and animal worlds collide as they begin to develop an appreciation for the interconnectedness of all organisms.',
                5,
                5
            ],
            [
                'eMOTIONal Eaters',
                'How do the internal and external structures of animals enable them to acquire, use and release energy? What structures and functions allow both cold and warm-blooded animals to be energy efficient?',
                'In this lesson, students develop an understanding of how the internal and external structures of an animal are utilized to aid in all elements of the energy process - acquiring, using and releasing energy. Students will continue their investigation of how plants and animals are interdependent on one another on the structural level for survival. In addition, students will dig deeper into the animal world, comparing and contrasting the structure and function of cold and warm-blooded animals as it relates to energy.',
                5,
                5
            ],
            [
                'Design Project: It\'s Not Easy Being Green',
                'How does the greenhouse illustrate the acquisition, utilization and release of energy? How can the variables in greenhouses be adjusted to produce the greatest energy? How can a greenhouse be designed to maximize production?',
                'In this lesson, students gain a new perspective of their recently acquired knowledge about energy in plants through observation of plant life in a student designed greenhouse. Through use of the scientific methodology, students will derive reasonable understandings and explanations about variables that can affect plants as they strive to flourish under controlled growing conditions. After intensive research and observations, students will utilize their knowledge to design and create the most beneficial and efficient model of a greenhouse.',
                5,
                5
            ],
        ];
        foreach($lessons as $lesson){
            Lesson::create(['title' => $lesson[0], 'summary' => $lesson[1], 'commentary' => $lesson[2],'grade_id' => $lesson[3], 'unit_id' => $lesson[4]]);
        }
    }
}