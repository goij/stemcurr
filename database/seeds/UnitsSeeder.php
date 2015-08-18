<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsSeeder extends Seeder
{
    /**
     * These are permanent fixtures in the database
     */
    public function run()
    {
        DB::table('units')->delete();
        
        $units = [
            ['', 'In this unit we focused on observations.  Students begin to look at the world around them and will learn what ecosystems and food chains are. Additionally, students will be introduced to the idea of populations and will see
            the benefits of living and working in groups rather than individually.  Students will explore how outside forces and imbalances can impact ecosystems and food chains, and they will learn that all energy pathways on the earth ultimately
            lead back to the sun. They will also learn about abiotic factors and how they can impact an ecosystem, and they will learn the basic skills necessary to measure abiotic factors.  As a culminating activity, students will be asked to create
            a nature observation backpack, selecting tools that will help them measure and record conditions in the world around them.  They will then test out the backpack with an outdoor observation and then make changes to the bag that they deem
            necessary once they have tested the pack out in the field.  This observation backpack will be utilized in the 4th grade units as they take a closer look at the relationships and conditions within ecosystems and expand their depth of knowledge of measurement principles.',
            'Will Zaininger', 'Will Zaininger, Susan Cunningham, Susan McDougall, Hannah Rennard, Bill Schubert, Donna Gatza, Sharon Miller', 'Morton Arboretum',
            'Waste Management and Caterpillar', '',1,1
            ],
            ['',
                'In this unit we focused on the harmony/transitions that are essential to the function of ecosystems.  To do this, our team collaborated with the Form and Functions team.  Students begin by investigating the harmonious interdependent
                relationships between animals and plants. These experiences lead the students to better understand the transitions that take place amongst plants and animals as they adapt to survive within their environment and how animals implement harmony within communication.
                The evidence that is left behind through fossils allows scientists and our students to make important observations and gather data about our environment.  Once students have a better understanding of the past and what has led to our current plants and animals, they
                can study food chains and what happens to these chains when there is an imbalance of organisms. The next step is to assess how we fit into this chain amongst plants and animals as well as how dependent we are on the other organisms within this chain.  To ensure that
                students can successfully complete the culminating activity of researching their surrounding environment/campus, students will learn how to properly quantify using the appropriate unit of measurement.  Students will apply what is obtained to explore camouflage and how it
                can be applied to physical spaces and possibly even their own surrounding environment.',
                'Will Zaininger','Will Zaininger, Susan Cunningham, Susan McDougall, Hannah Rennard, Bill Schubert, Donna Gatza, Sharon Miller', 'Morton Arboretum',
                'Waste Management and Caterpillar', '',1,2
            ],
            ['',
                'In this unit we decided to focus on webs and cycles that are integral to the function of ecosystems. Students begin by taking a look at the roles of producers, consumers, decomposers, herbivores, carnivores, omnivores, predators, and prey in ecosystems. After looking more
                closely at the roles of the organisms within an ecosystem, students will see how adaptations have helped maintain balance in ecosystems over time. Once all of the roles of organisms in an ecosystem are understood, students will begin to explore how members of an ecosystem
                utilize and contribute to the water, carbon, nitrogen, and energy cycles within the ecosystem. The next step is to view the interactions of humans on these food webs and matter and energy cycles, looking at how humans utilize, squander, and ultimately learn to conserve
                resources. Once students have a firm understanding of the resources and relationships in an ecosystem and how humans utilize and impact them, they will identify which factors are immediate threats to the health and sustainability of the Aurora ecosystem and will research
                and evaluate conservation programs that are in place help restore or maintain the necessary balance to avoid drastic changes in the ecosystem. ',
                'Will Zaininger','Will Zaininger, Susan Cunningham, Susan McDougall, Hannah Rennard, Bill Schubert, Donna Gatza, Sharon Miller', 'Morton Arboretum',
                'Waste Management and Caterpillar', '',1,3
            ],
            ['',
                'In this unit on ecosystems and adaptations we will focus on the interdependent relationships within communities.  Students will explore the similarities and differences between the human communities they are familiar with and those that exist in nature.  They will see how
                individual organisms contribute to and benefit from being part of a community. The concepts about matter and energy cycles that they explored in 5th grade will be broadened in this unit by applying those concepts to the idea of maintaining balance in a community. After
                examining human and animal communities, students will look back at the history of Aurora to see what types of communities (both animal and human) have called the Aurora area home in the past, studying the environmental, social, economic, and political factors that have brought
                about the changes to the communities over time. Finally, students will conclude the unit by learning about engineered communities such as aquariums, zoo habitats, space stations, and underwater habitats to see how balance is achieved in these artificial environments. This unit
                could easily expand into social sciences where students could learn about ancient civilizations and how they managed human and natural resources.  Language arts could also give students the chance to analyze dystopian communities and engineered ecological systems in novels such
                as The Giver and Hunger Games.',
                'Will Zaininger','Will Zaininger, Susan Cunningham, Susan McDougall, Hannah Rennard, Bill Schubert, Donna Gatza, Sharon Miller', 'Morton Arboretum',
                'Waste Management and Caterpillar', '',1,4
            ],
            ['',
                'In this unit students will use what they have learned about balance and relationships in ecosystems to begin to explore what happens when this balance is disrupted by outside forces.  Students will explore how organisms adapt over time in order to ensure the survival of the species.
                With their new-found appreciation of adaptive features, students will explore biomimicry to observe how engineers use models, systems, and elements of nature to solve complex human problems.  Students will also explore how management techniques can be utilized to protect animal habitats
                and to reduce the effects of human impact.  Students will explore the specific adaptations that have taken place in local flora and fauna and will investigate the impact of invasive species, such as the Emerald Ash Borer, and will learn how local municipalities are working to reduce
                the destruction that these invasive species have caused.  While looking at how climate change can impact the organisms in an ecosystem, students will calculate their carbon footprint and will research how families, companies, and communities can reduce their ecological impact.',
                'Will Zaininger','Will Zaininger, Susan Cunningham, Susan McDougall, Hannah Rennard, Bill Schubert, Donna Gatza, Sharon Miller', 'Morton Arboretum',
                'Waste Management and Caterpillar', 'Julie Adams',1,5
            ],
            ['',
                'In this unit students will continue to look deeper into the interdependent relationships, cycles of energy and matter, and changes that take place naturally in an ecosystem.  They will then apply that knowledge as they explore how humans are affected by and interact with these
                natural processes.  Students will learn how humans have used technology to circumvent the evolutionary process by allowing technology to solve problems rather than waiting multiple generations for genetic drift to become fixed in a population. They will also look at the impact that
                technological advances have had on health and the human gene pool. The next step will be to focus on Aurora’s ecosystem and the specific concerns that need to be addressed in order to create sustainable relationships between humans and nature.  The final step will be to look at the
                engineering side to see how we can learn from the structures that are inherent in nature and utilize those to lessen the damages of human impact and to create new organisms that are more resilient or that can help us meet modern needs in a more efficient way that is beneficial rather
                than harmful to the environment.',
                'Will Zaininger','Will Zaininger, Susan Cunningham, Susan McDougall, Hannah Rennard, Bill Schubert, Donna Gatza, Sharon Miller', 'Morton Arboretum',
                'Waste Management and Caterpillar', 'Julie Adams',1,6
            ],
            [
                '',
                '<p>Students will understand when a force acts on an object it will result in a change of speed and / or direction and that speed can vary. Students will know that varying the speed of a moving object will affect the time it takes for the object to travel a particular distance.
                Students know that the earth ‘pulls’ on all objects on or near the earth without touching those objects.</p>
                <p>With the cooperation of corporate and not-for-profit partners, students will have the opportunity to observe machines at work in different contexts. With that background set, students will be able to make connections between the concepts they learn about in the classroom and
                what they have seen in real world situations. They will also have the experience of investigating motion by using interactive models and displays.</p>
                <p>Students are learning basics, both in isolation and entry level integration, and gain experiences working with both simple and complex machines. At later levels, students develop a deeper understanding of how forces interact to produce motion, how the properties of different
                materials affect motion, and the relationship between robotics and orthotics and force and motion. They will also learn how technological advancements and/or enhancements have been made to improve the efficiency of machines and improve the quality of life.</p>',
                'Brian Skriba (D131)','Elizabeth Freed (D129), Subi Qitaku (D129), Brent Malmstrom (D308)', 'Meridith Bruozas (Argonne NL)',
                'Michael Oros (Scheck & Siress), Donna Gatza (CAT)', 'Dr. Sharon Miller (AU)',2,1
            ],
            [
                '',
                '<p>In this unit, students will grow a deeper understanding of the forces and motion present by magnets and electromagnets. The fourth grader will investigate where different kinds of magnets are found in everyday objects and will learn the basic principles of magnetism and how this
                force produces motion. During this unit of study, students will be able to identify negative effects and common misconceptions of magnets and electromagnets, as well as, justify why particular material as selected over others in the creation and manufacturing of such magnets.  Additionally,
                students will explore how magnets and electromagnets have been used historically to transfer information. Specifically, students will analyze a guitar pickup and then create their very own.</p>
                <p>With the cooperation of corporate and not-for-profit partners, students will have the opportunity to explore magnets and electromagnets and gain deeper understanding of this force and how it produces motion. For example, Waste Management will provide students an opportunity to learn about
                a real world problem involving the removal of ferrous material from waste material. They will also see how magnetic repulsion is used in the separation of aluminum materials from other waste. This will enable students to make connections between the concepts they learn about in the classroom
                and what they have seen in real world situations.</p>
                <p>In third grade, students were exploring tops and zoomers and gaining knowledge about energy transfer.  At later grades, students explore forces in isolation and gain experiences working with both simple and complex machines. Students will learn how technological advancements and/or enhancements
                have been made to improve the efficiency of machines and improve the quality of life. They will also develop a deeper understanding of how forces interact to produce motion, how the properties of different materials affect motion, and the relationship between robotics and orthotics and force and motion.</p>',
                'Brian Skriba (D131)','Elizabeth Freed (D129), Subi Qitaku (D129), Brent Malmstrom (D308)', 'Meridith Bruozas (Argonne NL)',
                'Michael Oros (Scheck & Siress), Donna Gatza (CAT)', 'Dr. Sharon Miller (AU)',2,2
            ],
            [
                '',
                '<p>Students will understand the relationship between force and motion including transportation systems, the concept of equilibrium through investigating balanced and unbalanced forces, Newton’s Laws of Motion, and simple and complex machines. The fifth grader will be able to identify, understand, and
                categorize simple machines, and construct complex machines using smaller parts.</p>
                <p>With the cooperation of corporate and not-for-profit partners, students will have the opportunity to observe machines at work in different contexts. With that background set, students will be able to make connections between the concepts they learn about in the classroom and what they have seen in
                real world situations. They will also have the experience of investigating motion by using interactive models and displays.</p>
                <p>Students are learning basics, both in isolation and entry level integration, and gain experiences working with both simple and complex machines. At later levels, students develop a deeper understanding of how forces interact to produce motion, how the properties of different materials affect motion,
                and the relationship between robotics and orthotics and force and motion. They will also learn how technological advancements and/or enhancements have been made to improve the efficiency of machines and improve the quality of life.</p>',
                'Brian Skriba (D131)','Elizabeth Freed (D129), Subi Qitaku (D129), Brent Malmstrom (D308)', 'Meridith Bruozas (Argonne NL)',
                'Michael Oros (Scheck & Siress), Donna Gatza (CAT)', 'Dr. Sharon Miller (AU)',2,3
            ],
            [
                '',
                '<p>In this unit, students will grow a deeper understanding of the forces and motion present by studying games.  The sixth grader will: explore the interacting forces behind making an object start, stop or change direction; use appropriate tools to collect data on motion; shed misconceptions on forces affecting
                motion; develop models to illustrate the interactions of forces on an object; research and apply data to develop a game designed to have unfavorable outcomes; compare/contrast material selection for games in order to make judgments about which materials are best suited for a particular purpose; and synthesize
                information to create an original Rube Goldberg machine.</p>
                <p>With the cooperation of corporate and not-for-profit partners, students will have the opportunity to explore how forces and motion are present in games. With that background set, students will be able to make connections between the concepts they learn about in the classroom and what they have seen in real
                world situations. They will also have the experience of investigating motion by using interactive models and displays.</p>
                <p>At earlier grade levels, students explore forces in isolation and gain experiences working with both simple and complex machines. At later levels, students will learn how technological advancements and/or enhancements have been made to improve the efficiency of machines and improve the quality of life. They
                will also develop a deeper understanding of how forces interact to produce motion, how the properties of different materials affect motion, and the relationship between robotics and orthotics and force and motion.</p>',
                'Brian Skriba (D131)','Elizabeth Freed (D129), Subi Qitaku (D129), Brent Malmstrom (D308)', 'Meridith Bruozas (Argonne NL)',
                'Michael Oros (Scheck & Siress), Donna Gatza (CAT)', 'Dr. Sharon Miller (AU)',2,4
            ],
            [
                '<br />How do forces and motion affect our everyday lives through the transportation process: Turning Journeys into STEMories?',
                '<p>Students will understand the relationship between force and motion including transportation systems, the concept of equilibrium through investigating balanced and unbalanced forces, Newton’s Laws of Motion, and simple and complex machines. The seventh grader will be able to calculate the net force in models
                or problems, represent motion graphically, and identify current technologies that influence technological advances.
                <p>With the cooperation of corporate and not-for-profit partners, students will have the opportunity to observe machines at work in different contexts. With that background set, students will be able to make connections between the concepts they learn about in the classroom and what they have seen in real world
                situations. They will also have the experience of investigating motion by using interactive models and displays.</p>
                <p>At earlier grade levels, students explore forces in isolation and gain experiences working with both simple and complex machines. At later levels, students develop a deeper understanding of how forces interact to produce motion, how the properties of different materials affect motion, and the relationship
                between robotics and orthotics and force and motion. They will also learn how technological advancements and/or enhancements have been made to improve the efficiency of machines and improve the quality of life. Seventh grade force and motion topics bridge the mechanics and biology of 6th grade to the robotics
                and chemistry of 8th grade.</p>',
                'Brian Skriba (D131)','Elizabeth Freed (D129), Subi Qitaku (D129), Brent Malmstrom (D308)', 'Meridith Bruozas (Argonne NL)',
                'Michael Oros (Scheck & Siress), Donna Gatza (CAT)', 'Dr. Sharon Miller (AU)',2,5
            ],
            [
                '<br />How do forces and motion affect our everyday lives? How do Forces and Motion Affect the Bio-mechanics of Life?',
                '<p>This unit will help students develop an understanding of the nature of forces and how they affect motion, learn how forces interact to produce motion, observe how the properties of different materials affect motion, and recognize how motion and forces are present in our daily lives.</p>
                <p>Eighth graders will revisit the question. “What is motion and where is it found?” in regards to the bio-mechanics of the human body.  Prior knowledge to this unit will include students being able to measure basic quantities connected to describing motion (distance, time, speed, etc.) and
                aware that there are rules (Newtonian mechanics) that help describe the macroscopic motion of an object.  Students will also be able to identify more than one force acting on an object, including friction, and will be challenged to build on their abilities to describe motion as multiple forces
                interact on or with an object.  Students will also connect their knowledge of the powers of ten and complex machines to the structure and function of the human body.</p>
                <p>With the cooperation of corporate and not-for-profit partners, students will have the opportunity to observe machines at work in different contexts. With that background set, students will be able to make connections between the concepts they learn about in the classroom and what they have
                seen in real world situations. They will also experience investigating motion by using interactive models and displays.</p>
                <p>At earlier grade levels, students explore forces in isolation and gain experiences working with both simple and complex machines. At later levels, students develop a deeper understanding of how forces interact to produce motion, and how the properties of different materials affect motion.
                They will also learn how technological advancements and/or enhancements have been made to improve the efficiency of machines and improve the quality of life.</p>',
                'Brian Skriba (D131)','Elizabeth Freed (D129), Subi Qitaku (D129), Brent Malmstrom (D308)', 'Meridith Bruozas (Argonne NL)',
                'Michael Oros (Scheck & Siress), Donna Gatza (CAT)', 'Dr. Sharon Miller (AU)',2,6
            ],
            [
                '<br />All About Earth\'s Natural Hazards and Introduction to the Solar System',
                '<p>Have you ever have the exhilarating experience of standing at the edge of a mountain and looking down into a valley far below?  Did you know that millions of years ago the mountains and valley probably
                looked quite different?  The land may have been completely flat, without as much as a hill.  Perhaps the area was beneath an ocean.  What caused the land to change?  How did the mountain and valley form?</p>
                <p>Throughout Earth’s long history, its surface has been lifted up, pushed down, bent, and broken by forces beneath the surface.  Although the resulting movements of the Earth’s surface are usually too small and too slow to
                be directly observed, they are constantly changing the appearance of the Earth.</p>
                <p>The Earth looks different today from the way it did millions of years ago.  For example, the east coast of South America matches up with the west coast of Africa.  Other portions of the continental landmasses also seem to fit
                together like a giant jigsaw puzzle.  Since the 1600’s people have wondered why the Earth’s landmasses look like they would fit together.  As new discoveries caused more questions about Earth to be they connected at one time?  If so,
                how were they moved apart?  Why do earthquakes and volcanoes occur in the same areas over and over again?</p>
                <p>Then in 1915, a German scientist published a radical a theory that provided a satisfactory explanation and a plausible answer to the questions being asked was soon developed.   In this study, you will find out more about this theory and
                be able to piece together the puzzle of the moving surface of our Earth.</p>
                <p>In addition to the movement of the continents, the weathering of rocks on Earth’s surface also changes its appearance.  The result is the formation of soil.  Soil is formed when rocks are continuously broken down by a natural process
                called weathering. These pieces of rock are eventually broken down into even smaller particles to form soil.  The composition of soil varies from place to place.</p>
                <p>The type of weathering also affects the composition of soil.  Mechanical weathering produces soil with a composition similar to the rock being weathered.  Chemical weathering produces soil with a composition different from that of the rock
                being weathered.  What are left behind are layers of soil, called a soil profile.  Yet the story does not stop here.  Climate and human activities also continue to reshape Earth’s surface.  As you dig deeper into this subject, you will
                learn more about the soil and the things that depend upon this resource.</p>
                <p>Finally, you will learn about Earth’s place in the solar system and about the relationship between the Earth and its moon.  Earth is the third planet from the sun, however, there is more to explore as we venture out into deep space…let’s
                board our spacecraft and go exploring this mysterious universe in which we live.</p>',
                'Lisa E. Pena','Teresa, Bauman, Gerry Mestek, Sara Thurman',
                'Du Page Children’s Museum: Chris Barry, Laura Decker, Kim Grdina, Margaret Hanley',
                'Nicor Gas: Angela Whitfield', 'Dr. Chetna Patel',3,1
            ],
            [
                '<br />The History of Planet Earth Through Earth\'s Processes and Discovering the Solar System',
                '<p>For thousands of years, the mysteries of the earth and space have caused fear, wonder, and curiosity in people.  Some ancient civilizations believed that the world was coming to an end when the sun slowly disappeared behind the moon.
                Today, scientists refer to this event as a solar eclipse.  We now know that a solar eclipse occurs when the moon is directly between the earth and the sun.  Some civilizations built temples to please angry gods they believed caused earthquakes,
                storms, and volcanic eruptions.</p>
                <p>Some ancient civilizations used their knowledge of space to help them.  Egyptians and Greek sailors, for example, used the position of the stars as a guide for navigating their ships.  Other civilizations built what appear to be places for
                observing and predicting changes in the skies.  The first well-known of these is Stonehenge in England. For what other reasons might Stonehenge have been built?</p>
                <p>Today, people have a better understanding of the earth and space Most people no longer use myths and legends to explain natural processes.  In this unit you will study what is known about the earth and space today.  You will learn about the
                age of the earth and space today.  You will learn about its place in the universe. You will also explore the makeup of the earth, its physical features and the changes it undergoes.</p>',
                'Lisa E. Pena','Teresa, Bauman, Gerry Mestek, Sara Thurman',
                'Du Page Children’s Museum: Chris Barry, Laura Decker, Kim Grdina, Margaret Hanley',
                'Nicor Gas: Angela Whitfield', 'Dr. Chetna Patel',3,2
            ]
        ];

        foreach($units as $unit){
            unit::create(['title' => $unit[0], 'overview' => $unit[1], 'team_leader' => $unit[2], 'team_members' => $unit[3], 'non_profit_partners' => $unit[4], 'corporate_partners' => $unit[5], 'au_faculty' => $unit[6], 'subject_id' => $unit[7], 'grade_id' => $unit[8]]);
        }


    }
}