<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Question;

class QuestionsSeeder extends Seeder{
    public function run(){
        DB::table('questions')->delete();

        $questions = [
            [
                1,
                'How do the internal and external structures of a plant enable it to acquire, use and release energy? ',
                'Students will: 1) Identify internal and external structures in plants which are utilized to acquire energy 2) Identify internal and external structures which are utilized in plants to use energy 3) Identify internal and external structures in plants which are utilized to release energy 4) Describe the process of energy use in plants',
            ],
            [
                1,
                'How does the release of plant energy affect people in their daily lives?',
                'Students will: 1) Explain how humans utilize the products released by plants 2) Explain the relationship between plants and humans'
            ],
            [
                2,
                'How do the internal and external structures of animals enable them to acquire, use and release energy?',
                'Students will: 1) Identify internal and external structures in animals which are utilized to acquire energy 2) Identify internal and external structures which are utilized in animals to use energy 3) Identify internal and external structures in animals which are utilized to release energy 4) Describe the process of energy use in animals',
            ],
            [
                2,
                'What structures and functions allow both cold and warm-blooded animals to be energy efficient?',
                'Students will: 1) Analyze the differences between cold-blooded and warm-blooded animals 2) Compare and contrast the structure and function of the digestive systems of cold and warm-blooded animals 3) Qualify and quantify energy efficiency in animals, both cold and warm-blooded 4) Utilize the information acquired to draw conclusions about the efficiency of energy use in cold and warm-blooded animals'
            ],
            [
                3,
                'How does the greenhouse illustrate the acquisition, utilization and release of energy?',
                'Students will: 1) Research how scientists utilize technology to measure energy in plants 2) Create a diagram exhibiting the acquisition, utilization and release of energy in a greenhouse 3) Utilize a model of a greenhouse to demonstrate that plants acquire the materials for growth primarily from air and water'
            ],
            [
                3,
                'How can the variables in greenhouses be adjusted to produce the greatest energy?',
                'Students will: 1) Determine potential variables present in a greenhouse 2) Categorize variables by energy efficiency'
            ],
            [
                3,
                'How can a greenhouse be designed to maximize production?',
                'Students will: 1) research popular greenhouse designs 2) Analyze effective greenhouse design 3) Propose a prototype for the most energy efficient design 4) Establish the most efficient design and create a model for a greenhouse'
            ]
        ];

        foreach($questions as $question){
            Question::create(['lesson_id' => $question[0],'title' => $question[1], 'evidence' => $question[2]]);
        }
    }
}