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
                '',
                '',
                '',
                2,
                3
            ],




        ];
        foreach($topics as $topic){
            Topic::create(['title' => $topic[0], 'summary' => $topic[1], 'commentary' => $topic[2],'grade_id' => $topic[3], 'subject_id' => $topic[4]]);
        }
    }
}