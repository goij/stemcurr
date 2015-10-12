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
            ],
            [
                '<br />Earth\’s Place in the Universe; Its Materials, Systems, and Stars',
                '<p>The orbits of the Earth around the Sun and the Moon around the earth have created observable patterns that have been visible to man since the beginning of time.  While these patterns have gradually changed, man has depended upon these patterns to organize and plan daily life.</p>
                <p>Students in grade 5 are capable of observing patterns that they witness in the day and night sky and are able to describe them; however, they may need clarification as to why these patterns occur, when these patterns occurs and where observable
                patterns take place.  In addition, stars are visible objects in our night sky.  They exhibit a variety of colors which reflects temperature and vary in distance from the Earth.</p>
                <p>Earth is constantly changing.  The four major systems: atmosphere, hydrosphere, biosphere and geosphere have been studied over time to analyze the impact of how the spheres and systems interact.   By grade 5, students need to know how and why the
                earth is changing, identify and analyze rock layers, how land forms have developed because of these interactions and how these changes have impacted the features on earth over time.  Students at this grade level will be able to identify patterns not
                only in space, but also on planet Earth.  They are able to make investigations about how systems interact with the spheres in order to gather data to see these changes on our planet.</p>',
                'Lisa E. Pena','Teresa, Bauman, Gerry Mestek, Sara Thurman',
                'Du Page Children’s Museum: Chris Barry, Laura Decker, Kim Grdina, Margaret Hanley',
                'Nicor Gas: Angela Whitfield', 'Dr. Chetna Patel',3,3
            ],
            [
                '<br/>Our Aging Earth: Life Cycles, Spheres of Influence and Dating<br />Do You See What I See? - All Those Tiny Lights!',
                '<p>Evidence suggests that Earth formed approximately 4.6 billion years ago.  But how long is 4,600,000,000?  Fossil evidence indicates that there have been wide fluctuations in types and diversity of organisms that have lived on Earth over
                this geologic time.  The rocks and fossils provide evidence about Earth’s past.  The more recent the era the more evidence exists.  By the nineteenth century, scientists developed a clear picture of Earth’s pat as recorded by the fossils.  This
                picture showed great and varied changes as the continents had risen and mountains were worn away.  Life had begun in the sea and later moved to the land.  Living things evolved through many stages to the forms that exist today.  Climates around the
                world had also changed many times.  The discovery of radioactive elements in 1896 led to the development of an accurate method of determining the absolute age of rocks and fossils.  The breakdown of a radioactive element into a decay element occurs at a
                constant rate.  Some take only a few seconds whereas others take millions or billions of years to decay.  Scientists measure the decay rate of a radioactive element by a unit called half-life.</p>
                <p>Astronomers today know that Earth is part of a system of eight planets revolving around the Sun.  The Sun, in turn, is part of a larger system called the Milky Way galaxy that is one of billions of other galaxies in the universe.
                As small as Earth might be seen in the universe, it could be unique. When the Ancient astronomers looked up into the night sky, they observed billions of tiny specks of light. The ancient Greeks called the tiny lights in the night sky “wanderers”.
                Astronomers now know that the planets do not wander about the sky; the planets move around the Sun.  The Sun and the group of objects that move around it make up the solar system.  Almost all the other specks in the night sky are stars and gravity holds it all together.</p>',
                'Lisa E. Pena','Teresa, Bauman, Gerry Mestek, Sara Thurman',
                'Du Page Children’s Museum: Chris Barry, Laura Decker, Kim Grdina, Margaret Hanley',
                'Nicor Gas: Angela Whitfield', 'Dr. Chetna Patel',3,4
            ],
            [
                '<br />Forces That Reshape Earth’s Crust, Rocks and Minerals<br />Gravity and the Changing Faces of the Moon.',
                '<p>The Earth is shaped and reshaped by a variety of process over long periods of time that produce the range of landforms on the Earth’s surface.</p>
                <p>Students at this age level may have misconceptions that the world was always as it is now, or that any changes, if any, have occurred suddenly and comprehensively as a result of some cataclysmic event. Understanding how the Earth has changed over its history depends on looking at
                more than the process of weathering and sedimentation. In addition, the changes and process on the surface of the Earth presented in this unit support ideas about Earth’s original igneous rock beginnings and its hot interior. The fact that rock cycles through the Earth’s surface, changingits form and location, forming new rock material and minerals will be investigated by students as they dig into Earth’s composition thus providing for authentic learning of their physical world.</p>
                <p>As science continues to discover new observations and ideas about the universe it is important to provide foundational understandings which allows students to make coherent connections to the universe and then engage in further learning. Observations of the sky and explanations of principles forces of motion will provide an important perspective for understanding the important ideas that apply to the physical principles of our universes planets, and moons.</p><p>As students progress beyond this grade level they will gain a deeper appreciation of the important scientific notion that the same physical principles apply everywhere despite the diverse differences in scale from planets, stars and beyond.</p>',
                'Lisa E. Pena','Teresa, Bauman, Gerry Mestek, Sara Thurman',
                'Du Page Children’s Museum: Chris Barry, Laura Decker, Kim Grdina, Margaret Hanley',
                'Nicor Gas: Angela Whitfield', 'Dr. Chetna Patel',3,5
            ],
            [
                '<br />Evolving Earth and the Celestial Universe',
                '<p>The Theory of Plate Tectonics is a unifying concept of geology. The Earth’s interior; the phenomena of earthquakes and volcanoes provide evidence that earth’s interior is in a state of constant flux. As this understanding is developed students will be lead to recognize that the Earth’s crust is divided into many unique and distinct plates that float upon the molten mantel of Earth’s interior. As students progress to the middle school level the emphasis about plates and their movements should be developed only after ideas about Earth’s landforms and the changing topography is clearly understood in the elementary grades.</p>
                <p>A clear view of the universe is essential in making sense of the vast amount of knowledge collected regarding our cosmos. A cursory view of our universe is appropriate for students at the middle school level in order to gain an expanding level of literacy about the universe. Students will acquire deeper understandings of the composition and scale of galaxies and universes leading to explanations and theories about how they may have formed, i.e. Einstein’s Theory of Relativity. These ideas will be expanded as students identify the technologies scientist use to learn about the universe through observations of our sun, stars and sky.',
                'Lisa E. Pena','Teresa, Bauman, Gerry Mestek, Sara Thurman',
                'Du Page Children’s Museum: Chris Barry, Laura Decker, Kim Grdina, Margaret Hanley',
                'Nicor Gas: Angela Whitfield', 'Dr. Chetna Patel',3,6
            ],
            [
                '<br />The World is Made of Stuff',
                '<p>The unit on matter and energy will review concepts covered in second grade to make sure students have a strong understanding of the basic principles of matter and energy to ensure success in the later grades.  Since matter and energy does not fall under the specific NGSS concepts for grade 3, this lesson overview will provide examples of how to reinforce the concepts in other subject areas.  During these lessons, students observe, experiment, and analyze objects and phenomena in their daily lives. By incorporating common items into the activities, experiments, physical demonstrations, small constructions, and recipes, science learning becomes fun.</p>',
                'Amy Truemper',
                'Anne Pradzinski, Chuck Linneman',
                'Fermilab',
                'Exelon/Commonwealth Edison',
                'Dr. Gina Rahn',4,1
            ],
            [
                '<br />Charges and Waves',
                'In this unit students learn how matter and energy are connected. Learning about the charged particles in an atom provides a basis for understanding how electrical energy is formed.  They will be using this information from 4th grade all the way through 8th grade.  Students will reinforce 3rd grade concepts on how energy can be transferred. They will also apply knowledge of basic properties of matter (density, conductivity, etc.) in their quest to discover how matter travels through various media.  Students identify and compare how energy can be transferred through mechanical energy (friction and waves), or electrical energy (resistance in electrical devices). They build simple circuits to investigate the transfer of electrical energy through a wire and observe how it can be transformed into light, mechanical energy (buzzers, motors) or heat. Students design investigations, gather data, and use evidence to show how the properties of a material relate to how that material conducts energy.  They apply their knowledge of matter and energy by demonstrating these concepts through illustrations, models, and inquiry based lab work.',
                'Amy Truemper',
                'Anne Pradzinski, Chuck Linneman',
                'Fermilab',
                'Exelon/Commonwealth Edison',
                'Dr. Gina Rahn',4,2
            ],
            [
                '<br />Molecules in Motion - The Energy of Everyday Life',
                '<p>This unit will allow students to investigate how energy impacts matter in everyday life.  In this unit, students will review how thermal energy changes result in matter changing form physically, such as liquid changing to gas form, before investigating chemical changes in matter.  The focus for Grade 5 is to demonstrate how thermal energy changes can result in molecules rearranging or combining together to make new material.</p><p>An excellent resource for this unit is <b><u>Transformation of Matter</u></b> through <b>Sangari Active Science.</b> The teacher guide from this series provides everyday examples that can be studied so that students see the relevance to their daily lives and to the careers in manufacturing and design.  NSTA publications, <b><u>Everyday Mysteries in Science</u></b> and <b><u>Understanding Science,</u></b> provide inquiry probes which can be used to initiate a discussion or to student designed experiments.</p>',
                'Amy Truemper',
                'Anne Pradzinski, Chuck Linneman',
                'Fermilab',
                'Exelon/Commonwealth Edison',
                'Dr. Gina Rahn',4,3
            ],
            [
                '<br />Patterns on the Periodic Table- How to Use Element Properties in Industry',
                '<p>To identify the importance of elements and compounds in daily life and industry, it is necessary to understand what they are. Before starting this unit, students will already have a foundation of the basic particles that comprise matter.  They will know the atom is the basic unit used in chemistry.  They will know the element is a substance that is composed of a single, specific type of atom. Each element is characterized by the number of protons within the nucleus of each of its atoms, known as the atomic number. An atom with six protons in its nucleus, for instance, is an atom of the element carbon. An atom with 26 protons would belong to the element iron. While each and every atom of a specific element will have the same number of protons, its number of neutrons may vary.</p><p>They will have learned that atoms or elements combine to make molecules and compounds.</p><p>A wide variety of elements and compounds are important in industry. One important element is iron, as it is oxidized to make steel, which is regularly used to build various structures. It is important one understand the properties of iron to avoid potential manufacturing problems such as rust.  Students will gain a better understanding of the properties of matter by learning how this properties can be used and by understanding how different elements combine.  Chemicals are widely utilized in the production industry.  Chemical engineering is concerned with the design, construction, and operation of machines and plants that perform chemical reactions to solve practical problems or make useful products.</p><p></p>Elements, compounds, and the chemical reactions between them are the basic building blocks of everything. The importance of elements and compounds is such that nothing would exist or function without them. Students will learn the patterns of the periodic as they study the properties of elements.  These patterns will be the building block for the 7th grade unit which covers how atoms combine together to make compounds.</p>',
                'Amy Truemper',
                'Anne Pradzinski, Chuck Linneman',
                'Fermilab',
                'Exelon/Commonwealth Edison',
                'Dr. Gina Rahn',4,4
            ],
            [
                '<br />How Changes in Matter Improve Our Lives',
                '<p>Developing an understanding that chemical bonding occurs around us and in us leads to knowledge of the processes necessary for our survival.  If we’re able to understand the bonds that result from electrons then we can understand the chemical reactions that sustain us and make our world a better place to live.  For example, learning about water’s unique properties as a result of its bonding creates appreciation for how we don’t boil or freeze even though the temperature outside changes quite a bit.  Chemical bonding naturally includes concepts of potential and kinetic energy, so it is necessary to explain energy as well as the flow of energy.</p><p>Possible extension:  Students will be challenged to think about the chemical bonds that are essential to the functioning of the body.  What bonds exist among atoms within our bodies that are sustaining us?  In order to answer this question, students need to understand not only what bonds are, but also the results of these bonds.</p>',
                'Amy Truemper',
                'Anne Pradzinski, Chuck Linneman',
                'Fermilab',
                'Exelon/Commonwealth Edison',
                'Dr. Gina Rahn',4,5
            ],
            [
                '<br />What role does energy from the nucleus have in our lives?',
                'Throughout this unit students will develop an understanding of how energy causes changes at the molecular and atomic level. Students will start the unit with previous knowledge of atomic structure, energy transformations and the effect of forces on the motion of an object (including electricity).  Students will be able to link observable and measurable properties, existence in different states, and tangible material or particles to an explanation of whether something is considered to be matter. Students will discover how extreme changes in energy can result in extreme changes in matter.  They will learn how scientists are using this information to develop new technologies, improve our society and develop a deeper understanding of the universe.',
                'Amy Truemper',
                'Anne Pradzinski, Chuck Linneman',
                'Fermilab',
                'Exelon/Commonwealth Edison',
                'Dr. Gina Rahn',4,6
            ],
            [
                '<br />LIFE & DESIGN CYCLES',
                'While this unit to life science does offer a content building knowledge for students, it is indeed much more than that! It is suggested that this unit be taught first in the fall of third grade, because of the practical alignment of the content introducing the parallel development of the life cycles of plants and animals and the design cycles of products. Students will be given multiple opportunities throughout the unit to compare and contrast the birth, life, and death of familiar living things with the creation, development, improvement, and ultimate discontinuation of popular products on the market.',
                'Sandy Quintanilla(SD129)',
                'Leigh Apple(SD308), Allison Landstrom(SD204)',
                'Hannah Rennard (Morton Arboretum), Margo Schmitt (Robert Crown Centers)',
                'William Spitzig & Tamara Vincer (Cabot Micro Electronics), Andrew G. Jirovec (Caterpillar Inc.)',
                'Dr. Chetna Patel',5,1
            ],
            [
                '<br />FEATURES & FUNCTIONS',
                'Students will utilize a variety of performance task gaining content knowledge about the life science basics of macrobiological forms and functions. Through a series of investigations, students will explore the internal and external structures of animals and plants that contribute to their growth, reproduction, and survival. In addition, to the study of structures of the life forms themselves, ecosystems and adaptations will contribute supplemental content to assist with some standards alignment and student knowledge development of the basics in life science.',
                'Sandy Quintanilla(SD129)',
                'Leigh Apple(SD308), Allison Landstrom(SD204)',
                'Hannah Rennard (Morton Arboretum), Margo Schmitt (Robert Crown Centers)',
                'William Spitzig & Tamara Vincer (Cabot Micro Electronics), Andrew G. Jirovec (Caterpillar Inc.)',
                'Dr. Chetna Patel',5,2
            ],
            [
                '<br />ORGANISMS & ENERGY',
                'Students have the opportunity to engage in an energy filled unit of study as they examine how plants and animals acquire, use and release energy. Through a series of research and investigations, students will become illuminated about energy productions in organisms of all kinds. The unit will also allow the opportunity for students to apply their light-bulb moments to the design and creation of a highly efficient greenhouse model where they can observe the best technology and research about plant energy at work.',
                'Sandy Quintanilla(SD129)',
                'Leigh Apple(SD308), Allison Landstrom(SD204)',
                'Hannah Rennard (Morton Arboretum), Margo Schmitt (Robert Crown Centers)',
                'William Spitzig & Tamara Vincer (Cabot Micro Electronics), Andrew G. Jirovec (Caterpillar Inc.)',
                'Dr. Chetna Patel',5,3
            ],
            [
                '<br />GROWTH & DEVELOPMENT',
                'Through a variety of analogies and performance task, students will develop an understanding of the most fundamental of life’s building blocks, the cell. After acquiring necessary background of cells and cell theory, students will then begin to examine the interconnectedness of cells and the subsystems and systems that are created through cells which allow for all functions of living things, both plants and animals. The contributions of multiple systems within many organisms will be synthesized by students who will create an initial understanding of many concepts of microbiology. This newly acquired knowledge will allow them further, more intricate learning in subsequent studies throughout secondary and post-secondary educational experiences in the life sciences.',
                'Sandy Quintanilla(SD129)',
                'Leigh Apple(SD308), Allison Landstrom(SD204)',
                'Hannah Rennard (Morton Arboretum), Margo Schmitt (Robert Crown Centers)',
                'William Spitzig & Tamara Vincer (Cabot Micro Electronics), Andrew G. Jirovec (Caterpillar Inc.)',
                'Dr. Chetna Patel',5,4
            ],
            [
                '<br />FORM & FUNCTION',
                'Through a series of active investigations, students will increase knowledge and understanding about the complexity and interconnectedness of form and function in a variety of organisms.  Beginning with a reverse engineering project, students examine the inner workings of a prosthetic limb and use these discoveries to better understand the form and function of the human body. Additionally, students will gain real world knowledge of human growth and development utilizing pediatric growth milestones and Individual Education Plans as a catalyst for enlightenment into potential problems when either form or function or some combination of the two is operating incorrectly.  Students will then have the opportunity to compare and contrast branching systems of plants, animals, and humans increasing knowledge of the form and functions of multiple organisms.  Finally, students will study sensory organs and processes for understanding information input and output while increasing their awareness of technologies available to assist organisms when either the form or function of these sensory organs is ineffective.',
                'Sandy Quintanilla(SD129)',
                'Leigh Apple(SD308), Allison Landstrom(SD204)',
                'Hannah Rennard (Morton Arboretum), Margo Schmitt (Robert Crown Centers)',
                'Michael Oros (Scheck and Siress) William Spitzig & Tamara Vincer (Cabot Micro Electronics)',
                'Dr. Chetna Patel',5,5
            ],
            [
                '<br />HEREDITY',
                '<p>Heredity and genetics are fascinating studies for eighth grade students, as they discover not only the natural processes of adaptation and change in organisms through time, but also the limitless alterations man can make to organisms through technological means.  Students will begin to understand that reproduction allows an organism to transfer genetic information to its offspring; in addition, students will examine the adaptations of organisms made through the process of natural selection and these observations are solidified through the study of fossil records.</p><p>In the early grades, students observe that young animals look similar to their parents and that related organisms can have a similar appearance.  As they progress, students start to understand that different organisms produce different characteristics.  In addition, students learn some organisms resemble those of long ago while others have evolved over time and these differences in an organism can result in an advantage in survival.</p>',
                'Sandy Quintanilla(SD129)',
                'Leigh Apple(SD308), Allison Landstrom(SD204)',
                'Hannah Rennard (Morton Arboretum), Margo Schmitt (Robert Crown Centers)',
                'William Spitzig & Tamara Vincer (Cabot Micro Electronics)',
                'Dr. Chetna Patel',5,6
            ],
            [
                '<br />Understanding Seasons, Expected Weather Patterns, Climate Change, Food Chains & Habitats and Engineering Design Solutions Based on Our Understanding of These Conditions',
                '',
                'Anthony Holub (SD308)',
                'Weston Brzykcy (SD204), Josie Curtis (SD129), Margaret Stokes (SD204)',
                'Don Dosch (IMSA)',
                'Roger Shuma (Tellabs)',
                'Ray Dagenais, Dr. Gina Rahn',6,1
            ],
            [
                '<br />Preventing pollution, preparing communities, and positing on climate change',
                '',
                'Anthony Holub (SD308)',
                'Weston Brzykcy (SD204), Josie Curtis (SD129), Margaret Stokes (SD204)',
                'Don Dosch (IMSA)',
                'Roger Shuma (Tellabs)',
                'Ray Dagenais, Dr. Gina Rahn',6,2
            ],
            [
                '<br />The probability is high that aquifers, catastrophic events, and weather predictions will be discussed throughout this unit of study…',
                '',
                'Anthony Holub (SD308)',
                'Weston Brzykcy (SD204), Josie Curtis (SD129), Margaret Stokes (SD204)',
                'Don Dosch (IMSA)',
                'Roger Shuma (Tellabs)',
                'Ray Dagenais, Dr. Gina Rahn',6,3
            ],
            [
                '<br />How I learned to stop worrying about resource allocation, climate creation and alteration, and greenhouse gases and love STEM opportunities!',
                '',
                'Anthony Holub (SD308)',
                'Weston Brzykcy (SD204), Josie Curtis (SD129), Margaret Stokes (SD204)',
                'Don Dosch (IMSA)',
                'Roger Shuma (Tellabs)',
                'Ray Dagenais, Dr. Gina Rahn',6,4
            ],
            [
                '<br />Understanding weather, climate, and human impact locally, nationally, globally.',
                '<p>Weather, Climate, & Human Impact is a theme that has added significance given recent times.  Considerable debate exists over the extent to which humans have impacted the weather and climate, and further, how weather and climate and the resultant changes are impacting humans both short and long term.  This unit of study is focused on developing a deep understanding of the interplay between all three core components (weather, climate, & human impact) both qualitatively and quantitatively.</p>
                <p>From the onset of a child’s education, students show significant interest in different weather phenomenon and marvel at the dynamic nature of our climate.  Further, they seek to understand their role in ensuring humans can live in a society that can accurately and effectively predict weather and climate pattern changes in addition to minimizing human impact on both.</p>
                <p>The goal of this unit from 3rd to 8th grade is to introduce and engage students in weather patterns, climate change, and the cyclical process by which humans impact weather and climate and in return how the dynamic nature of weather and climate impact humans.  As there level of understanding grows they will develop a deeper understanding of the interconnectedness between all three core areas of this unit.  The unit culminates with an advanced level of data analysis and technological application to accurately forecast weather events, climate change, and how to best implement changes that minimize how humans are impacted and how humans can minimize their impact on weather and climate.</p>',
                'Anthony Holub (SD308)',
                'Weston Brzykcy (SD204), Josie Curtis (SD129), Margaret Stokes (SD204)',
                'Don Dosch (IMSA)',
                'Roger Shuma (Tellabs)',
                'Ray Dagenais, Dr. Gina Rahn',6,5
            ],
            [
                '<br />The final frontier:  What are the benefits and consequences of understanding weather, climate, human impact and how they each directly and indirectly alter one another?',
                '<p>Weather, Climate, & Human Impact is a theme that has added significance given recent times.  Considerable debate exists over the extent to which humans have impacted the weather and climate, and further, how weather and climate and the resultant changes are impacting humans both short and long term.  This unit of study is focused on developing a deep understanding of the interplay between all three core components (weather, climate, & human impact) both qualitatively and quantitatively.</p>
                <p>From the onset of a child’s education, students show significant interest in different weather phenomenon and marvel at the dynamic nature of our climate.  Further, they seek to understand their role in ensuring humans can live in a society that can accurately and effectively predict weather and climate pattern changes in addition to minimizing human impact on both.</p>
                <p>The goal of this unit from 3rd to 8th grade is to introduce and engage students in weather patterns, climate change, and the cyclical process by which humans impact weather and climate and in return how the dynamic nature of weather and climate impact humans.  As there level of understanding grows they will develop a deeper understanding of the interconnectedness between all three core areas of this unit.  The unit culminates with an advanced level of data analysis and technological application to accurately forecast weather events, climate change, and how to best implement changes that minimize how humans are impacted and how humans can minimize their impact on weather and climate.</p>',
                'Anthony Holub (SD308)',
                'Weston Brzykcy (SD204), Josie Curtis (SD129), Margaret Stokes (SD204)',
                'Don Dosch (IMSA)',
                'Roger Shuma (Tellabs)',
                'Ray Dagenais, Dr. Gina Rahn',6,6
            ]

        ];

        foreach($units as $unit){
            unit::create(['title' => $unit[0], 'overview' => $unit[1], 'team_leader' => $unit[2], 'team_members' => $unit[3], 'non_profit_partners' => $unit[4], 'corporate_partners' => $unit[5], 'au_faculty' => $unit[6], 'subject_id' => $unit[7], 'grade_id' => $unit[8]]);
        }


    }
}