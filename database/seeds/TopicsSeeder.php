<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/19/2015
 * Time: 8:01 PM
 */

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsSeeder extends Seeder{
    public function run(){
        DB::table('topics')->delete();
        $topics = [
            [
                'Interdependent Relationships in Ecosystems',
                'What are the parts that make up an ecosystem (organism, population, community, ecosystem, biome)?
                What is an ecosystem?
                What is a food chain?
                How do changes in an environment affect living things/ecosystems/food chains?
                How can an ecosystem’s physical characteristics, temperature, or availability of resources impact an organism (What are the ways that biotic factors are impacted by abiotic factors)?
                What are the benefits of an animal living in a group?',
                '',
                1,
                1
            ],
            [
                'Natural Selection and Adaptations',
                'Where did fossils come from? In what ways are dinosaurs like birds? In what ways are they different?',
                '',
                1,
                1
            ],
            [
                'Cycle of Matter and Energy Transfer in Ecosystems',
                'Where do plants get energy? Where do animals get energy?',
                '',
                1,
                1
            ],
            [
                'Human Interactions with Nature',
                'How do people affect environments?',
                '',
                1,
                1
            ],
            [
                'Measurement and Data',
                'What tools are used to measure and estimate length, volume, mass, and temperature?',
                '',
                1,
                1
            ],
            [
                'Nature Inspired Design',
                'What kinds of materials would you need to explore an ecosystem?',
                '',
                1,
                1
            ],
            [
                'Interdependent Relationships in Ecosystems',
                'In what ways do plants depend on animals for survival?In what ways do animals depend on plants for survival?',
                '',
                2,
                1
            ],
            [
                'Natural Selection and Adaptations',
                'How do animals and insects communicate?
                What structures have animals developed to increase their chances of survival?
                What structures have plants developed to increase their chances of reproduction?
                What do fossils tell us about our environment?',
                '',
                2,
                1
            ],
            [
                'Cycle of Matter and Energy Transfer in Ecosystems',
                'How does energy transfer from one organism to the next in a food chain?
                What are the roles of producer, consumer, and decomposer in a food chain?
                What happens to a food chain if there is an imbalance of organisms?',
                '',
                2,
                1
            ],
            [
                'Human Interactions with Nature',
                'In what ways are humans dependant on plants? In what ways are humans dependant on animals? Are animals dependant on humans?',
                '',
                2,
                1
            ],
            [
                'Measurement and Data',
                'What is the appropriate metric unit used to measure objects of various sizes?',
                '',
                2,
                1
            ],
            [
                'Nature Inspired Design',
                'Where can interdependent relationships and adaptations be observed on the John C. Dunham STEM Partnership School and Aurora University campus? How can cryptic coloration (camouflage) be utilized to improve the appearance of physical spaces?',
                '',
                2,
                1
            ],
            [
                'Interdependent Relationships in Ecosystems',
                'What roles do producers, consumers, and decomposers fill in an ecosystem?
                How roles do herbivore, carnivore, and omnivore play in an ecosystem?
                How does the predator-prey relationship impact an ecosystem?',
                '',
                3,
                1
            ],
            [
                'Natural Selection and Adaptations',
                'How have animals adapted to be more efficient predators?
                How have animals adapted to become less vulnerable as prey?',
                '',
                3,
                1
            ],
            [
                'Cycle of Matter and Energy Transfer in Ecosystems',
                'How do populations in an ecosystem both utilize and contribute to the nitrogen, carbon, and water cycles? How can nutrient flow disrupt an ecosystem?',
                '',
                3,
                1
            ],
            [
                'Human Interactions with Nature',
                'How do people use resources? What are fossil fuels used for? How do people conserve resources?',
                '',
                3,
                1
            ],
            [
                'Our Ecosystem: Aurora',
                'What factors threaten to cause an imbalance in the Aurora ecosystem? How are these factors controlled or balanced?',
                '',
                3,
                1
            ],
            [
                'Nature Inspired Design',
                'How does biomimicry impact design?',
                '',
                3,
                1
            ],
            [
                'Interdependent Relationships in Ecosystems',
                'How are members of a community dependant on each other, other organisms, and ecosystems? How are individuals and ecosystems dependant on communities?',
                '',
                4,
                1
            ],
            [
                'Natural Selection and Adaptations',
                'How can a change in energy sourcing impact a local ecosystem?',
                '',
                4,
                1
            ],
            [
                'Cycle of Matter and Energy Transfer in Ecosystems',
                'How does a food web demonstrate the cycle of matter within both biotic and abiotic factors? How does an organism contribute to the cycle of matter within an ecosystem? Why is balance important in an ecosystem?',
                '',
                4,
                1
            ],
            [
                'Human Interactions with Nature',
                'How do human interactions with nature affect food webs? How do human interactions affect the cycles of energy and matter within an ecosystem?',
                '',
                4,
                1
            ],
            [
                'Our Ecosystem: Aurora',
                'How has the Aurora ecosystem changed over the years? ',
                '',
                4,
                1
            ],
            [
                'Nature Inspired Design',
                'How are aquarium, terrarium, and International Space Station the same?',
                '',
                4,
                1
            ],
            [
                'Interdependent Relationships in Ecosystems',
                'What are the ecological and economic problems associated with invasive species?
                How can patterns of interactions be predicted across multiple ecosystems?',
                '',
                5,
                1
            ],
            [
                'Natural Selection and Adaptations',
                'What does an organism need to adapt in an ecosystem?
                How do adaptations contribute to the survival of a species?',
                '',
                5,
                1
            ],
            [
                'Cycle of Matter and Energy Transfer in Ecosystems',
                'How can nutrients be managed to better sustain an ecosystem?
                How does carbon availability relate to energy flow in an ecosystem?
                How can carbon concentrations be managed in the atmosphere?',
                '',
                5,
                1
            ],
            [
                'Human Interactions with Nature',
                'How can communities help off-set carbon emissions?
                What are the issues and conflicts surrounding the management of protected areas and populations?',
                '',
                5,
                1
            ],
            [
                'Our Ecosystem: Aurora',
                'How have invasive species affected the Aurora ecosystem?
                What can be done locally to prevent the spread of and reduce damage from invasive species?
                Which plants are best suited for planting in the Aurora area?
                Are the planting practices of a local prairie effective in improving the restoration process?',
                '',
                5,
                1
            ],
            [
                'Nature Inspired Design',
                'What are the benefits of rooftop gardens?',
                '',
                5,
                1
            ],
            [
                'Interdependent Relationships in Ecosystems',
                'How is diversity beneficial? (How does biological diversity help an ecosystem? How does talent diversity help a sports team? How does cultural diversity help a community? How does modularity help design? How does nutritional diversity improve health?)
                How do we evaluate the health of a complex ecosystem?',
                '',
                6,
                1
            ],
            [
                'Natural Selection and Adaptations',
                'How does technology help and hinder human adaptation?
                How can an ecological barrier lead to adaptations/speciation?',
                '',
                6,
                1
            ],
            [
                'Cycle of Matter and Energy Transfer in Ecosystems',
                'What costs are related to carbon management strategies?
                What is balance important in an ecosystem? (carbon, nutrient)',
                '',
                6,
                1
            ],
            [
                'Human Interactions with Nature',
                'How can we maintain the health of a complex ecosystem?
                How do humans impact the carbon cycle?
                ',
                '',
                6,
                1
            ],
            [
                'Our Ecosystem: Aurora',
                'How have local businesses, organizations, and individuals contributed to the preservation and sustainability of the Aurora area ecosystem?
                How are symbiotic relationships utilized in Aurora’s ecosystem?',
                '',
                6,
                1
            ],
            [
                'Nature Inspired Design',
                'What are the risks and benefits of bioremediation?
                What are the risks and benefits of genetic engineering?',
                '',
                6,
                1
            ],
            [
                'The How and What of Motion: Let’s Go for a Spin!',
                'What is motion and where is it found?
                What causes rotation?
                How can we describe and measure motion?',
                'Our overarching theme for lesson 1 is to introduce the concept of force and motion beginning with description and measurement and identifying examples:
                tops, zoomers, etc…  Students will acquire basic vocabulary that relates to the motion of tops and the forces that cause the motion. They will also gain
                experience measuring with units of time, length, and mass. This will prepare them for when they will be testing different materials for building tops.',
                1,
                2
            ],
            [
                'Interacting Forces in Motion: Spinning ‘Round n ’Round',
                'How do balanced and unbalanced forces affect the motion of a top/zoomer/spinner?
                How and why does the top/zoomer/spinner stop moving?
                How can we predict changes in the top/zoomer/spinner?',
                'Our overarching theme for lesson 2 is understanding how balanced and unbalanced forces affect the motion of various tops/zoomers/spinners. Students will
                experiment with different tops and different surfaces in order to determine what slows or stops motion.  They will also predict changes in motion and outcomes
                based on their observations and experiences.',
                1,
                2
            ],
            [
                'Material Properties and Design Considerations that Affect Motion: From Top to Bottom',
                'What material properties and physical shape affect motion?
                Why are certain materials selected over other materials in manufacturing?
                What’s the design criterion?',
                'Our overarching theme for lesson 3 is what types of materials should be used for various purposes considering the product use in mind. Students will be able to start
                realizing that selections in physical shape and design have a direct impact on the functionality and efficiency of that product.  Students will have an opportunity to experiment with different product materials and surfaces to build their own tops and predict outcomes.',
                1,
                2
            ],
            [
                'Motion in Real Life: Top Notch',
                'How has our understanding of motion led us to technological advancements?
                What makes some toys work better than others?
                What other forces can cause objects to move?  Magnetic levitation:  magnet powered spinning top.  (Exploration of magnetism)',
                'Our overarching theme for lesson 4 is the importance of design and its impact on performance.  Students will experiment with store bought tops/toys such as beyblades and beywheelz in order to discuss why they were designed and manufactured the way they are.  Students will also learn how magnets work in toys, and we will relate this concept to the real world.',
                1,
                2
            ],
            [
                'The How and What of Motion: Opposites Attract',
                'What is magnetism and how does it cause things to move?  Where can we find magnets, electromagnets, and ferromagnetic materials in everyday objects?',
                '<p>In lesson 1, students will have an opportunity to observe how magnets work and learn fundamental vocabulary. They will also discover many examples of magnets used in everyday
                devices and in living things. Students will have the opportunity to consider a real world problem at Waste Management. Specifically, the use of magnets to remove ferrous material
                in waste (attraction) and to separate objects made of aluminum from other materials (repulsion).</p>
                <p>After having exposure to real world applications of magnetism, they will construct an electromagnet and use it as part of a “crane” that will pick up paper clips. Students will
                cooperate in groups to explore variations on the design of the crane and see how it affects the output, or number of paper clips it can pick up. Students will also have the opportunity
                to see firsthand a working crane in the field (Waste Management).</p>',
                2,
                2
            ],
            [
                'Interacting Forces in Motion: Magnetic Personalities!',
                'How do magnets and electromagnets cause objects to start and stop moving?
                What are the misconceptions and negative effects of magnets and electromagnets?',
                'In Lesson 2 students will understand how magnets affect sound waves through the transfer of energy. This will be done through a reverse engineering project, whereby students will take
                apart old headphones, speakers, and ear buds to identify the components. Students will also explore the negative affects magnets have on electronic devices such as computers, monitors,
                televisions, etc. They will also shed any misconceptions they have in regards to what affects the strength of a magnet (i.e. size, shape).',
                2,
                2
            ],
            [
              'Material properties and Design Considerations that Affect Motion: I’m stuck on you.',
              'What material properties affect magnetic force and why are certain materials selected over other materials in manufacturing products that use magnets and electromagnets?',
              'In lesson 3 students will choose among different types of wires (gages, metal types), ferromagnetic cores, battery strengths, and number of coils to optimize a design for an electromagnet.
              Students will judge the strength of their magnet by the number of objects it can pick up. They will also reflect upon their experiences working as a team to construct their final electromagnet.',
                2,
                2
            ],
            [
              'Motion in Real Life: Sounds Attractive',
              'How have magnets and electromagnets historically been used to transfer information?
               How has our understanding of motion led us to technological advancements?',
              'Students will study historical devices that utilize magnets to transmit messages, and also learn about current applications used to transmit information. Students will have opportunities to visit
              partners that use magnets for similar purposes. Afterwards, they will explore the history of the electric guitar, and in specific, the guitar pickup. Students will understand the role of magnets in
              capturing sound waves from a vibrating string, and transmitting them to amplified sound.  To conclude, students will apply their understanding to create a prototype electronic pickup.',
                2,
                2
            ],
            [
              'The How and What of Motion: Simple is as Simple Does',
              'Where are simple machines found and how do we describe the force and motion behind them?',
              'Our overarching theme for lesson 1 is looking at the concept of simple machines including levers, pulleys, wheel and axle, wedge, incline plane, and screw. This lesson will help students practice
              force input and force output, classifications, and how simple machines help make work easier.  Students will be expected to analyze and communicate their data both informally and formally. These initial discoveries will allow students to connect force with motion in Lesson 2.',
                3,
                2
            ],
            [
              'Interacting Forces in Motion: May the Force be with You!',
              'How do forces influence motion?
                How do things stop moving? (acceleration, deceleration, anti-gravity, friction, and inertia)
                What are the misconceptions of forces and motion within simple and complex machines? (mechanical vs. directional advantages, classes of levers-fulcrum/load, force needed vs. distance needed?)',
              'Our overarching theme for lesson 2 is understanding how forces influence motion in the context of acceleration, friction, and inertia Students will first start by exploring how simple and complex machines actually work.  They will be able to identify frame of reference, graph horizontal and vertical motion, and explain relationships among force, mass, and the interaction of forces.',
                3,
                2
            ],
            [
              'Properties of Materials that Affect Motion: How High Can You Go?',
              'What design considerations (historically) affect motion in complex machines? (shape, thickness, tire design, bikes, cars, motors, electromagnets, lubricants, temperature, angles)
              Why are certain materials selected over other materials in manufacturing complex machines? (weight, viscosity, texture, weights of metals, climate consideration, availability of materials, paint selection and how it affects performance)',
              'Our overarching theme for lesson 3 is what types of materials should be used for various purposes considering with the product use in mind. Students will be able to start realizing that selections in material components have a direct impact
              on the functionality and efficiency of that product.  Students will be challenged to consider materials cost versus performance when considering or planning designs during this lesson. We are using real life situations to predict and calculate the effects of material choice.',
                3,
                2
            ],
            [
              'Motion in Real Life: It’s More Than Just a Ride, It’s the Experience!',
              'How can our understanding of complex machines affect design choices of our model cars?
                Which energy source will be most efficient for our model car prototypes? (motorized prototypes in conjunction with the energy unit)',
              'Our overarching theme for lesson 4 is the importance of design and its impact on performance. Students will compare and contrast material selection with durability, performance, reliability, and cost.',
                3,
                2
            ],
            [
              'The How and What of Motion: It’s All in the Game!',
              'What is motion and where is it found in games?
                How do we describe motion in games?',
              'In lesson 1, students will develop a deeper understanding of the forces that cause the motion of an object, within the context of various games (sports, arcade, etc.).
              Students will become proficient in using language associated with forces and motion and in using tools to collect measurement data. Students will be able to predict motion
              using Newton’s laws and describe the role of gravity in affecting motion. These initial explorations will prepare students for Lesson 2, when they will be studying interactions.',
                4,
                2
            ],
            [
              'Interacting Forces in Motion: Designed to Lose',
              'How do forces influence motion? How do things start and stop moving?
                What are the misconceptions and negative effects of forces and motion?',
              'Students will shed misconceptions about forces and motion. For example, although a force is needed to set an object in motion, no force is needed to keep it in motion. Students
              often have the misconception that no forces are affecting a stationary object. In fact, balanced forces act on stationary objects, they act in opposite directions and are of equal
              strength. Forces are required to change an objects motion; this includes starting, stopping, and changing directions. At the end of this lesson, students will apply their understandings
              to design a game that has an unfair advantage',
                4,
                2
            ],
            [
              'Properties of Materials that Affect Motion: You Get What You Pay For!',
              'What material properties affect motion and why are certain materials selected over other materials in manufacturing?
              How did games evolve based on available materials?',
              'Students will compare and contrast materials used for equipment, shoes, and playing surfaces (fields courts and playgrounds; balls and bats; helmets and pads), ultimately getting
              students to understand the justification behind companies choice of one material over another. Finally, students will make a judgment about which material(s) are best suited for game
              equipment/components and apply this toward a redesign project.',
                4,
                2
            ],
            [
              'Motion in Real Life: From the Arcade to the Arena',
              'How do we use energy conservation and material properties to produce predicted motion?',
              'Students will synthesize their knowledge from all parts of the Unit to create an original Rube Goldberg machine.  In the end, students will present their constructed machine and explain the forces and motion present in each stage.',
                4,
                2
            ],
            [
              'The How and What of Motion: Taking the A to B Train',
              'What is motion and where is it found in transportation, motors, and complex machines?
              How do we describe how transportation, motors, and complex machines move?',
              'Our overarching theme for lesson 1 is looking at the transportation process, motors, and complex machines in our world. This lesson will provide a context for students to practice discussing and
              measuring how motion happens.  Examples of this include qualitative and quantitative discussions regarding different types of forces (applied vs. internal).  Students will also explore force from a
              fluid perspective through the investigation of pressure in regards to fluids. Technology will be used to acquire data regarding both solids and fluids. Students will be expected to analyze and communicate
              their data both informally and formally. These initial discoveries will allow students to connect force and motion in Lesson 2.',
                5,
                2
            ],
            [
              'Interacting Forces in Motion: Half the Fun is Getting There',
              'How do forces influence motion? How do transportation, motors, and complex machines start and stop moving?
              What are the misconceptions and negative effects of forces and motion?',
              'Our overarching theme for lesson 2 is understanding how forces influence motion in the context of machines that help us move (e.g. airplanes, trains, automobiles, etc.)
              Students will first start by exploring how transportation systems actually work.  This could also include escalators and elevators – encompassing all the ways that humans have engineered how
              we use forces to our advantage to move people or things.  By investigating scenarios that involve friction and/or resonance, students will also be able to describe the good and the bad that both
              of these physical phenomena contribute in the realm of transportation. We are expecting students to bust the myths of forces and motion.',
                5,
                2
            ],
            [
              'Properties of Materials that Affect Motion: Get Outta My Dreams, Get Into My Car',
              'What material properties affect motion?
              Why are certain materials selected over other materials in manufacturing?',
              'Our overarching theme for lesson 3 is what types of materials should be used for various purposes considering with the product use in mind [Might be an area of convergence with Weather,
              Climate, and Human Impact regarding forces and motion related to natural disasters]. Students will be able to start realizing that gravity and contact forces are not the only forces that cause a
              product to work or scenario to play out.  The idea that we can tailor aspects (e.g. distance, charge, magnetic domain properties) of electrical and magnetic forces which can be used in useful ways
              in engineering design.  Students will be challenged to consider using both contact and long-range forces (gravity, electrical, and magnetic) when considering or planning designs during this lesson.
              We are using real life situations to predict and calculate the effects of material choice.',
                5,
                2
            ],
            [
              'Motion in Real Life: It’s More Than Just a Ride, It’s the Experience!',
              'How has our understanding of the transportation of nutrients in plants and animals-circulatory system led us to technological advancements?
                How does the design of the complex machines affect efficiency?
                How do we harness energy for future transportation systems?',
              'Our overarching theme for lesson 4 is transportation as it works in all areas including the circulatory system of plants and animals.  We will explore technology as it relates to advancements, efficiency, and energy.',
                5,
                2
            ],
            [
              'The How and What of Motion - A Stroll in the Park:  the Bio-mechanics of Human Motion',
              'What is motion and where is it found? What simple and complex movements can humans perform?
              How do we describe how things move? How are humans able to move?',
              'What is motion and where is it found? What simple and complex movements can humans perform? How do we describe how things move? How are humans able to move?',
                6,
                2
            ],
            [
              'Interacting Forces and Motion - I Feel the Need for Speed:  How Motion Results from the Interaction of Forces on the Body',
              'How do forces influence motion? How do things start and/or stop moving?
              What are the misconceptions and negative effects of forces and motion?',
              '<p>During this lesson, students will be able to recognize the complex interactions of forces that produce motion. Students will also gain insight into the supply chain factors that contribute to the final design of orthotic devices and robotic arms.</p>
                <p>Students will continue identifying more than one force acting on an object, including friction, and will be challenged to build on their abilities to describe motion as multiple forces interact on or with an object. This includes describing how an
                object starts or stops motion.  Prior knowledge to this unit will include students being able to measure basic quantities connected to describing motion (distance, time, speed, etc.) and in 8th grade they will be tasked with identifying and measuring multiple
                variables related to motion in a given situation.  Students will build their own robotic machines and engage in activities that “interrupt” its motion to reverse engineer solutions to locomotive problems.</p>',
                6,
                2
            ],
            [
              'Properties of Materials That Affect Motion - The Influence of the Material World on Motion',
              'What material properties affect motion (bio-mechanics)?
              Why are certain materials selected over other materials in manufacturing?',
              'To explore the structure function interplay between devices that improve human motion and the locomotion itself, students will participate in a reverse-engineering exercise to examine the purpose of components and rationale for selection of materials.',
                6,
                2
            ],
            [
              'Motion in Real Life - Dolphin Tale: Using Technology to Restore Motion',
              'How has our understanding of motion led us to medical/technological advancements?
              How do machines enhance or restore motion/function?',
              'In this final lesson, students will explore other examples of motion and real world application of technology to enhance quality of life. They will develop an understanding of the design process cycle and the history of a product’s evolution.  Students will also have the chance to develop a device to improve or restore motion of [x].',
                6,
                2
            ],
            [
              'Design Solutions to Reduce the Impact of Natural Hazards',
              '<ol><li>How do Natural Factors impact the Earth?</li>
                <li>What steps can be taken to reduce the effects of Natural Hazards</li></ol>',
              '',
                1,
                3
            ],
            [
                'Soil formation - Rocks',
                'What is soil and what is its composition? Design Project:  Earthworm City',
                '',
                1,
                3
            ],
            [
                'Astronomy - Introduction to the Solar System',
                'What are the different planets in our solar system? What is the difference between a planet and a moon?',
                '',
                1,
                3
            ],
            [
                'History of Planet Earth',
                '<ol><li>What is a rock? (rock classification)</li>
                <li>What are fossils? (fossil classification-casts, molds, petrification, carbon, amber)</li>
                <li>How can scientists use fossils to teach about earth\'s history?</li></ol>',
                '',
                2,
                3
            ],
            [
                'Earth Materials and Systems (weathering, erosion, deposition)',
                'What are weathering, erosion, and deposition?',
                '',
                2,
                3
            ],
            [
                'Plate Tectonics',
                '<ol><li>How did the continents form? (Pangaea)</li>
                <li>How does the movement of continents establish landform patterns?</li>
                <li>How can maps help locate different land and water features on earth?</li></ol>',
                '',
                2,
                3
            ],
            [
                'The Solar System',
                '<ol><li>Earth is part of the solar system, which is made up of many different objects. (Planets, Stars, Meteors)</li>
                <li>What are stars and galaxies and how do we observe them in the solar system?</li></ol>',
                '',
                2,
                3
            ],
            [
                'Systems and Spheres',
                'How do the Earth’s spheres interact with each other?
                What systems are in each sphere?
                What would happen if the hydrological system stopped working?
                Design Project:  Create a model of the Hydrosphere to show how it interacts with another system.  (Limited to 2 systems at the fifth grade level)',
                '',
                3,
                3
            ],
            [
                'Rocks and Fossils',
                'What are the 3 basic types of rocks and how can you identify them?
                What are the different layers of rock found in the earth?
                What are the Laws of Superposition?
                What is Dr. Williams Smith’s Law of Fossil succession?',
                '',
                3,
                3
            ],
            [
                'Erosion and Earth’s Physical Features',
                'What are the causes of  erosion on Earth’s surface?
                What are Earth’s major physical features?',
                '',
                3,
                3
            ],
            [
                'Twinkle, Twinkle, Little Star',
                'What is the Universe?
                What is a Star and how do we use technology to learn more about them?
                Why do some stars seem brighter than others?',
                '',
                3,
                3
            ],
            [
                'Movement of the Earth and Moon around the Sun:  Elliptical Orbit and how it affects the observations seen on Earth.',
                'What are the phases of the Moon?
                How does the Earth’s orbit around the Sun affect the patterns we see in the sky during the day?
                What causes the changes in the length and direction of shadows?',
                '',
                3,
                3
            ],
            [
                'Age of Earth: (Carbon dating, Radioactive decay& Fossils).',
                '<ol><li>How is the age of the Earth defined? (What technology and tools are used today to help us determine
                the age of Earth? What costs are associated with manufacturing the tools used in determining absolute age of the Earth?)</li>
                <li>How can we determine a rock’s origin? (Where did the rock come from? If the Earth is 4.5 billion years old and we have rock that is 5.0
                billion years old where did the rock come from?  What technology and tools are used today to help us determine where a rock comes from and
                what is the cost associated with those tools?)</li></ol>',
                '',
                4,
                3
            ],
            [
                'Earth\'s Spheres',
                'What are the Earth\'s Spheres and how are do they interact with each other? (Atmosphere, Hydrosphere, Geosphere, Biosphere).
                What life forms depend on all four of Earths spheres?  What careers are available that involve each of the spheres?',
                '',
                4,
                3
            ],
            [
                'Earth\'s Energy/Heat Sources (Solar Energy and Earth\'s Interior)',
                '<ol><li>What are Earth’s energy sources and how are they measured?</li>
                <li>How does Earth\'s interior provide energy to our Earth? (Conduction and convection currents, Geothermal-Energy).</li>
                <li>What is happening inside the Sun and what is nuclear fission? (Energy, Heat, Solar Radiation, Gases).</li>
                <li>What happens with the Sun’s energy when it reaches Earth’s atmosphere?</li></ol>',
                '',
                4,
                3
            ],
            [
                'Changes over Time and Natural Hazards',
                '<ol><li>How have varying geological conditions and natural hazards affected our Earth over time?</li>
                <li>What geologic technologies are available today that allow us to study Earth’s past? How could these technologies be developed to be more effective in the future</li></ol>',
                '',
                4,
                3
            ],
            [
                'What are the objects in our Solar System?',
                '<ol><li>What makes up the Solar System? What technology is available to study these objects?</li>
                <li>Why is gravity important in our solar?</li>
                <li>How does Gravity affect your mass and weight on Earth?</li></ol>',
                '',
                4,
                3
            ],
            [
                'Erosion, Weathering and Deposition Reshape Earth’s Surface.',
                '<ol><li>What role do geoscience processes (wind, glaciers, water, gravity and waves) play in the reshaping of Earth\'s surface; and how do the these agents affect construction and design in our everyday lives?</li>
                <li>What is the rock cycle and what criterion is used to classify and characterize rocks? How are Earth’s Rocks used in the world in which we live?</li>
                <li>What are minerals, how do they form, how are minerals classified, and what can minerals be used for?</li></ol>',
                '',
                5,
                3
            ],
            [
                'The Planets and Gravity: The Force Holding it Together Throughout the Seasons.',
                '<ol><li>Why is gravity important in our solar system?</li>
                <li>What are the planets that make up our solar system, how do they differ and what new technology is available today to discover planets in other solar systems?</li>
                <li>How are Earth days, years and seasons related to the way Earth moves in space and what are the tools that are available for observations?</li></ol>',
                '',
                5,
                3
            ],
            [
                'Interactions of the Sun, Earth and Moon',
                '<ol><li>How do the Earth, the moon and the sun affect each other? (Solar and lunar eclipses) and what technology is utilized for observing eclipses?</li>
                <li>Why does our Earth\'s moon change appearance? (Phases of the moon, orbit, rotation.)</li>
                <li>What are some milestones of space exploration?</li></ol>',
                '',
                5,
                3
            ],
            [
                'Plate Tectonics',
                'What is the Theory of Continental Drift? (Pangaea) What is the Theory of Plate Tectonics, why do the continents move and how has the theory changed over time?(Is California sinking?)
What lies within and beneath Earth\' s oceans?',
                '',
                6,
                3
            ],
            [
                'Shake, Rattle and Roll: The Rhythms of Earth!',
                'Why do earthquakes happen? What are seismic waves and how are they used to describe Earth’s interior? How did the Hawaiian islands form? What are the three major types of volcanic cones?',
                '',
                6,
                3
            ],
            [
                'Formation of the Universe and Characteristics of Stars.',
                'How do scientists think the universe began? What is a star? How did the solar system form? What are the properties of the sun? (why do we use sunscreen?) Can we see a satellite? What can we learn from space images?',
                '',
                6,
                3
            ],
            [
                'Why can my hand move in air but not through the table?',
                'Essential questions: <ol><li>What is matter?</li><li>What are solids, liquids and gases?</li><li>How is matter measured?  Mass and volume</li></ol>',
                'Students classify materials according to their physical states—solid, liquid, or gas—by observing objects they encounter and use every day. This introduces students to initial characteristics and properties of each physical state.  Students learn that all matter, regardless of its state, occupies space. Through the study of each physical state, as well as comparing and contrasting each state with another, students are able to articulate the properties of solids, liquids, gases, and other materials by the unit’s conclusion.',
                1,
                4
            ],
            [
                'What are some properties of Matter?',
                'Essential questions:<ol><li>What is the relationship between mass and volume?</li><li>What makes objects float?</li><li>What makes jello jiggle? - Viscosit</li></ol>',
                'These lessons will provide opportunities for real life application of  a basic understanding of matter.  Students should be given opportunities to practice measuring with precision and should begin interpreting data from graphs.  Examples would be measuring  the mass of set volumes of water and then setting up a line graph that is already labeled and scaled.   At this level, recognizing a basic pattern would be an appropriate goal.  Lessons may also include inquiry and manufacturing based lab work such as building a boat that can hold the most pennies.   The use of picture books can be a great introduction to an inquiry based lab involving  density and buoyancy.  These books can be used to spark an interest or to provide a problem for students to solve.',
                1,
                4
            ],
            [
                'What are heat and temperature?',
                'Essential questions:<ol><li>What is temperature?</li><li>What is the heat capacity of specific materials?</li></ol>',
                'These lessons should be taught with engineering based projects so students see how engineering fits in with science concepts.  These concepts should be taught or incorporated into other areas of study such as weather.',
                1,
                4
            ],
            [
                'What is energy?',
                'Essential question:<ol><li>What are sources of energy?</li><li>How is energy used?</li></ol>',
                'These lessons are a basic introduction to energy and how it can be used.  In later grades students will further investigate energy transfer.  The lessons that follow will help students better understand some of the other units of study such as weather formation and how forces interact with matter.',
                1,
                4
            ],
            [
                'The Atoms Family',
                'Essential questions: <ol><li>for Lesson 1.What makes up atoms?</li><li>What are the charges of atomic particles?</li></ol>',
                'In order to understand the energy standards for grade 4, students do need a basic understanding of the atom.  For many students this will be the first time they are learning vocabulary terms such as proton, neutron and electron.  Time should be spent familiarizing students with these terms using a variety of learning styles.',
                2,
                4
            ],
            [
                'Charge me up!',
                'Essential questions: <ol><li>How does static electricity form?</li><li>What happens when charges move?</li></ol>',
                'These lessons should be taught through discovery or interactive lab stations.  As students go through the lab investigations, the concept that electrons are moving should be reinforced.  Teachers can use math problems to help students understand that as electrons move away from an atom the atom becomes positively charged and vice versa.  Time should be spent on this fundamental concept.  If learned incorrectly, it is difficult for students to reverse their misunderstanding. NGSS 4-PS3-3 states students should be able to ask questions and predict outcomes about the changes in energy that occur when objects collide. Emphasis is on the change in the energy due to the change in speed, not on the forces, as objects interact. As Lesson 2 Question 2 is covered, these standards would be good guiding points or questions for each interactive station.  Students can also make connections between the Force and Motion unit by studying how the force applied by an object can impact the number of electrons moved.  Another Force and Motion connection is relate understanding of how charges move to how magnetic poles interact.  Connections can be made to Grade 3 standards by discussing how electrical energy can be converted to sound, heat and light in an electrical circuit.  Electrical safety should also be addressed through lab investigations and in practical application of concepts at home and in the workplace.',
                2,
                4
            ],
            [
                'Grab Shell, Dude! Ride the Wave.',
                'Essential questions:<ol><li>What are different types of waves (ocean, earthquake, electromagnetic, sound)?</li><li>How does the structure of a wave impact its energy (wavelength, amplitude, frequency)?</li><li>How is energy transmitted through waves?</li><li>What affects how waves move?</li></ol>',
                'The following lesson allows students to explore how energy travels through various media.  They should have plenty of lab work to help them conceptualize how energy moves.  Lab work should be combined with lessons on forces and motion and earth science to reinforce understanding of material and to help students make connections among the many areas of scientific study.  Math standards can easily be taught through this lesson and will show real life application of these skills.  Students will explore how these energy changes can generate patterns used for communication and the transfer of information (Morse code, computer code, etc.).  Students should end the unit with a problem based lesson.  An example would be designing a circuit that produces high quality sound for a speaker in a hearing aid.  Another example would be designing a soundproof room for a Barbietm dream house.',
                2,
                4
            ],
            [
                'States of Matter',
                'Essential questions: <ol><li>What are the molecular properties of solids, liquids and gases.</li><li>What changes in state can matter undergo?</li><li>How does a change in energy affect the state of matter?</li></ol>',
                'Encourage students to think about how matter changes form.  Provide guided inquiry and allow students to hypothesize about how raw materials can be physically transformed into different forms by changing the amount of thermal (heat) energy that is in a system.  Lesson 1 is about the physical changes matter can undergo such as shape, state of matter and mixtures formed.  Explorations in manufacturing could include the production of glass, what makes cement harden and how is modeling dough made.  Students should also develop an understanding that physical changes can be reversed.',
                3,
                4
            ],
            [
                'Physical and Chemical Changes',
                'Essential questions: <ol><li>What is the difference between a physical and a chemical change?</li><li>What are the signs that a chemical change has occurred?</li></ol>',
                'Students will learn how new material is created.  Explain that a chemical reaction involves the atoms of a material being rearranged by breaking bonds and forming new bonds.  They will discover scientists perform experiments which lead to the discovery of new materials.  They will reflect on how chemistry affects their daily lives by analyzing how chemical reactions occur.  Let students reflect on their own personal experiences with chemistry.  They might investigate a product and examine how science was used in its creation and determine whether or not the product involved physical or chemical changes.',
                3,
                4
            ],
            [
                'Endothermic and Exothermic Reactions',
                'Essential questions:<ol><li>How can an observer tell if an endothermic or an exothermic reaction has taken place?</li><li>What happens to energy in an exothermic or endothermic reaction?',
                'Connect essential question 2 to changes in energy from Grade 4<br />It is important for students to investigate that an endothermic reaction feels cold and an exothermic reaction feels warm before studying the flow of energy in the chemical reaction. Students will then compare the flow of energy in physical and chemical changes.<br />An extension to this lesson could be the use of a catalyst to speed up a reaction or the use of an inhibitor to slow down a reaction.',
                3,
                4
            ],
            [
                'Energy Changes in Everyday Life ',
                'Essential questions:<ol><li>How is energy from chemical reactions transported through living organisms?</li><li>How is energy converted from fuel to motion in transportation?</li><li>How can energy be used in the recycling of materials?</li><li>How can energy be harnessed during the recycling of materials?</li></ol>',
                '',
                3,
                4
            ],
            [
                'Energy Changes in Manufacturing - thermoplastic, recycling',
                'Essential question 1: How does energy change throughout the manufacturing process?',
                'Lesson 5 is all about how energy changes from throughout the manufacturing process. This lesson should include the exploration of the lifecycle of an everyday material. Examples could include a pencil, a DVD, an adhesive such as glue,etc. Some parts of the investigation could be teacher led or depending on student abilities could be entirely student led.<br />Questions to consider as part of this process are:<br />How can energy be conserved during the manufacturing process?<br />How is energy used in the recycling of materials in the manufacturing process?',
                3,
                4
            ],
            [
                'Structure of the Periodic Table',
                'Essential questions:<ol><li>How are elements properties defined as metals, nonmetals and metalloids?</li><li>How is the periodic table arranged by groups and periods?</li></ol>',
                'Students should perform a series of hands on investigations to explore the properties of elements. They should concepts covered in Grade 5 by exploring the physical properties of elements. They may learn new vocabulary such as luster, malleable and ductile. They can review how to make a simple circuit and investigate which elements are electrical conductors. Students can determine solubility or melting points which will allow them to practice analyzing graphs.',
                4,
                4
            ],
            [
                'Patterns on the Table',
                'Essential questions:<ol><li>What common properties can some elements share?</li><li>How do common properties of elements define their place on the periodic table?</li><li>How do the number of valence electrons determine an element’s place on the periodic table?</li></ol>',
                'After studying the properties of elements and learning how they can be categorized as metal, nonmetal or metalloid, students will look for more connections between the elements. The should practice organizing items into charts such as  The Periodic Table of Stuff prior to organizing elements into a table.  After they are able to organize objects into patterns, students can review basic structure of an atom and complete the Periodic Table Basics  activity which helps students see patterns based on electron configuration.',
                4,
                4
            ],
            [
                'How Elements are Used in Manufacturing',
                'Essential questions: <ol><li>What elements are useful in various manufacturing processes?</li><li>What properties of elements make them useful in manufacturing processes?  How are the properties of elements maintained?</li></ol>',
                'Depending on the teacher, the essential questions for this unit may be used interchangeably.  For example, it may be beneficial to cover how properties are maintained before covering how they may be useful in manufacturing.<br />This lesson may include an element research project where the students research the properties of an element and relate those properties to its uses in business and industry.  The students would report their findings in a business presentation.  During lesson 3, students will discuss the care, use and value of natural resources as well as the production of waste during chemical reactions which causes a threat to our natural resources.',
                4,
                4
            ],
            [
                'The role of electrons in forming matter',
                'How do atoms combine? Under what circumstances do they combine? How do atomic bonds determine properties of compounds/molecules? How are elements combined to create correct chemical compounds/molecules?',
                'Students will build on previous units to develop an understanding of electron transfer, its role in chemical change, and the factors that can influence this change.  They will use patterns on the periodic table to develop an understanding of the type and amounts of atoms that combine for new material and how that impacts the properties of the material created.  They will apply these skills to real life problems ranging from the impact of chemicals on the human body to the effects of chemicals in industry and manufacturing.',
                5,
                4
            ],
            [
                'Chemical Reactions',
                'How does matter combine to form new kinds of substances? How is matter conserved in ordinary chemical reactions?',
                'Matter and energy conservation make it possible to TRACE MATTER AND ENERGY using different scales, from subatomic to universal and through all kinds of systems: physical, living, Earth and technological systems while engaging in explaining, predicting, modeling, designing and investigating. Building on the Law of Conservation of Mass and the Law of Conservation of Energy, students will trace where matter goes in a chemical reaction.',
                5,
                4
            ],
            [
                'Kinetic Energy of Particles',
                'How does energy affect the rate of a reaction?',
                'This lesson has the general purpose of increasing students\' understanding of energy transfer, its role in chemical change, and the factors that can influence this change.  They will apply prior knowledge of energy changes to chemical reactions.  Students will discover practical applications to changing or controlling the energy in a chemical system and will be able to explain why there appears to be a loss of matter in many reactions and how the loss can be mitigated.',
                5,
                4
            ],
            [
                'Material Science',
                'How does concentration and amount impact molecular structure of new materials? How are new materials made and improved?',
                'Ever wondered what\'s in toothpaste or how marshmallow peeps are made? What\'s so special about those new fabrics that claim to keep you cooler as you work out? Many of the fundamental principles behind designing and making items we use everyday are based in the science of chemistry. How better to learn about properties of matter, physical and chemical changes, and simple chemical reactions than through the objects and materials students use every day?  This lesson is designed to help students focus on the ideas of chemistry and engineering—to understand how one is foundational to the other. Students will explore how chemical engineering is used to create and improve materials.  Students may pursue extension activities to learn more about great achievements in chemical engineering, their own aptitude and interest in engineering, and the kinds of education that can lead to a career as a chemical engineer. An objective of the lesson is to open students to the idea that they themselves might someday use chemistry to make something new and of value.',
                5,
                4
            ],
            [
                'Radioactive Decay, Fission and Fusion',
                'What causes atoms to be unstable? What happens to atoms that are unstable? What reactions involve the nucleus?',
                '<p>Energy is a property of many substances and is transferred in many ways. In most chemical and nuclear reactions, energy is transferred into or out of a system. Heat, light, mechanical motion, or electricity might all be involved in such transfers.  This lesson will focus on the intense transfers of energy which create changes within atomic nuclei.  Students will learn differences between chemical and nuclear reactions.</p><p>From prior grade levels, students should already have a basic understanding of chemical reactions, subatomic particles and changes in energy. In this lesson, students will explore the changes in the nuclei of atoms which lead to radioactive decay, as well as, fission and fusion reactions.  It may be helpful to review how to analyze graphs so that students can use slope and trends to identify patterns of radioactive decay.</p>',
                6,
                4
            ],
            [
                'Practical Uses Involving Nuclear Reactions',
                'How do the products of decay affect surrounding matter? How can the products of nuclear reactions be used for good or bad in our everyday lives?',
                'Students will discover nuclear reactions have tremendous potential to improve the quality of life.  They will investigate the pros and cons of this technology and develop a statement indicating whether or not they support the use of nuclear reactions.  Ideas for these lessons include Socratic seminar or class debate as a community with a nuclear power plant or particle accelerator.',
                6,
                4
            ],
            [
                'Energy Transformation within a System',
                'How can energy from nuclear reactions be captured for practical energy uses? How is the energy from nuclear fission (and potentially fusion) reactions converted to electrical energy?',
                '',
                6,
                4
            ],
            [
                'Societal Impact of Nuclear Energy',
                'Why is nuclear energy considered to be unstable and how does that relate to implementation? What are the costs, benefits, impact, and environmental concerns of using nuclear energy?',
                'Nuclear energy has many advantages and disadvantages that must be considered before implementation. It has both positive and negative impacts on the environment, and a thorough understanding of the nuclear energy-generation process will allow for better decision-making when comparing the energy source to others.',
                6,
                4
            ],
            [
                'Round and Round - Creation',
                'How are the life cycles of plants, animals and products similar?',
                'In this lesson, students are introduced to the life cycles of plants and animals and the design cycle of products. Upon completion of the lesson, students will effectively communicate the different stages of the life cycle of organisms and the design cycle of products and compare and contrast the similarities and differences between them. Moreover, students will be able to use the acquired content knowledge of this lesson to expand knowledge and applicable principles in subsequent lessons.',
                1,
                5
            ],
            [
                'Pass It On Down - Inheritance',
                'How are plants, animals and products similar from generation to generation?',
                'In this lesson, students will become more familiar with the qualities and features of plants, animals and products of the past and apply that newly obtained knowledge to the understanding of how organisms and products maintain a majority of their characteristics from generation to generation. Additionally, students will create a diagram or model to display their discoveries of the similarities in select animals, plants and products.',
                1,
                5
            ],
            [
                'Continuous Improvement - Variation',
                'How can records of the past help us learn about plants, animals and products?',
                'In this lesson, students will complete an in depth study of records of the past to gain an appreciation and understanding of the modifications and adaptations of organisms and products over time. Moreover, students will identify how records of the past can be utilized to identify variations in organisms and products. Finally, students will trace the design cycle of a product through the careful study of the creation, development and improvement of a specific product over an appreciable period of time. This lesson will serve as an unparalleled model into the foundational concept of the design cycle and its importance to the STEM disciplines.',
                1,
                5
            ],
            [
                'Inside Out',
                'What internal and external structures support growth and reproduction of animals? How do internal and external structures support growth and reproduction of animals?',
                'In this lesson, students will examine internal and external structures necessary for the growth and reproduction of animals. While acquire appropriate knowledge to identify these structures, students will also be able to provide evidence for how the structures support growth and reproduction, and create a model or diagram to illustrate their understanding.',
                2,
                5
            ],
            [
                'Wanted Dead or Alive',
                'What internal and external structures aid in survival? What animal behaviors increase their likelihood of survival?',
                'In this lesson, students will examine the internal and external structures in animals that allow for their survival. Additionally, students will then identify those structures readily and through a model explain how the structures aid animals in their ability to survive.',
                2,
                5
            ],
            [
                'Outside In',
                'What internal and external structures support growth and reproduction of plants? How do internal and external structures support growth and reproduction of plants?',
                'In this lesson, students will examine internal and external structures necessary for the growth and reproduction of plants. While acquire appropriate knowledge to identify these structures, students will also be able to provide evidence for how the structures support growth and reproduction, and create a model or diagram to illustrate their understanding.',
                2,
                5
            ],
            [
                'I’m a Survivor',
                'What internal and external structures aid in survival? What plant behaviors increase their likelihood of survival?',
                'In this lesson, students will examine the internal and external structures in animals that allow for their survival. Additionally, students will then identify those structures readily and through a model explain how the structures aid animals in their ability to survive.',
                2,
                5
            ],
            [
                'What Does the Fox Say?',
                'What structures of animals increase their ability to detect information from their environment?',
                'In this lesson, students will conduct multiple engaging activities that will allow them to identify, hypothesize and test how the sensory organs contribute to the overall ability of animals to understand, interact and react to information they receive. Students will conduct a wide variety of observations before they create models to illustrate their understandings about the sensory organs roles. Moreover, students will create and test hypothesis about how the structure of each sensory organ contributes to an animal’s ability to interact with and within its environment.',
                2,
                5
            ],
            [
                'In the Thick of Things',
                'How do the internal and external structures of a plant enable it to acquire, use and release energy? How does the release of plant energy affect people in their daily lives?',
                'In this lesson, students develop an understanding of how the internal and external structures of a plant are utilized to aid in all elements of the energy process - acquiring, using and releasing energy. Students will then investigate how plant and animal worlds collide as they begin to develop an appreciation for the interconnectedness of all organisms.',
                3,
                5
            ],
            [
                'eMOTIONal Eaters',
                'How do the internal and external structures of animals enable them to acquire, use and release energy? What structures and functions allow both cold and warm-blooded animals to be energy efficient?',
                'In this lesson, students develop an understanding of how the internal and external structures of an animal are utilized to aid in all elements of the energy process - acquiring, using and releasing energy. Students will continue their investigation of how plants and animals are interdependent on one another on the structural level for survival. In addition, students will dig deeper into the animal world, comparing and contrasting the structure and function of cold and warm-blooded animals as it relates to energy.',
                3,
                5
            ],
            [
                'Design Project: It\'s Not Easy Being Green',
                'How does the greenhouse illustrate the acquisition, utilization and release of energy? How can the variables in greenhouses be adjusted to produce the greatest energy? How can a greenhouse be designed to maximize production?',
                'In this lesson, students gain a new perspective of their recently acquired knowledge about energy in plants through observation of plant life in a student designed greenhouse. Through use of the scientific methodology, students will derive reasonable understandings and explanations about variables that can affect plants as they strive to flourish under controlled growing conditions. After intensive research and observations, students will utilize their knowledge to design and create the most beneficial and efficient model of a greenhouse.',
                3,
                5
            ],
            [
                'Operating System',
                'What is a cell and what is cell theory? How do cells differ in their structure and function among organisms?',
                'In this lesson, students utilize a variety of investigations to examine the basic building block of all life-the cell. Students will become familiar with the parts of  a cell and the contribution each part makes through a variety of learning activities which allow them to make analogies between cells and how they function with common objects (cell phones, airplanes, bathtubs) and/or corporations (Caterpillar, Cabot, Waste Management) and how they function. In addition, students continue their evaluations of cells and how cells function by analyzing different types of cells and what role each cell plays in the overall function of an organism. Students will use technological advanced microscopes available to them to compare and contrast different cell types and their functions within multiple organisms.',
                4,
                5
            ],
            [
                'Wireless Network',
                'How do cells differ in their structure and function within an organism? How do the subsystems interact to form a system? What systems function within an organism?',
                'In this lesson, students will use prior knowledge acquired about cells and cell theory to evaluate types of cells and their functions. Students will utilize available technology to document and synthesize information acquired from observations about the differences and similarities of cells and their functions. Finally, students will also formulate an understanding about how cells form subsystems and subsystems form systems in organisms, developing diagrams and/or models to illustrate understanding of the interconnectedness of cells, subsystems and systems.',
                4,
                5
            ],
            [
                'Battery Life',
                'What role do sun and water play in a plants’ ability to acquire energy? How does photosynthesis help a plant to create energy? How does the digestive system aid in converting food to energy in organisms? What is the difference between aerobic and anaerobic respiration?',
                'In this lesson, students will expand prior macro knowledge of energy processing in organisms to a much more intricate understanding of organisms production of energy at the micro level studying photosynthesis and digestive systems in organisms. Not only will students gain a new appreciation for the cellular level of energy production, but students will also develop an analysis of the necessary conditions for aerobic and anaerobic respiration to occur and compare and contrast the two.',
                4,
                5
            ],
            [
                'Links',
                'What structures and behaviors of an organism determine its likelihood to reproduce? What are possible advantages of asexual reproduction for offspring?',
                'In this lesson, students will analyze differences in sexual and asexual reproduction and the advantages each can present for an organism and its prodigy. In addition, students will develop a better understanding of behaviors of an organism that enhance likelihood of reproduction, as well as, structures in organisms that make them more likely to reproduce.',
                4,
                5
            ],
            [
                'Design Project: Take That Apart',
                'How can a disassembled prosthesis illustrate form and function of a limb? If a portion of a limb is missing, how could those functions be restored with prosthesis? What will secure the prosthesis to the person now and in the future?',
                'In this lesson, knowledge is gained as students indagate themselves into the concepts of form and function of organisms through reverse engineering.  Students will participate in an innovative and fascinating project as they investigate how form and function of human limbs is designed while disassembling a prosthetic limb.  Through this exciting learning opportunity, students can see how limbs function, how they are formed and even propose possible improvements of prosthetics for future consideration.  In addition to knowledge gained about form and function from the activities, students also receive instruction and experience in reverse engineering, an integral component in understanding the design process.',
                5,
                5
            ],
            [
                'Chicken or the Egg',
                'How does the form of a structure determine life’s functions and how does the function of a structure determine its form? How does the knowledge developmental milestones and function inform physicians, parents, and educators?',
                'In this lesson, students continue to scrutinize the concepts of function and form as they investigate the properties of substructures of a system; this investigation connects for students how form allows for certain functions in an organism. In addition, students learn how form and function are measured in a system and how data about growth and development guide stakeholders in decisions.',
                5,
                5
            ],
            [
                'Limb from Limb',
                'How do the individual structures in the system contribute to the overall functioning of the whole? What are the similarities and differences in the structure of systems and how they function in plants and animals? What are ways a cardiologist repair the circulatory system?',
                'In this lesson, student continue to increase their understanding of the relationship between form and function Students will learn the importance of substructures to the overall function of organisms and investigate the similarities and differences of systems in plants and animals.  While interpreting the branching of systems in many organisms, students will make conclusions about how cardiac surgeons use the knowledge of branching systems to make medical interventions on patients.',
                5,
                5
            ],
            [
                'Input, Output',
                'How do organisms utilize sensory organs to detect, process, and use information from the environment? How have hearing devices improved sound for the hearing impaired and deaf?',
                'In this lesson, students investigate how organisms use sensory organs to receive information and how the senses process and interpret that information.  Additionally, students will create a diagram to demonstrate understanding of the sensory process. Finally, students will research how hearing devices have been improved over time through technology to continually enhance the quality of life of the hearing impaired and deaf.',
                5,
                5
            ],
            [
                'Jumping in the Gene Pool',
                'How can organisms of the same species have different characteristics through Natural Selection? How can using fossil records to identify and analyze the patterns of change help you understand why some traits continue and others disappear? (i.e., Mammoth to elephant, Neanderthal to modern man.) How does the identification of predisposition markers by geneticists affect the choices of individuals?',
                'In this lesson, students gain a basic understanding of genetics, heredity, and natural selection among organisms in the plant and animal world.  Through a series of laboratory studies and application of scientific theories, students begin to acquire a working knowledge of the complexity and intricacy of how strongly genetics affects the world around them.  Moreover, students then begin to examine the ethical and moral implications that technological breakthroughs in genetics may have on their future world.',
                6,
                5
            ],
            [
                'Design Project:  Apples to Apples',
                'How have technologies influenced desired traits in organisms - plants? How does genetic variation among organisms affect survival and reproduction? How do genetic technologies impact the supply chain to benefit the producers and consumers of the agricultural industry?',
                'In this lesson, students conduct a series of performance tasks to increase their knowledge of genetics in the field of agriculture.  From the study of how genetic factors ensure survival and strengthen organisms, to the influence genetic engineering can bring to increasing production of the supply of fruits and vegetables, students gain new perspective and knowledge about the complexity and scientific nature of agriculture in the 21st century.',
                6,
                5
            ],
            [
                'Design Project:  Down on the Farm',
                'How does technology increase the supply of livestock for human consumption? How have technologies influenced desired traits in organisms - animals? What are the ethical and moral responsibilities of scientists, doctors and individuals using technology to create an organism with particular traits?',
                'In this lesson, students will examine how technological advancements and genetic alterations increasing both number and likelihood of desired traits in livestock are affecting the variability of traits in the population now and in the future.  Students will also become familiar with scientific advancements in technologies that permit such alterations to occur.  In addition, students will consider the moral and ethical ramifications of genetically altering livestock for human benefit.',
                6,
                5
            ],
            [
                'What is the difference between weather and climate?',
                'What is the difference between weather and climate? What factors influence temperature around the world and in your community?',
                'Understanding weather and climate allows students to begin exploring the topic of climate change –which is particularly relevant to the Polar Regions.  Students observe and track weather in their hometown and two other locations to learn about weather, factors influencing weather and climate, and weather forecasting.',
                1,
                6
            ],
            [
                'What are the weather and seasons for Aurora and USA?',
                'What is weather?',
                'Students in this lesson will learn the basics of what weather and seasons This lays the groundwork for future understanding of climate and weather change and how these changes are affected by human impacts.',
                1,
                6
            ],
            [
                'Habitat and Food Chains and Weather/Climate Issues',
                'What are distinct features of animal habitats in different regions particularly locally in the Midwest? How have animal habitats been impacted by weather and climate changes caused by human impact?',
                'Students in this lesson will explore distinct features of animal habitats both locally and nationally.  In addition, they will investigate how the habitats have been impacted by weather and climate change issues.',
                1,
                6
            ],
            [
                'Different Design Solutions to Reduce Weather Related Hazards',
                'What are different design solutions that are used to reduce weather related hazards? How can we evaluate the merits of different design solutions to maximize reduction of weather related hazards?',
                'Students in this lesson will explore different design solutions that have been utilized to reduce weather related hazards.  In addition, students will investigate the merits of these different design solutions to maximize a reduction in weather related hazard damage and apply this to actual designs in lesson 4.',
                1,
                6
            ],
            [
                'Design process - Build your own design solution for flooding',
                '',
                'As the climate changes and storms become increasingly stronger, systems must be designed to better protect the delicate infrastructure and protect human life. This unit gives the students the opportunity to design a solution for a flood-prone climate, determining good flood-resistant materials and the safest approach to managing a flood.',
                1,
                6
            ],
            [
                'Avoiding Water Pollution - Protecting Aurora\'s Most Important Resource',
                'What is water pollution and how does the city of Aurora test to ensure it is minimized? What can citizens of Aurora do to make sure water remains a viable resource presently and in the future?',
                'This is a good time to explore water pollution—and what better way to do so then to investigate from a local perspective.  The city of Aurora has many different ways it tries to eliminate water pollution.  From water treatment plants, to legislation that encourages citizens to responsibly use water—these are all important considerations for students to understand.',
                2,
                6
            ],
            [
                'What is community preparedness for catastrophic and natural disasters? (Include home, business, school and mass transit.)',
                '',
                'Student will learn increasing awareness of how to get to safety, where to go to take shelter in a natural disaster',
                2,
                6
            ],
            [
                'How has climate changed over the past 50 years?',
                'What are indicators of change in a climate? How does weather change in a long term period?',
                'The national conversation of “climate change” has captured the attention of the media and the populace, but despite the politics that surround it, science has had an eye on the climate and how it has changed over the past 5 decades. Even without humans impacting the environment around them, climates would change, but with the human impact as a catalyst, the coldest places have changed and water systems have changed. Mapping that change and analyzing the data that has been gathered will help give a perspective to the conversation and help students understand the world around them further.',
                2,
                6
            ],
            [
                'What are aquifers?',
                'Where are aquifers? How much of our water comes from this source?',
                'This unit is a building unit for the later grades exploration into both of these questions.  In this lesson, students apply what they learned in lower grades about the water cycle.',
                3,
                6
            ],
            [
                'Catastrophes and Natural Hazards',
                'What are catastrophic events and natural hazards? What catastrophic events have occurred? Local and worldside?',
                'This unit introduces students to the realities of our world.  Students will study a variety of catastrophic events and natural hazards.  Further, they will locate specific examples local and worldside of different catastrophic events.  This will lead to curriculum in upper grade levels that targets ways to specifically address these different catastrophic event concerns.',
                3,
                6
            ],
            [
                'Predicting Weather',
                'How has the development of human activity required the accurate and formulaic prediction of weather for various purposes?',
                'Teaching sailing on a small lake, the instructor can get used to the weather patterns of the lake – when the wind blew one direction, it would get cooler, when it blew another, it would get warmer. Simple methods like this have been used for centuries, and have been improved by scientific methods, but still hearken back to the same concepts. What are the modern methods employed, and what can be learned by the data gathered by modern machines?',
                3,
                6
            ],
            [
                'Effects of Human Activity on Resources',
                'What kinds of human activity have negatively impacted human resources and health over time? What has been consumption of water for the last 25 years in Aurora?',
                'This unit is a continuation of a 5th grade exploration into both of these questions over a 100 year period.  In this lesson, students apply what they learned in 57th grade to situations investigated involving the City of Aurora and Cabot Microelectronics.',
                4,
                6
            ],
            [
                'Uneven Heating Creates Climates',
                '',
                'Students in this lesson will learn the basics of what features around the world make certain climates possible, and what endangers them. This lays the groundwork for future understanding of climate change and how these climates are affected by human impacts.',
                4,
                6
            ],
            [
                'What is the Greenhouse Effect?',
                'What is the greenhouse effect, and what are the greenhouse gases and their share of total emissions?',
                'Students learn about greenhouse gases and begin to consider what events are causing an increase in the amount of greenhouse gases in the atmosphere.  Although, the Greenhouse effect is a natural phenomenon that allows the Earth to retain an average temperature enabling life, an imbalance in the natural cycle of the greenhouse effect has had unintended consequences of raising the Earth’s average temperature making it less habitable for plants and animals.  Human activity over the past 100 years has significantly increased levels of CO2 emissions globally through industrialization, fossil fuel burning, and deforestation.   Students will explain the process of the natural greenhouse effect, and identify unintended consequences of human activity leading to ever increasing amounts of CO2 in the atmosphere.',
                4,
                6
            ],
            [
                'Climate Change for a Change',
                'What is climate change? How does global climate change affect our lives?  To what extent short term and long term is climate change a cause for concern?',
                'This unit takes an in depth look at climate change—defines it, investigates how it affects us, and compares the implications of climate change from a short term and long term perspective.',
                4,
                6
            ],
            [
                'Human Population Growth and Resource Consumption Over 100 Year Period',
                'How has human population grown over the past 25 years?  50 years?  100 years?  Etc.  How has resource consumption changed over the past 25 years? 50 years?  100 years?  ',
                'In this lesson, students take a variety of data sources and investigate how human population has grown and resource consumption has changed over different periods of time.  This lesson will not only prepare students to understand the interplay between human impact and weather and climate—but will also prepare them as 8th graders to postulate consequences of both human population growth and resource consumption.',
                5,
                6
            ],
            [
                'Analysis and Prediction of Severe Weather',
                'How do we analyze and interpret data on severe thunderstorms and tornadoes?  How do we forecast/predict severe thunderstorms and tornadoes?  What technologies can be used to predict severe thunderstorms and tornadoes?',
                'This lesson allows students to explore the City of Aurora with respect to different severe weather events.  Special attention will be given to the recent 100 year rain event on July 17 – 18 of 1996.  Students will have access to a variety of City of Aurora data and will consult with area National Laboratories to develop technologies that may assist in the future with predicting severe weather and preventing catastrophic damage.',
                5,
                6
            ],
            [
                'Introduction to Humans Impacting Humans',
                'What are the implications of carbon emissions from a data perspective (look into carbon emissions of industrialized versus non-industrialized nations as well as global CO2 levels)? How have humans unintentionally disrupted weather patterns as evidenced with the Dust Bowl?',
                'Humans have both intentionally and unintentionally altered the way our weather and climate exist.  This lesson has two primary foci:  first, students investigate carbon dioxide emissions and investigate how they are different locally, nationally, and globally;  further, students will gain a deeper understanding of unintended weather disruption as they take an in depth look into the Dust Bowl.',
                5,
                6
            ],
            [
                'Introduction to Humans Impacting Ecosystems',
                'What is the relationship between living things and the environment (define ecosystem)? How are living and non-living organisms classified in an ecosystem (classify biotic/abiotic components)? How have ecosystems adapted over time due to human impact (symbiotic relationships/natural resources)?',
                'The culminating lesson for this unit on Weather, Climate, and Human Impact looks at the big picture amongst humans and all living things.  Special attention is given to increasing awareness on the delicate nature of ecosystems and how humans both intentionally and unintentionally elicit considerable changes in said ecosystems.  This builds a foundation to the 8th grade unit that investigates specific patterns that exist inherently in and among interactions of different ecosystems.',
                5,
                6
            ],
            [
                'Human Population Growth and Resource Consumption',
                'What are the consequences of human population growth? What are the consequences of resource consumption?',
                'This unit is a continuation of a 7th grade exploration into both of these questions over a 100 year period.  In this lesson, students apply what they learned in 7th grade to situations investigated involving the City of Aurora and Cabot Microelectronics.',
                6,
                6
            ],
            [
                'Analysis & Prediction of Rising Water',
                'How do we analyze and interpret data on rising sea/river levels?  How do we forecast/predict rising sea/river levels?  What technologies can be used to minimize rising sea/river levels?',
                'Students in this lesson will be familiar with the lesson structure as they performed a similar investigation as seventh graders in analyzing and predicting severe weather.  This is the culminating “data analysis” lesson as they now must infer what will cause rising water locally (river levels) and nationally/globally.',
                6,
                6
            ],
            [
                'Humans Impacting Humans',
                'What is the concept of a carbon footprint and how does it help us monitor human impact on the environment? How can mankind manage weather to mitigate the negative effects of weather (i.e. droughts, floods, etc.)?',
                'Humans continually create situations both intended and unintended that further impact themselves and other humans.  This lesson began in 7th grade as an investigation into carbon dioxide levels locally and globally and how humans unknowingly disrupted weather patterns leading to the Dust Bowl.  At the 8th grade level, students take this background knowledge and look at carbon from a more detailed perspective, making the connection between human activities and carbon footprints.  Further, students now will investigate and prototype ways to intentionally alter weather patterns to benefit mankind.',
                6,
                6
            ],
            [
                'Humans Impacting Ecosystems',
                'What patterns presently exist among interactions of ecosystems?  How will these patterns change as a result of weather, climate, and human impact?',
                'This lesson is an extension of an introductory 7th grade lesson which focused on humans impacting ecosystems.  Students will recall ecosystems, biotic & abiotic components of an ecosystem, and symbiotic relationships & natural resources inherent in ecosystems to develop a deeper understanding of how humans impact ecosystems.  At the 8th grade level, patterns will be identified and explored amongst interactions of ecosystems and said patterns will be investigated as to how they have and will change as a result of weather, climate, and human impact.',
                6,
                6
            ],
            [
                '',
                '',
                '',
                6,
                5
            ]




        ];
        foreach($topics as $topic){
            Topic::create(['title' => $topic[0], 'summary' => $topic[1], 'commentary' => $topic[2],'grade_id' => $topic[3], 'subject_id' => $topic[4]]);
        }
    }
}