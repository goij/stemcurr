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
                'What is an ecosystem?',
                'Students will: <ol><li>Identify the parts that make up an ecosystem.</li><li>Define an ecosystem based off of the identified parts.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                1,
                'What are the parts that make up an ecosystem (organism, population, community, ecosystem, biome)?',
                'Students will: <ol><li>Identify the parts that make up an ecosystem.</li><li>Define an ecosystem based off of the identified parts.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],[
                1,
                'What is a food chain?',
                'Students will: <ol><li>Model a food chain in an aquatic, forest, grassland, and desert ecosystem.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                1,
                'How do changes in an environment affect living things/ecosystems/food chains?',
                'Students will: <ol><li>Create a story that tells about a living thing, ecosystem, or food chain being affected by changes in its environment.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                1,
                'How can an ecosystem’s physical characteristics, temperature, or availability of resources impact an organism (What are the ways that biotic factors are impacted by abiotic factors)?',
                'Students will: <ol><li>Act out a conversation between two animals who experience a significant change in abiotic factors in their ecosystem (i.e. a lizard and a snake who suddenly find themselves in a snowstorm, a fish and turtle whose pond dries up or becomes polluted, or a bird and monkey who wake up one morning to find the trees in their forest have been chopped down).</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                1,
                'What are the benefits of an animal living in a group?',
                'Students will: <ol><li>Act out a conversation between two animals who experience a significant change in abiotic factors in their ecosystem (i.e. a lizard and a snake who suddenly find themselves in a snowstorm, a fish and turtle whose pond dries up or becomes polluted, or a bird and monkey who wake up one morning to find the trees in their forest have been chopped down).</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                2,
                'Where did fossils come from?',
                'Students will: <ol><li>Explain how an animal becomes a fossil.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO3510 [Ecology]<br />
                NSM1300 [Earth Science]'
            ],
            [
                2,
                'In what ways are dinosaurs like birds? In what ways are they different?',
                'Students will: <ol><li>Create a Venn diagram to compare and contrast dinosaurs and birds.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO3530 [Evolution]<br />
                NSM1300 [Earth Science]'
            ],
            [
                3,
                'Where do plants get energy?',
                'Students will: <ol><li>Compare the growth of a plant in a sunlit area with the growth of a plant in a dark area with all other factors controlled.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]'
            ],
            [
                3,
                'Where do animals get energy?',
                'Students will: <ol><li>View food chains and verbally trace the energy pathways back to plant sources.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]'
            ],
            [
                4,
                'How do people affect environments?',
                'Students will: <ol><li>Read a narration of a camping trip and will decide how the actions and decisions of the campers might impact the natural environment they camp in.</li>
                <li>Observe an example of a native Illinois Prairie and will compare it to the current flora and fauna of their area.</li></ol>',
                'BIO2220 [Humans and the Environment]'
            ],
            [
                5,
                'What tools are used to measure and estimate length, volume, mass, and temperature?',
                'Students will: <ol><li>Record metric measurements and estimates using a ruler, graduated cylinder, balance, and Celsius thermometer.</li></ol>',
                'BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]'
            ],
            [
                6,
                'What kinds of materials would you need to explore an ecosystem?',
                'Students will: <ol><li>Pack a backpack with observation tools needed to explore a given ecosystem.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO3510 [Ecology]<br />
                NSM1300 [Earth Science]'
            ],
            [
                7,
                'In what ways do plants depend on animals for survival?',
                'Students will: <ol><li>Research the mutually beneficial relationships in nature (cactus/bird, bees/flowers, foxes/blackberries) and will describe what might happen if one of the organisms disappears from the ecosystem.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                7,
                'In what ways do animals depend on plants for survival?',
                'Students will: <ol><li>Identify information obtained from research conducted in previous question that demonstrates ways that animals depend on plants for survival.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                8,
                'How do animals and insects communicate?',
                'Students will: <ol><li>Model the bee waggle dance to help the hive (classmates) locate a new nectar source.</li>
                <li>Design a teacher waggle dance to help the teacher communicate information to the class regarding a classroom management goal (i.e. lining up quickly for lunch, getting into reading groups, etc.)</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                8,
                'What structures have animals developed to increase their chances of survival?',
                'Students will: <ol><li>Match cryptic coloration patterns (camouflage) from animal hides to the ecosystem in which that pattern would be beneficial.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]<br />
                BIO3530 [Evolution]'
            ],
            [
                8,
                'What structures have plants developed to increase their chances of reproduction?',
                'Students will: <ol><li>Observe seed pods and then classify seed pods by their methods of dispersal (gravity, wind, ballistic, animal, and water)</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]<br />
                BIO3530 [Evolution]<br />
                BIO3270 [Plant Physiology]'
            ],
            [
                8,
                'What do fossils tell us about our environment?',
                'Students will: <ol><li>Model how fossils are formed.</li><li>Explain what fossil evidence reveals about the environment where it was discovered.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                9,
                'How does energy transfer from one organism to the next in a food chain?',
                'Students will: <ol><li>Model a food chain.</li><li>Describe how energy transfers throughout the food chain.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                9,
                'What are the roles of producer, consumer, and decomposer in a food chain?',
                'Students will: <ol><li>Construct a model of a food chain.</li><li>Describe the roles of producer, consumer, and decomposer in the food chain.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                9,
                'What happens to a food chain if there is an imbalance of organisms?',
                'Students will: <ol><li>Explain what might happen if a particular link in the food chain has a drastic population increase or decrease.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                10,
                'In what ways are humans dependant on plants?',
                'Students will: <ol><li>Brainstorm a list of plants or plant products that they use very day.</li>
                <li>Look at the animal products that they are dependent upon and trace their survival back to a dependence on plants. </li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]'
            ],
            [
                10,
                'In what ways are humans dependant on animals?',
                'Students will: <ol><li>Look at historical interactions between humans and animals and will describe ways in which their modern lives might be affected without relying on certain animal populations.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                10,
                'Are animals dependant on humans?',
                'Students will: <ol><li>Look at historical interactions between humans and animals and will describe ways in which animal’s lives might be affected without relying on certain human populations.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]'
            ],
            [
                11,
                'What is the appropriate metric unit used to measure objects of various sizes?',
                'Students will: <ol><li>Look at varying objects (i.e. river, lake, pond, cup of water, water droplet) and determine appropriate unit of measurement for the given object.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                12,
                'Where can interdependent relationships and adaptations be observed on the John C. Dunham STEM Partnership School and Aurora University Campus?',
                'Students will: <ol><li>Design a nature observation scavenger hunt using the measurement tools and methods that they learned in lesson 5.</li></ol>',
                'BIO2220 [Humans and the Environment]'
            ],
            [
                12,
                'How can cryptic coloration (camouflage) be utilized to improve the appearance of physical spaces?',
                'Students will: <ol><li>Locate mechanical elements that have been hidden using cryptic coloration in a variety of physical spaces.</li>
                <li>Utilize the design process (ask, imagine, plan, create, and improve) to help blend a mechanical element (electrical box, hose reel, storage container) into its surroundings to improve the appearance of a physical space on campus.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1220 [Biology of Organisms]'
            ],
            [
                13,
                'What roles do producers, consumers, and decomposers fill in an ecosystem?',
                'Students will: <ol><li>Develop a model that demonstrates the roles that producers, consumers, and decomposers fill in an ecosystem.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                13,
                'What roles do herbivore, carnivore, and omnivore play in an ecosystem?',
                'Students will: <ol><li>Develop a model to demonstrate the role herbivore, carnivore, and omnivore play in an ecosystem.</li>
                <li>Describe how energy flows from the sun to an herbivore/omnivore/carnivore.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                13,
                'How does the predator-prey relationship impact an ecosystem?',
                'Students will: <ol><li>Develop a model to describe the movement of matter among plants, animals, decomposers, and the environment.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO1210 [Biology of Cells]<br />
                BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                14,
                'How have animals adapted to be more efficient predators? How have animals adapted to become less vulnerable as prey?',
                'Students will: <ol><li>Compare physical features of predators and their prey.</li>
                <li>Discuss which features are shared by the top predators in several food webs.</li>
                <li>Create their own predator that would fit into an existing ecosystem without disrupting the balance (not and ultimate predator).</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]<br />
                BIO3530 [Evolution]'
            ],
            [
                15,
                'How do populations in an ecosystem both utilize and contribute to the nitrogen, carbon, and water cycles?',
                'Students will: <ol><li>Measure and calculate an organism’s utilization of nutrients in an ecosystem.</li>
                <li>Describe an organism’s dependence on the proper functioning of essential cycles within the ecosystem.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO2220 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                16,
                'How can nutrient flow disrupt an ecosystem?',
                'Students will: <ol><li>Model nutrient flow within an ecosystem.</li>
                <li>Model how nutrient flow disruptions impact an ecosystem.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO2220 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                17,
                'How do people use resources?',
                'Students will: <ol><li>Identify how renewable and nonrenewable resources are utilized by humans.</li>
                <li>Evaluate the advantages and disadvantages of renewable and nonrenewable resources.</li></ol>',
                'BIO1060 [Human Biology]<br />
                NSM1300 [Earth Science]<br />
                BIO2200 [Humans and the Enivronment]'
            ],
            [
                17,
                'What are fossil fuels used for?',
                'Students will: <ol><li>Identify fossil fuels and their origins.</li>
                <li>Describe the ways that humans use fossil fuels.</li>
                <li>Explain why dependence on fossil fuels is problematic.</li></ol>',
                'BIO2200 [Humans and the Environment]<br />
                CHM2410 [Organic Chemistry]<br />
                NSM1300 [Earth Science]<br />
                NSM1150 [Science Foundations]'
            ],
            [
                17,
                'How do people conserve resources?',
                'Students will: <ol><li>Identify alternative fuels.</li>
                <li>Make predictions about the future if alternative fuels are not utilized.</li>
                <li>Identify ways that organizations and individuals can reduce their dependence on fossil fuels.</li></ol>',
                'BIO2200 [Humans and the Environment]<br />
                NSM1300 [Earth Science]<br />
                NSM1150 [Science Foundations]'
            ],
            [
                18,
                'What factors threaten to cause an imbalance in the Aurora ecosystem?',
                'Students will: <ol><li>Identify factors that could be detrimental to the health of the Auroras ecosystem.</li>
                <li>Categorize the factors based on immediacy or magnitude of risk.</li></ol>',
                'BIO 2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                18,
                'How are these factors controlled or balanced?',
                'Students will research local conservation efforts and evaluate their effectiveness',
                'BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                19,
                'How does biomimicry impact design?',
                'Students will design a shoe that is best suited for walking and gripping on ice using biomimicry (snowshoe effect, treads on snakes, wolverine fur on bottom of feet for traction, biological artifacts).',
                'BIO3530 [Evolution]<br />
                PHY2210 [Physics I]'
            ],
            [
                20,
                'How are members of a community dependant on each other, other organisms, and ecosystems?',
                'Students will: <ol><li>Describe the complex cooperative behaviors exhibited by ants and will outline the benefits to the ants of maintaining these behaviors.</li>
                <li>Compare the cooperative behaviors of ants to the cooperative behaviors of humans in manufacturing, agriculture and business.</li></ol>',
                'BIO1220 [Biology of Organisms]<br />
                BIO2200 [Humans and the Enivornment]<br />
                BIO3530 [Evolution]<br />
                BIO3510 [Ecology]'
            ],
            [
                20,
                'How are individuals and ecosystems dependant on communities?',
                'Students will explain the importance of maintaining the health of bacterial colonies in the human body.',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                21,
                'How can change in energy sourcing impact a local ecosystem?',
                'Students will identify ways that populations obtain energy and how populations would change due to where/how they obtain energy.',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                22,
                'How does a food web demonstrate the cycle of matter within both biotic and abiotic factors?',
                'Students will develop a model to describe the cycling of matter and flow of energy among living and nonliving parts of an ecosystem.',
                'BIO1220 [Biology of Organisms]<br />
                BIO3510 [Ecology]'
            ],
            [
                22,
                'How does an organism contribute to the cycle of matter within an ecosystem?',
                'Students will develop a model to describe how food is rearranged through chemical reactions forming new molecules that support growth and/or release energy as this matter moves through an organism.',
                'BIO1220 [Biology of Organisms]<br />
                BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                22,
                'Why is balance important in an ecosystem?',
                'Students will predict the impact of various imbalances to an ecosystem, checking their predictions against historical data similar to the scenarios of imbalances given.',
                'BIO1220 [Biology of Organisms]<br />
                BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                23,
                'How do human interactions with nature affect food webs?',
                'Students will build models of food webs and will demonstrate the imbalances that could incur due to human interactions.',
                'BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                23,
                'How do human interactions affect the cycles of energy and matter within an ecosystem?',
                'Students will: <ol><li>Use developed food webs and connect to cycles of energy and matter.</li>
                <li>Identify how the human impacted food web can alter cycles of energy and matter.</li></ol>',
                'BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]<br />
                NSM1300 [Earth Science]'
            ],
            [
                23,
                'How has the Aurora ecosystem changed over the years?',
                'Students will research the history of the aurora area and describe what factors brought about the changes that have taken place.',
                'BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                24,
                'How are aquarium, terrarium, and International Space Station the same?',
                'Students will: <ol><li>Draw an organism in an artificial environment.</li>
                <li>Explain how the environment is designed to supply what the organism needs.</li></ol>',
                'BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]<br />
                PHY2210 [Physics I]<br />
                NSM1300 [Earth Science]<br />
                NSM1200 [Astronomy]'
            ],
            [
                25,
                'What are the ecological and economic problems associated with invasive species?',
                'Students will: <ol><li>Describe the economic and ecological impact of several invasive species throughout the US.</li>
                <li>Describe the issues and conflicts surrounding invasive species control</li></ol>',
                'BIO3370 [Conservation Biology]<br />
                BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                25,
                'How can patterns of interactions be predicted across multiple ecosystems?',
                'Students will: <ol><li>Compare interactions in a variety of ecosystems and will identify similar patterns.</li>
                <li>Make predictions about the outcomes of case studies based on these predictions.</li></ol>',
                'BIO1220 [Biology of Cells]'
            ],
            [
                26,
                'What does a population need to adapt in an ecosystem?',
                'Students will explain the processes of mutation, migration (gene flow), genetic drift, and natural selection.',
                'BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]<br />
                BIO3530 [Evolution]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                26,
                'How do adaptations contribute to the survival of a species?',
                'Students will give examples of adaptations that have helped species survive significant changes in their ecosystems.',
                'BIO3400 [Genetics]<br />
                BIO3530 [Evolution]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                27,
                'How can nutrients be managed to better sustain an ecosystem?',
                'Students will develop a model that describes nutrient cycles in an ecosystem.',
                'BIO3510 [Ecology]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                27,
                'How does carbon availability relate to energy flow in an ecosystem?',
                'Students will: <ol><li>Identify how carbon availability impacts energy flow within the nutrient cycle.</li>
                <li>Explain how energy flow in an ecosystem connects with energy flow within the production of a product.</li></ol>',
                'BIO2200 [Humans and the Environment]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                27,
                'How can carbon concentrations be managed in the atmosphere?',
                'Students will: <ol><li>Calculate their families’ carbon footprints.</li>
                <li>Work with their families to create a plan to reduce their carbon footprint.</li></ol>',
                'BIO2200 [Humans and the Environment]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                28,
                'How can communities help off-set carbon emissions?',
                'Students will describe community programs that are intended to reduce carbon emissions.',
                'BIO2200 [Humans and the Environment]'
            ],
            [
                28,
                'What are the issues and conflicts surrounding the management of protected areas and populations?',
                'Students will: <ol><li>Describe several types of protected areas and explain how they differ.</li>
                <li>Describe how beliefs, interests, and values of affected parties can cause conflict over the management of protected areas.</li></ol>',
                'BIO3370 [Conservation Biology]'
            ],
            [
                29,
                'How have invasive species affected the Aurora ecosystem?',
                'Students will demonstrate understanding of the economic and ecological impacts of the Emerald Ash Borer.',
                'BIO3510 [Ecology]<br />
                BIO3260 [Compariative Botany]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                29,
                'What can be done locally to prevent the spread of and reduce damage from invasive species?',
                'Students will explain what the City of Aurora, other local municipalities, and organizations have been doing to control the Emerald Ash Borer.',
                'BIO3510 [Ecology]<br />
                BIO3260 [Comparative Botany]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                29,
                'Which plants are best suited for planting in the Aurora area?',
                'Students will identify native plants and will describe the adaptations that make them well suited to the Aurora ecosystem.',
                'BIO3510 [Ecology]<br />
                BIO3260 [Comparative Botany]<br />
                BIO3270 [Plant Physiology]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                29,
                'Are the planting practices of a local prairie effective in improving the restoration process?',
                'Students will evaluate the effectiveness of the planting procedures at Fermilab’s prairie.',
                'BIO3510 [Ecology]<br />
                BIO3260 [Comparative Botany]<br />
                BIO3270 [Plant Physiology]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                30,
                'What are the benefits of rooftop gardens?',
                'Students will design and construct models of rooftop gardens and will measure their effectiveness at reducing heat loss.',
                'BIO2220 [Humans and the Environment]'
            ],
            [
                31,
                'How is the diversity beneficial? (How does biological diversity help an ecosystem? How does talent diversity help a sports team? How does cultural diversity help a community? How does modularity help design? How does nutritional diversity improve health?)',
                'Students will: <ol><li>Evaluate competing design solutions in several companies.</li>
                <li>Construct questions for members of the supply chain expert team</li></ol>',
                'BIO1220 [Biology of Cells]<br />
                BIO2220 [Humans and the Environment]<br />
                BIO3510 [Ecology]<br />
                BIO3370 [Conservation Biology]'
            ],
            [
                31,
                'How do we evaluate the health of a complex ecosystem?',
                'Students will: <ol><li>Use biotic and abiotic measurements to determine the health of an ecosystem.</li>
                <li>Explain how population counts can be used to monitor ecosystem health.</li></ol>',
                ''
            ],
            [
                32,
                'How does technology help and hinder human adaptation?',
                'Students will: <ol><li>Describe how technology has required humans to develop relationships beyond those present in their local ecosystems.</li>
                <li>Identify how technology has enabled humans to survive outside of their natural habitats.</li>
                <li>Identify technological advances that have had significant impacts on human populations.</li>
                <li>Identify technological advances that need to be made in order to avert damage from environmental stresses.</li></ol>',
                'BIO3400 [Genetics]<br />
                BIO2280 [Microbiology]<br />
                BIO3600 [Molecular Biology]<br />
                CSC3610 [Advanced Computer Progrmming or
                CSC2200 [Web Application Development]'
            ],
            [
                32,
                'How can an ecological barrier lead to adaptations/speciation?',
                'Students will: <ol><li>Describe which ecological barriers can impact a population.</li>
                <li>Explain how ecological barriers contribute to adaptations and speciation.</li></ol>',
                'BIO1220 [Biology of Cells]<br />
                BIO3400 [Genetics]<br />
                BIO3530 [Evolution]'
            ],
            [
                33,
                'What costs are related to carbon management strategies?',
                'Students will: <ol><li>Compare the operating costs of two companies highlighting costs geared towards carbon management.</li>
                <li>Debate the most cost effective ways to reduce atmospheric carbon.</li></ol>',
                'BIO2200 [Humans and the Environment]'
            ],
            [
                33,
                'Why is balance important in an ecosystem? (carbon, nutrient)',
                'Students will: <ol><li>Identify ways that the carbon cycle impacts the nutrient cycle.</li>
                <li>Develop models demonstrating effects on nutrient cycle from high to low levels of carbon within the atmosphere.</li>
                <li>Provide evidence on appropriate range of carbon levels within atmosphere to sustain nutrient cycles.</li></ol>',
                'BIO3510 [Ecology]<br />
                BIO1220 [Biology of Cells]'
            ],
            [
                34,
                'How can we maintain the health of a complex ecosystem?',
                'Students will: <ol><li>Identify key steps needed to maintain the health of a complex ecosystem.</li>
                <li>Present evidence to support reasoning of chosen key steps.</li></ol>',
                'BIO2220 [Humans and the Environment]<br />
                BIO3510 [Ecology]<br />
                BIO3260 [Comparative Botany]<br />
                BIO3370 [Conservation Biology]'
            ],
            [
                34,
                'How do humans impact the carbon cycle?',
                'Students will explain how daily activities, cultural changes, and industry impact the carbon balance in the atmosphere.',
                'BIO2200 [Humans and the Environment]'
            ],
            [
                35,
                'How have local businesses, organizations, and individuals contributed to the preservation and sustainability of the Aurora area ecosystem?',
                'Students will create presentations highlighting the conservation efforts and sustainability practices of local entities.',
                'BIO2200 [Humans and the Environment]<br />
                BIO3510 [Ecology]'
            ],
            [
                35,
                'How are symbiotic relationships utilized in Aurora’s ecosystem?',
                'Students will: <ol><li>Identify mutualistic relationships found amongst Aurora’s flora and fauna.</li>
                <li>Identify mutualistic relationships amongst Aurora’s businesses.</li></ol>',
                'BIO2280 [Microbiology]<br />
                BIO3510 [Ecology]'
            ],
            [
                36,
                'What are the risks and benefits of bioremediation?',
                'Students will identify ways that microorganisms can be used to clean up an oil spill and the impact that the introduced microorganisms have on the area ecosystems.',
                'BIO2280 [Microbiology]<br />
                BIO2220 [Humans and the Environment]'
            ],
            [
                36,
                'What are the risks and benefits of genetic engineering?',
                'Students will: <ol><li>Identify ways that scientists are using plants to absorb extra carbon from the air and the impact that the larger root system has underground.</li>
                <li>Identify ways scientists are using plants to absorb pollutants from groundwater and the impact that the release of the toxins through natural plant processes have on the atmosphere.</li></ol>',
                'BIO3400 [Genetics]<br />
                BIO3600 [Molecular Biology]'
            ],
            [
                37,
                'What is motion and where is it found?  What causes rotation?',
                'Students will: <ol><li>Identify examples of spinning motion in the real world and the forces that make them rotate.</li>
                <li>Create vocabulary cards that include a student friendly definition and picture.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]<br />
                BIO1060 [Human Biology]'
            ],
            [
                37,
                'How can we describe and measure motion?',
                'Students will: <ol><li>Describe circular motion by experimenting with tops of different mass and shape  (including length of shaft, size of spool)</li>
                <li>Collect and record data in a table.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                38,
                'How do balanced and unbalanced forces affect the motion of a top/zoomer/spinner?  How and why does the top/zoomer/spinner stop moving?',
                'Students will: <ol><li>create a bar graph to represent the length of time different (mass, dimensions) tops spin on different surfaces and draw conclusions based on the data.</li>
                <li>Write a summary of their observations and communicate the results with the class.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                38,
                'How can we predict changes in the top/zoomer/spinner?',
                'Students will: <ol><li>Predict outcomes of length of spinning time based on different surfaces, length of shaft, and spool size</li>
                <li>Compare and contrast these changes in summary and graph form</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                NSM1150 [Science Foundations]'
            ],
            [
                39,
                'What material properties and physical shape affect motion?',
                'Students will: <ol><li>Create two tops based on predictions and graphed outcomes using two different variables.</li>
                <li>Predict and graph results.</li>
                <li>Compare and contrast predictions versus actual results in written format.</li></ol>',
                'PHY2210 [Physics I]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                39,
                'Why are certain materials selected over other materials in manufacturing?  What’s the design criterion?',
                'Students will: <ol><li>Compare and contrast results from all class made tops and create a graph explaining results.</li>
                <li>Summarize in short answer format which materials and design were most successful and why.</li></ol>',
                'PHY2210 [Physics I]<br />
                CHM1310 [Gen Chem I]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                40,
                'How has our understanding of motion led us to technological advancements?  What makes some toys work better than others?',
                'Students will: <ol><li>Compare and contrast their tops with store bought tops such as beyblades.</li>
                <li>Explain how the design choice affects the speed and length of time these tops/toys spin.</li>
                <li>Graph results and summarize which tops worked best and why.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                40,
                'What other forces can cause objects to move?  Magnetic levitation:  magnet powered spinning top.  (Exploration of magnetism)',
                'Students will: <ol><li>Observe magnet powered spinning top and levitating top.</li>
                <li>Discuss other real world applications of magnet powered devices</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                41,
                'What is magnetism and how does it cause things to move?',
                'Students will: <ol><li>Create a diagram that shows the magnetic field of two magnets, and label the poles.</li>
                <li>Describe in writing, how magnets can attract or repel one another.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2220 [Physics II]'
            ],
            [
                41,
                'Where can we find magnets, electromagnets, and ferromagnetic materials in everyday objects?',
                'Students will: <ol><li>Identify examples of magnets at work in our everyday lives and explain how this magnetic force produces motion.</li>
                <li>Collect and analyze data on electromagnetic crane design.</li>
                <li>Use content area vocabulary to identify the components at work in the electromagnetic crane.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2220 [Physics II]'
            ],
            [
                42,
                'How do magnets and electromagnets cause things to start and stop moving?',
                'Students will: <ol><li>Identify and list the components of reverse engineering object (speakers, ear buds)</li>
                <li>Explain how magnetic force is converted into sound waves.</li>
                <li>Measure/record/graph the frequency and amplitude of sound waves.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                42,
                'What are the misconceptions and negative effects of magnets and electromagnets?',
                'Students will: <ol><li>Explain that the size of a magnet does not necessarily relate to the strength of the magnet.</li>
                <li>Compare and contrast the difference between magnetic force and static electricity (which can act like a magnet).</li>
                <li>Identify ways in which magnets can harm electronic devices.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                NSM1150 [Science Foundations]'
            ],
            [
                43,
                'What material properties affect magnetic force and why are certain materials selected over other materials in manufacturing products that use magnets and electromagnets?',
                'Students will: <ol><li>Identify failures and successes during the design process.</li>
                <li>Present justification for final design using data groups collected and analyzed.</li></ol>',
                'PHY2210 [Physics I]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                44,
                'How have magnets and electromagnets historically been used to transfer information?',
                'Students will: <ol><li>Describe the role of the magnet in transmitting information on selected historical device(s).</li>
                <li>Identify how magnets and electromagnets are currently being utilized in today’s industries.</li></ol>',
                'PHY2220 [Physics II]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                44,
                'How has our understanding of motion led us to technological advancements?',
                'Students will: <ol><li>Explain the technological evolution of a guitar pickup and how it works.</li>
                <li>Diagram how vibrations are transferred from a guitar string, through the electronic components of a guitar, to the amplifier, and ultimately to sound waves.</li>
                <li>Create a prototype for an instrument pickup.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                AU Faculty Research'
            ],
            [
                45,
                'Where are simple machines found and how do we describe the force and motion behind them?',
                'Students will: <ol><li>Identify six basic simple machines and demonstrate the force and motion to use them.</li>
                <li>Identify examples of simple machines at work in our everyday lives.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]<br />
                BIO1060 [Human Biology]'
            ],
            [
                45,
                'Where are complex machines found and how do we describe the force and motion involved? (bikes, wheelchairs, cars)',
                'Students will: <ol><li>Compare and contrast predictions with outcomes by graphing results.</li>
                <li>Describe how simple machines can be combined to make complex machines.</li>
                <li>Describe how each machine can make work easier.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                46,
                'How do forces influence motion? How do things stop moving? (acceleration, deceleration, anti-gravity, friction, and inertia)',
                'Students will: <ol><li>Identify frame of reference for a given motion.</li>
                <li>Explain the relationship among force, mass, acceleration, and the interaction of forces between two objects.</li>
                <li>Analyze the horizontal and vertical motion of a projectile.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                46,
                'What are the misconceptions and negative effects of forces and motion?  What are the misconceptions of forces and motion within simple and complex machines? (mechanical vs. directional advantages, classes of levers-fulcrum/load, force needed vs. distance needed?)',
                'Students will: <ol><li>Explain ratio of force output to force input.</li>
                <li>Categorize simple machines to understand intended use.</li>
                <li>Classify the three types of levers.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                NSM1150 [Science Foundations]'
            ],
            [
                47,
                'What design considerations (historically) affect motion in complex machines? (shape, thickness, tire design, bikes, cars, motors, electromagnets, lubricants, temperature, angles)',
                'Students will: <ol><li>Demonstrate awareness of multiple factors, variables, and outcomes.</li>
                <li>Identify the variables that change the effects of a long-range force (gravity, electric, magnetic).</li>
                <li>Explain how history impacts design.</li></ol>',
                'PHY2210 [Physics I]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                47,
                'Why are certain materials selected over other materials in manufacturing complex machines? (weight, viscosity, texture, weights of metals, climate consideration, availability of materials, paint selection and how it affects performance)',
                'Students will: <ol><li>Identify and analyze physical principles of unworkable devices. <a href="http://www.lhup.edu/~dsimanek/museum/unwork.htm">http://www.lhup.edu/~dsimanek/museum/unwork.htm</a></li></ol>',
                'PHY2210 [Physics I]<br />
                CHM1310 [Gen Chem I]<br />
                BIO/CHM 3650 [Inst. Methods of Analysis]'
            ],
            [
                48,
                'How can our understanding of complex machines affect design choices of our model cars?',
                'Students will: <ol><li>Compare and contrast current technologies to previous technologies in order to aid design choice.</li>
                <li>Design and build a model car.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]'
            ],
            [
                48,
                'Which energy source will be most efficient for our model car prototypes? (motorized prototypes in conjunction with the energy unit)',
                'Students will: <ol><li>Analyze efficiency in complex machines through iterative design.</li>
                <li>Compare and contrast one student’s model car with another student’s model car, enabling multiple opportunities for students to revisit ideas and critically reflect on their implication.</li>
                <li>Apply what they learned about energy in order to redesign their model car using a different energy source.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                CHM1310 [Gen Chem I]<br />
                CHM1320 [Gen Chem II]'
            ],
            [
                49,
                'What is motion and where is it found in games?',
                'Students will: <ol><li>Compare and contrast the motion of a ball (or object) in different types of games.</li>
                <li>Identify the causes of unbalanced and balanced forces that affect the motion of a ball (object) in different game contexts. Identify the causes of unbalanced and balanced forces that affect
                the motion of a ball (object) in different game contexts.</li></ol>',
                'NSM2500 [Integrated Math and Science for Educators]<br />
                NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                49,
                'How do we describe motion in games?',
                'Students will: <ol><li>Apply relevant vocabulary to describe the forces that affect the motion of an object.</li>
                <li>Collect measurement data on the motion of objects (speed, velocity, distance, acceleration) using appropriate tools.</li>
                <li>Explain the role of gravity in affecting the motion of objects.</li>
                <li>Use Newton’s Laws to predict or prove the path an object will take.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                50,
                'How do forces influence motion?  How do things start and stop moving?',
                'Students will: <ol><li>Graph the changing motion of an object as it is affected by balanced and unbalanced forces.</li>
                <li>Analyze and interpret the data and communicate their findings to their peers.</li>
                <li>Develop a model to show how the sum of the forces on an object and the mass of an object change an object’s motion.</li></ol>',
                'NSM2500 [Integrated Math and Science for Educators]<br />
                NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                50,
                'What are the misconceptions and negative effects of forces and motion?',
                'Students will: <ol><li>Research carnival and arcade games that are designed so that the players chances of winning are extremely low to impossible.</li>
                <li>Apply research data and their knowledge of force and motion to design a game that is unfavorable for the odds for the player.</li></ol>',
                'NSM2500 [Integrated Math and Science for Educators]<br />
                NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                51,
                'What material properties affect motion and why are certain materials selected over other materials in manufacturing?',
                'Students will: <ol><li>Evaluate the selection of certain materials for specific selection of uniform, equipment, and playing surfaces.</li>
                <li>Run test analysis on safety equipment, example - egg in a helmet.</li></ol>',
                'PHY2210 [Physics I]<br />
                NSM2500 [Integrated Math and Science for Educators]'
            ],
            [
                51,
                'How did games evolve based on available materials?',
                'Students will: <ol><li>Research and report the evolution of a particular sport or game specifically in the area of economic constraints and material availability.</li>
                <li>Recreate components of an existing game utilizing different materials and present how these material changes will affect force and motion.</li></ol>',
                'PHY2210 [Physics I]<br />
                CHM1310 [Gen Chem I]'
            ],
            [
                52,
                'How do we use energy conservation and material properties to produce predicted motion?',
                'Students will: <ol><li>Apply all steps of the design process to create an original Rube Goldberg machine.</li>
                <li>Present and explain the forces and motion at each step of their design. 3) Successfully demonstrate the functionality of their design.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                NSM2500 [Integrated Math and Science for Educators]<br />
                CSC4990 [Computer Science Capstone]'
            ],
            [
                53,
                'What is motion and where is it found in transportation, motors, and complex machines?',
                'Students will: <ol><li>Identify the steps in the manufacturing process.</li>
                <li>Identify industries in which manufacturing occurs.</li>
                <li>Identify how different transportation systems move through the identification and classification of forces.</li>
                <li>Use technology to acquire measurement data on force and pressure.</li>
                <li>Identify the components of a motor and which forces are involved in motor motion</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]<br />
                PHY2220 [Physics II]'
            ],
            [
                53,
                'How do we describe how transportation, motors, and complex machines move?',
                'Students will: <ol><li>use appropriate communication strategies for a given situation,</li>
                <li>use appropriate communication strategies for a given situation,</li>
                <li>Provide examples of cause and effect, connected outcomes.</li>
                <li>Apply Newton’s laws to sum forces and to predict or prove the path an object takes.</li>
                <li>Use technology to acquire measurement data (e.g. distance, time, speed, acceleration).</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]<br />
                CHM1310 [Gen Chem I]<br />
                CHM1320 [Gen Chem II]'
            ],
            [
                54,
                'How do forces influence motion? How do transportation, motors, and complex machines start and stop moving?',
                'Students will: <ol><li>Understand what forces influence or interrupt the supply chain.</li>
                <li>Formulate a plan considering the variables involved that can be tested.</li>
                <li>Describe the motion or path of an object from identified summed forces</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                54,
                'What are the misconceptions and negative effects of forces and motion?',
                'Students will: <ol><li>Calculate the percent of error involved in forecasting the demand/need for a product/service, use process protocols in the production of solutions to problems related to transportation.</li>
                <li>Describe the pros and cons of friction and explain its effects.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                NSM1150 [Science Foundations]'
            ],
            [
                55,
                'What material properties affect motion?',
                'Students will: <ol><li>Demonstrate awareness of multiple factors, variables, and outcomes.</li>
                <li>Identify the variables that change the effects of a long-range force (gravity, electric, magnetic).</li></ol>',
                'PHY2210 [Physics I]<br />
                NSM1300 [Earth Science]'
            ],
            [
                55,
                'Why are certain materials selected over other materials in manufacturing related to transportation?',
                'Students will: <ol><li>Identify current methods of transporting necessary materials.</li>
                <li>Identify the main steps in the manufacturing process through real world experiences.</li>
                <li>Explain why elements/compounds are used in certain materials to determine quality, strength, and safety.</li></ol>',
                'PHY2210 [Physics I]<br />
                CHM1310 [Gen Chem I]<br />
                BIO/CHM 3650 [Inst. Methods of Analysis]'
            ],
            [
                56,
                'How has our understanding of the transportation of nutrients in plants and animals-circulatory system led us to technological advancements?',
                'Students will: <ol><li>Identify current technologies and explain technology applications.</li>
                <li>Compare components of plant physiology and vascular system to systems functionality, cohesion hypothesis, and transpiration pull.</li>
                <li>Transfer knowledge of these systems to a basic robotics model.</li></ol>',
                'PHY2210 [Physics I]<br />
                BIO2260 [Anatomy and Physiology]<br />
                BIO3250 [Vertebrate Biology]<br />
                BIO3270 [Plant Physiology]'
            ],
            [
                56,
                'How does the design of complex machines affect efficiency?',
                'Students will: <ol><li>Analyze efficiency in complex machines through iterative design.</li>
                <li>Graph results using cyclical inquiry, enabling multiple opportunities for students to revisit ideas and critically reflect on their implication.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                BIO3050 [Pathophysiology]<br />
                BIO3530 [Evolution]'
            ],
            [
                56,
                'How do we harness energy for future transportation systems?',
                'Students will: <ol><li>Demonstrate an understanding of energy resources.</li>
                <li>Describe the change in type of energy during the process studied</li>
                <li>Iteratively design and test a transport system that uses contact and long-range forces</li></ol>',
                'PHY2220 [Physics II]<br />
                NSM1300 [Earth Science]'
            ],
            [
                57,
                'What is motion and where is it found?',
                'Students will: <ol><li>Compare and contrast industries in which manufacturing occurs specifically in regards to orthotics and robotics</li>
                <li>Recognize the application of STEM skills in these fields</li>
                <li>Describe their understandings, in writing, of forces and motion based on the field experiences (Scheck/Siress, CAT, Robert Crown).</li>
                <li>Identify and describe the origin of the forces that allow humans to walk/run, navigate their tablet devices, or play video games.</li>
                <li>Compare and contrast robot motion to human motion (in the context of simple vs. complex machines).</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]<br />
                BIO1060 [Biology of Cells]'
            ],
            [
                57,
                'How do we quantitatively and qualitatively describe motion?',
                'Students will: <ol><li>work collaboratively with peers to design a group presentation describing how things move with respect to their field experiences.</li>
                <li>Describe how the musculoskeletal system of an organism helps in ordinary human movements</li>
                <li>Describe the involvement of forces in the structure-function relationship.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]<br />
                CHM1310 [Gen Chem I]'
            ],
            [
                58,
                'How do forces influence motion? How do things stop moving?',
                'Students will: <ol><li>Observe and learn about the normal motion of robotic arms/orthotic devices and compare those motions to that present in the human body.</li>
                <li>Describe how forces interact to affect the motion of a complex machine and human skeletal system.</li>
                <li>Describe how balanced and unbalanced forces affect human motion.</li></ol>',
                'NSM1150 [Science Foundations]<br />
                PHY2210 [Physics I]'
            ],
            [
                58,
                'What are the misconceptions and negative effects of forces and motion? (Can abnormal motion caused by poor habits or congenital conditions, be corrected to restore motion?)',
                'Students will: <ol><li>plan an investigation to explore how the motion of a machine is affected when a single component is damaged.</li>
                <li>Describe how forces interact to inhibit motion and how forces can interact to have an undesirable affect on the normal motion of complex machines and the human body.</li>
                <li>Describe how friction can be helpful and inhibitory when involved in motion.</li></ol>',
                'PHY2210 [Physics I]<br />
                BIO3400 [Genetics]<br />
                BIO3450 [Advanced Cell Biology]'
            ],
            [
                59,
                'What material properties affect motion?',
                'Students will: <ol><li>compare the properties of different materials and examine how these materials influence the motion of [orthotics].</li>
                <li>Identify different classes of materials involved in external/internal motion devices.</li>
                <li>Describe the properties of different materials that relate to its ability to produce/receive a force to cause motion. (strength, electrical, etc.) (Point of Convergence with Energy Group: Describe how a DC motor works)</li></ol>',
                'PHY2210 [Physics I]<br />
                CHM1310 [Gen Chem I]<br />
                BIO/CHM 3650 [Inst. Methods of Analysis]'
            ],
            [
                59,
                'Why are certain materials selected over other materials in manufacturing?',
                'Students will: <ol><li>Conduct a failure analysis to reexamine the design criteria for a product (reverse engineering).</li>
                <li>Participate in a design challenge (building [x] out of [a, b, c]) and be given different materials to build with.</li>
                <li>Investigate as a class why each of their designs are successful/unsuccessful based on the material perspective.</li>
                <li>Use 3D printers to design, build, and test replacement tissue to restored function of the body (bones, muscles) through manufactured/engineered materials.</li>
                <li>Explore how devices interface with the human body (i.e. scoliosis), selection of external device material makes a big difference with structure-function (e.g. make a brace out of metal; it works, but it uncomfortable.).</li></ol>',
                'PHY2210 [Physics I]<br />
                CHM1310 [Gen Chem I]<br />
                BIO/CHM 3650 [Inst. Methods of Analysis]'
            ],
            [
                60,
                'How has our understanding of motion led us to medical/technological advancements?',
                'Students will: <ol><li>Through research, students will identify and share examples of various medical and technological advancements that were directly influenced by our understanding of motion (i.e. medical marvels).</li>
                <li>Describe how motion is enhanced by artificial devices (orthotics, prosthetics, robotic devices, etc.).</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]'
            ],
            [
                60,
                'How do machines enhance or restore motion/function?',
                'Students will: <ol><li>Work collaboratively to create an “animal marvel” product (i.e. Dolphin Tail movie) or something of the like. This culminating project that emphasizes all learned on forces and motion could take a different angle from year to year, exploring how humans can improve human, animal, and other species movement using aided and even robotic devices.</li></ol>',
                'PHY2210 [Physics I]<br />
                PHY2220 [Physics II]<br />
                CSC3610 [Advanced Computer Programming]<br />
                CSC4990 [Computer Science Capstone]<br />
                BIO3050 [Pathophysiology]'
            ],
            [
                61,
                'How do Natural Factors impact the Earth?',
                'Students will: <ol><li>Explain how waves are formed</li>
                <li>Describe the effects of Tsunamis.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                61,
                'What steps can be taken to reduce the effects of Natural Hazards?',
                'Students will: <ol><li>Describe risk-management strategies during Natural Disasters</li>
                <li>Create a structure that is earthquake proof.</li></ol>
                <p>Design Project:  Shake, Rattle and Roll - Create a structure that is earthquake proof. <a href="http://www.teachengineering.org/view_activity.php?url=collection/cub_/activities/cub_natdis/cub_natdis_lesson03_activity1.xml">http://www.teachengineering.org/view_activity.php?url=collection/cub_/activities/cub_natdis/cub_natdis_lesson03_activity1.xml</a></p>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                62,
                'What is soil and what is its composition?',
                'Students will: <ol><li>Describe different types of soils</li>
                <li>Research and create a visual presentation of different soil types.</li>
                <li>Take soil samples from around the school and identify the soil type.</li>
                <li>Observe and study an Earthworm City</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                63,
                'What are the different planets in our solar system?',
                'Students will: <ol><li>Identify the planets in our solar system.</li>
                <li>Create a physical or multi-media model of our solar system.</li></ol>',
                'NSM1300 (Earth and Space Science)'
            ],
            [
                63,
                'What is the difference between a planet and a moon?',
                'Students will: <ol><li>Describe how a moon is different from a planet.</li>
                <li>Identify the number of moons for each planet.</li>
                <li>Create their own moon community and describe the needs of humans on their planet.</li></ol>',
                'NSM1300 (Earth and Space Science)'
            ],
            [
                64,
                'What is a rock? (rock classification)',
                'Students will: <ol><li>Describe the three major classifications of rocks (sedimentary, igneous, metamorphic).</li>
                <li>Explain how engineers use rocks, soils and minerals for constructing and manufacturing.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                64,
                'What are fossils? (fossil classification-casts, molds, petrification, carbon, amber)',
                'Students will: <ol><li>Explain what a fossil is and how it forms.</li>
                <li>Design a model of a fossil (fossil classification-casts, molds, petrification, carbon, amber.</li>
                <li>Explore what tools are used to retrieve fossils</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                64,
                'How can scientists use fossils to teach about earth\'s history?',
                'Students will: <ol><li>Explain how a fossil buried in our earth can indicate the relative age of earth (Law of Superposition).</li>
                <li>Build a model to demonstrate the Law of Superposition.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                65,
                'What are weathering, erosion, and deposition?',
                'Students will: <ol><li>Explain the process of weathering, erosion, and deposition via modeling.</li>
                <li>Explore what technology is available to study earth mechanical systems</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                66,
                'How did the continents form? (Pangaea)',
                'Students will: <ol><li>Explain the super continent Pangaea.</li>
                <li>Determine what tools are used to determine continental shift?</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                66,
                'How does the movement of continents establish landform patterns?',
                'Students will: <ol><li>Identify the plate boundaries by visible landforms on maps.</li>
                <li>Create a model that demonstrates the plate boundary effects (mountains, volcanoes, deep ocean trench).</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                66,
                'How can maps help locate different land and water features on earth?',
                'Students will: <ol><li>Identify land and water features using topographical map coordinates.</li>
                <li>Determine the mapping tools that are available to cartographers today</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                67,
                'Earth is part of the solar system, which is made up of many different objects. (Planets, Stars, Meteors)',
                'Students will: <ol><li>Explain the objects that are part of the solar system?  (Planets, Stars, Meteors).</li>
                <li>Build a model that includes all of the identified objects.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                67,
                'What are stars and galaxies and how do we observe them in the solar system?',
                'Students will: <ol><li>Explain and describe what a star is.</li>
                <li>Explain and describe what a Galaxy is.</li>
                <li>Determine what tools scientists use to identify objects in the solar system (Telescopes, Satellites).</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                68,
                'How do the spheres interact with one another?',
                'Students will: <ol><li>Investigate and report how the four spheres caused an event in daily life.</li>
                <li>Graph the effects of the spheres on the Earth’s changing systems.</li>
                <li>Analyze evidence of materials and energy moving among spheres.</li>
                <li>Debate if a rigid or flexible building design is most resistant to earthquakes.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                68,
                'What systems are in each sphere?',
                'Students will: <ol><li>Create a multimedia  presentation to demonstrate what systems are in each sphere.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                68,
                'What would happen if the hydrological system stopped working?',
                'Students will: <ol><li>Analyze the interactions of the hydrological system and interpret data.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                69,
                'What are the 3 basic types of rocks and how can you identify them?',
                'Students will: <ol><li>Describe characteristics used to identify the three types of rocks.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                69,
                'What are the different layers of rock found in the earth?',
                'Students will: <ol><li>Describe the environments in which each layer of rock is found.</li>
                <li>Explain how diamonds are made.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                69,
                'What are the Laws of Superposition?',
                'Students will: <ol><li>Understand the concept of 3D models that describe the earth.</li>
                <li>Use data to deduce relative ages of simulated rock layers.</li>
                <li>Make cross-section drawings to describe the Laws of Superposition.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                69,
                'What is Dr. Williams Smith’s Law of Fossil succession?',
                'Students will: <ol><li>Describe and explain the Law of Fossil Succession.</li>
                <li>Create a model showing an example of the layers of fossils from oldest to most recent.</li>
                <li>Debate why fossil dating is important and how it is used to determine that the Earth has changed over time.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                70,
                'What are the causes of erosion on Earth’s surface?',
                'Students will: <ol><li>Investigate fluid flow of water, air and ice on the earth’s surface.</li>
                <li>Compare how rain shapes the earth using dry and wet soil.</li>
                <li>Compare/Contrast different slopes in an erosion investigation.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                70,
                'What are Earth’s major physical features?',
                'Students will: <ol><li>Identify the major physical features of Earth.</li>
                <li>Locate and create a map of where they are located.</li>
                <li>Describe how industry and business utilize Earth’s major physical features.  (mining, energy, transportation, and building design).</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                71,
                'What Is the Universe?',
                'Students will: <ol><li>Research and identify in written form, the key elements of the universe</li>
                <li>Create a multi-media presentation that identifies the elements of the universe - including stars, galaxies, constellations, and solar systems</li>
                <li>Conclude that the universe is comprised of mostly gases (hydrogen and helium) and the nuclear fusion causes the birth and death of stars.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                71,
                'What is a Star and how do we use technology to learn more about them?',
                'Students will: <ol><li>Identify that the sun is only one of many stars that galaxies form around</li>
                <li>Analyze star charts that show visible constellations according to time of year.</li>
                <li>Create a model explaining the birth and death of a star.</li>
                <li>Research star exploration using various modalities of research (such as NASA, Adler Planetarium, Fermi-Lab)</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                71,
                'Why do some stars seem brighter than others?',
                'Students will: <ol><li>Explain that stars vary in brightness according to their distance from Earth.</li>
                <li>Conduct research to locate and identify stars closest to Earth.</li>
                <li>Identify constellations that are identifiable for the time of year.</li>
                <li>Create a multimedia presentation to demonstrate their understanding of the properties of stars.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                72,
                'What are the phases of the moon?',
                'Students will: <ol><li>Explain why the moon looks different in the night sky throughout the month.</li>
                <li>Define an elliptical orbit.</li>
                <li>Create a visual model to show the different observable patterns of the moon.</li>
                <li>Discover how earlier people used the moon phases to predict cycles of lunar events and agricultural production</li>
                <li>Create an argument supported by research that proves or disproves the claim that all moon phases occur at the same time in all parts of the world (if we have a full moon in Illinois, does China see the same full moon?)</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                72,
                'How does the Earth’s orbit around the Sun affect the patterns we see in the sky during the day?',
                'Students will: <ol><li>Describe, through observation, the changes in the position of the sun throughout the day.</li>
                <li>Create a model that explains what happens during a solar eclipse.</li>
                <li>Discover early civilizations used sun dials to indicate time and seasons</li>
                <li>Students will explain why the amount of daylight in the winter is less than the amount in the summer?</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                72,
                'What causes the changes in the length and direction of shadows?',
                'Students will: <ol><li>Explain what shadows are.</li>
                <li>Observe shadow placement over time and analyze their findings.</li>
                <li>Create a model that shows how shadow length and placement changes during the day.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                73,
                'How is the age of the Earth defined? (What technology and tools are used today to help us determine the age of Earth? What costs are associated with manufacturing the tools used in determining absolute age of the Earth?)',
                'Students will: <ol><li>Explain the process of carbon dating, radioactive decay, and fossils as descriptors for determining the age of the Earth.</li>
                <li>Describe and explain what technology is available to assist with carbon dating and half-life.</li>
                <li>Demonstrate a half-life by using a manipulative in a lab experience.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                73,
                'How can we determine a rock’s origin? (Where did the rock come from? If the Earth is 4.5 billion years old and we have rock that is 5.0 billion years old where did the rock come from? What technology and tools are used today to help us determine a rock’s origin and what is the cost associated with those tools?)',
                'Students will: <ol><li>Formulate a hypothesis of the rock’s origin, through a deductive process. (Such as space. i.e. meteorites).</li>
                <li>Analyze meteorites to find why a magnet is attracted to a meteorite (Lab Experience)</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                74,
                'What are the Earth\'s Spheres and how do they interact with each other? (Atmosphere, Hydrosphere, Geosphere, Biosphere) ',
                'Students will: <ol><li>Identify and describe each of Earth\'s spheres and explain how each interact with each other.</li>
                <li>Construct a model to describe each sphere.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                74,
                'What life forms depend on all four of Earths spheres? What STEM based careers are available for each of Earth’s spheres?',
                'Students will: <ol><li>Build a model that demonstrates the dependency for Earth\'s four spheres. Explain/illustrate the interconnection of each sphere.</li>
                <li>Research a STEM based career related to one of Earth’s spheres.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                75,
                'What are Earth’s energy sources and how are they measured?',
                'Students will: <ol><li>Define and explain each of Earth’s Energy sources (Solar Energy and Earth\'s Interior-radioactivity),</li>
                <li>Determine how energy is measured.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                75,
                'How does Earth\'s interior provide energy to our Earth? (Conduction and convection currents, Geothermal-Energy).',
                'Students will: <ol><li>Explain how heat produced in Earth’s interior is transferred to the surface by conduction and convection currents.</li>
                <li>Explain how left over heat from rock formations provides heat which may result in radioactive half-life degradation.</li>
                <li>Design a geothermal energy system to replace current fossil fuel burning power plants. (Pros and Cons) for such a system (cost/manufacturing/infrastructure/environmental).</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                75,
                'What is happening inside the Sun and what is nuclear fission? (Energy, Heat, Solar Radiation, Gases).',
                'Students will: <ol><li>Create a model of the sun that identifies, describes and explains the anatomy of the Sun.</li>
                <li>Define and explain nuclear fission.</li>
                <li>Propose the possibilities for real-world uses of nuclear fission with the technology available.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                75,
                'What happens with the Sun\'s energy when it reaches Earth’s atmosphere?',
                'Students will: <ol><li>Explain what happens to the sun’s energy when it reaches the Earth\'s atmosphere.</li>
                <li>Create a student environmentalist panel to research, discuss and describe both the positive and negative effects of the Greenhouse Effect on our Earth\'s planet.</li>
                <li>Infer the Greenhouse Effect on other planets.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                76,
                'How have varying geological conditions and natural hazards affected our Earth over time?',
                'Students will: <ol><li>Debate various theories on cataclysmic events that have shaped our geological history.</li>
                <li>Infer what life on Earth would be like if both dinosaurs and humans coexisted by developing a model showing both life forms.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                76,
                'What geologic technologies are available today that allow us to study Earth’s past? How could these technologies be developed to be more effective in the future?',
                'Students will: <ol><li>Summarize how technology such as Sonar, sound deflection, seismic measurement tools, and satellite imagery are being used to explore Earth’s past.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                77,
                'What makes up the Solar System? (Sun, moons, planets, galaxy, satellites, asteroids, comets). What technology is available to study these objects? (Moon rovers, satellites, telescopes, space stations)',
                'Students will: <ol><li>Describe and explain the objects in our solar system.</li>
                <li>Analyze space technology that is available for space exploration today.</li>
                <li>Determine the cost of space exploration.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                PHY 2210 (Physics I)'
            ],
            [
                77,
                'Why is gravity important in our solar system?',
                'Students will: <ol><li>Identify what determines the strength of the force of gravity between two objects</li>
                <li>Develop and use a model to describe the role of gravity in the motions within galaxies and the solar system.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                PHY 2210 (Physics I)'
            ],
            [
                77,
                'How are gravity and weight related? How does gravity affect your mass and weight?',
                'Students will: <ol><li>Calculate their own mass and weight on each of the planets.</li>
                <li>Generalize why weight changes but mass stays the same.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                PHY 2210 (Physics I)'
            ],
            [
                78,
                'What role do geoscience processes play in the reshaping of Earth\'s surface? How do the these processes affect construction and design in our everyday lives?',
                'Students will: <ol><li>Construct an explanation for how geoscience processes have changed Earth’s surface at varying time and spatial scales.</li>
                <li>Relate the geoscience processes</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                78,
                'What is the rock cycle; what criterion is used to classify and characterize rocks and how are Earth’s Rocks used in the world in which we live?',
                'Students will: <ol><li>Analyze why scientists study sedimentary rocks to learn about prehistoric life.</li>
                <li>Explain the three major types of rocks and how they form.</li>
                <li>Explain the Law of Superposition. Identify different types of rocks- Given samples.</li>
                <li>Analyze rocks as natural material and show how rocks are used based on their characteristics.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                78,
                'What are minerals, how do they form, how are minerals classified and what can minerals be used for?',
                'Students will: <ol><li>Describe the basic structure of minerals and identify different minerals by using their physical properties.</li>
                <li>Demonstrate the properties of minerals by performing a series of tests (hardness, luster, magnetic, color, etc).</li>
                <li>Identify characteristics of minerals and provide example for their uses in manufacturing.</li></ol>',
                'NSM 1300 (Earth and Space Science)<br />
                BIO 3510 (Ecology)<br />
                BIO 2200 (Humans and the Environment)'
            ],
            [
                79,
                'How can system models describe the effects of gravity in our solar system?',
                'Students will: <ol><li>Explain and demonstrate gravity.</li>
                <li>Explain the forces that hold planets in our solar system (gravity and inertia).</li>
                <li>Demonstrate inertia (rockets, satellites, and space stations).</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                79,
                'How can scale and proportion be used to determine size and distance of spatial objects?',
                'Students will: <ol><li>Describe the main characteristics of planets and how they form.</li>
                <li>Compare and contrast the inner and outer planets.</li>
                <li>Explain current technologies used for space exploration of the planets.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                79,
                'How has the interdependence of Science, Engineering and Technology in the area of space exploration led to new Earth-based technologies?',
                'Students will: <ol><li>Describe how the tilt of Earth affects the seasons and explain solstices and equinox.</li>
                <li>Explain why a day is 24 hrs on Earth.</li>
                <li>Explain the time length of a year of a planet.</li>
                <li>Explain how tools such as satellite technology are used.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                80,
                'Three Partners Working Together: How do the Earth, the moon and the sun affect each other? (Solar and lunar eclipses) and what technology is utilized for observing eclipses? ',
                'Students will: <ol><li>Explain why eclipses occur.</li>
                <li>Compare and Contrast solar and lunar eclipses.</li>
                <li>Explain how the moon and the sun affect Earth\'s oceans.</li>
                <li>Explain how technological advances in science such as tool and equipment allow us to observe space better today;</li>
                <li>Compare and Contrast both past and present technology of space observation.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                80,
                'Why Not Always a Full Moon? Why does our Earth\'s moon change appearance? (Phases of the moon, orbit, rotation: Technology)',
                'Students will: <ol><li>Explain what causes the phases of the moon.</li>
                <li>Identify technology used for observation of the moon.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                80,
                'What are some milestones of space exploration?',
                'Students will: <ol><li>Research the current projects of space exploration. (Voyager, Mars exploration)</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                81,
                'What is the Theory of Continental Drift? (Pangaea)',
                'Students will: <ol><li>What was the evidence used to prove the theory?</li>
                <li>Explain the Theory of Plate Tectonics and relate to current events.(California),</li>
                <li>Explain Pangaea,</li>
                <li>Identify and describe the continental oceanic plates</li>
                <li>Compare and Contrast both past and present theories.(Wegener).</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                81,
                'The Theory of Plate Tectonics: Why do the continents move and how has the theory changed over time? (Is California sinking?) What is happening at plate boundaries?',
                'Students will: <ol><li>Explain the theory of plate tectonics.</li>
                <li>Explain the theory of plate tectonics.</li></ol>',
                ''
            ],
            [
                81,
                'What lies within and beneath Earth\' oceans? (Seafloor spreading and subduction zones)',
                'Students will: <ol><li>Explain seafloor spreading and subduction zones,</li>
                <li>Explain how fossils can provide evidence of movement of plates.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                82,
                'Why do earthquakes happen?',
                'Students will: <ol><li>Explain how plate movement causes earthquakes,</li>
                <li>Describe the frequency of earthquakes in certain geographical areas.</li>
                <li>Describe and explain what happens at the fault lines?</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                82,
                'What are seismic waves and how are they used to describe Earth’s interior?',
                'Students will: <ol><li>Describe the three types of seismic waves and interpret seismographs,</li>
                <li>Explain how earthquakes are measured.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                82,
                'How are islands formed?',
                'Students will: <ol><li>Research and provide evidence for why volcanoes occur in certain geographic areas.</li>
                <li>Compare and Contrast the three types of volcano structures and the materials that are erupted.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                83,
                'How do scientists think the universe began?',
                'Students will: <ol><li>Explain Big Bang Theory and how the universe was formed.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                83,
                'What is a star?',
                'Students will: <ol><li>Explain the birth and death of a star,</li>
                <li>Explain how stars are classified,</li>
                <li>Explain what constellations are. (White dwarfs, neutron stars and black holes).</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                83,
                'How did the solar system form? What are the properties of the sun? (why do we use sunscreen?)',
                'Students will: <ol><li>Explain nebular theory.</li><li>Explain the characteristics of the sun,</li><li>Explain nuclear fusion.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                83,
                'Can we see a satellite? What can we learn from space images?',
                'Students will: <ol><li>Research current astronomical projects in government labs,</li><li>Explain methods used to gather data from space.</li></ol>',
                'NSM 1300 (Earth and Space Science)'
            ],
            [
                84,
                'What is matter?',
                'Students will: <ol><li>When presented with different types of matter, categorize them 2) Understand that all types of matter are made of atoms</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                84,
                'What are solids, liquids and gases?',
                'Students will: <ol><li>Investigate the properties of water (and possibly other materials) as a solid, a liquid and a gas</li>
                <li>Draw molecular diagrams to represent solids, liquids and gases</li><li>Compare different solids</li>
                <li>Compare different liquids</li><li>Practice turning liquids to solids (ice cream) and compare the properties</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                84,
                'How is matter measured?  Mass and volume',
                'Students will: <ol><li>Practice measuring items using mass and volume</li><li>Through experimentation, prove that all matter takes up space</li><li>Through experimentation, prove that all matter has mass</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                85,
                'What is the relationship between mass and volume?',
                'Students will: <ol><li>Compare mass and volume of a material to determine how change in volume affects mass</li><li>Graph the relationship between mass and volume</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2230 Calculus III'
            ],
            [
                85,
                'What makes objects float?',
                'Students will: <ol><li>Predict whether particular items (materials) will sink or float</li><li>Discover commonalities between items that float</li><li>Design an object that will float when mass is added to it (pennies)</li><li>compare various liquids for density proving that liquids can also “float”</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2220 Calculus II'
            ],
            [
                85,
                'What makes jello jiggle? - Viscosity',
                'Students will: <ol><li>Experiment with different amounts of water and gelatin to produce the best “jiggle”</li><li>Graph the time it takes for liquids to flow between two points</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2230 Calculus III'
            ],
            [
                86,
                'What is temperature?',
                'Students will: <ol><li>Measure temperature using a thermometer </li><li>Build a thermometer which utilizes the properties of thermal expansion</li><li>Understand that as molecules move faster temperature rises</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2230 calculus III'
            ],
            [
                86,
                'What is the heat capacity of specific materials?',
                'Students will: <ol><li>Design an experiment to determine how different insulating materials can affect temperature.</li><li>Collect data and graph results.</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2230 calculus III'
            ],
            [
                87,
                'What are sources of energy?',
                'Students will: <ol><li>Understand that energy is a measure of doing work</li><li>Identify sources of energy from real world scenarios</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2230 Calculus III'
            ],
            [
                87,
                'How is energy used?',
                'Students will: <ol><li>Design a model which demonstrates energy capture and turns it into work (solar, wind, thermal)</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2230 Calculus III'
            ],
            [
                88,
                'What makes up atoms?',
                'Students will: <ol><li>Understand that the smallest particle that matter can be “cut” into is an atom</li><li>Develop models to show the placement of protons, neutrons and electrons in an atom</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                88,
                'What are the charges of atomic particles?',
                'Students will: <ol><li>Understand that each atomic particle has its own charge</li><li>Correctly place charges on models of the atom</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                89,
                'How does static electricity form?',
                'Students will: <ol><li>Make observations to provide evidence that energy can be transferred</li><li>Use evidence to construct an explanation relating the properties of an object to the amount of static charge on that object.</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2210 Calculus I'
            ],
            [
                89,
                'What happens when charges move?',
                'Students will: <ol><li>Experiment with charges to determine what happens between like and unlike charges</li><li>Identify what happens if like charges and opposite charges interact</li><li>Provide evidence that energy can be transferred from place to place through electric currents</li></ol>',
                'CHM 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2210 Calculus I'
            ],
            [
                90,
                'What are different types of waves (ocean, earthquake, electromagnetic, sound)',
                'Students will: <ol><li>Identify different types of waves</li><li>Design models representing different types of waves</li><li>research how waves are utilized by different industries.</li></ol>',
                'PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2210 Calculus I'
            ],
            [
                90,
                'How does the structure of a wave impact its energy (wavelength, amplitude, frequency)?',
                'Students will: <ol><li>Understand the way waves are measured</li><li>Perform experiments to determine wavelength, amplitude and frequency of waves</li><li>Investigate tools which are used to measure different types of waves</li><li>Perform simple mathematical calculations of wavelength, amplitude, and frequency.</li></ol>',
                'PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2210 Calculus I'
            ],
            [
                90,
                'How is energy transmitted through waves?',
                'Students will: <ol><li>Design a model to demonstrate how energy moves through waves</li><li>Prove that the energy of a wave can be used for other purposes.</li></ol>',
                'PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2210 Calculus I'
            ],
            [
                90,
                'What affects how waves move?',
                'Students will: <ol><li>Test different materials to see how waves are affected</li><li>Record and graph results of controlled experiments.</li></ol>',
                'PHYS 2210 General Physics I<br />PHYS 2220 General Physics II<br />MTH 2210 Calculus I'
            ],
            [
                91,
                'What are the molecular properties of solids, liquids and gases?',
                'Students will: <ol><li>identify the various states of matter</li><li>identify the distinct properties of solids, liquids, gases (shape, volume, flow)</li><li>develop a model which illustrates the differences in the molecular structure of solids, liquids and gases</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                91,
                'What changes in state can matter undergo?',
                'Students will: <ol><li>identify the changes in states of matter</li><li>develop a model which illustrates changes in particle motion, temperature, and state when thermal energy is added or removed.</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHY2210 General Physics I'
            ],
            [
                91,
                'How does a change in energy affect the state of matter?',
                'Students will: <ol><li>design and complete a laboratory experience which proves that when heating, cooling, or mixing substances, the total weight of matter is conserved</li><li>observe the changes in physical properties of a substance as it undergoes a phase change</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHY2210 General Physics I<br />PHY2220 General Physics II<br />MTH2220 Calculus II'
            ],
            [
                92,
                'What is the difference between a physical and a chemical change?',
                'Students will: <ol><li>Identify criteria for determining whether a physical or a chemical change has occurred when two substances are combined</li><li>Determine through observations and analysis whether a physical or chemical change has occurred when given two substances to combine</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHY2210 General Physics I<br />PHY2220 General Physics II<br />MTH2220 Calculus II'
            ],
            [
                92,
                'What are the signs that a chemical change has occurred?',
                'Students will: <ol><li>Describe the four signs that a chemical change has occurred (gas formation, precipitate, color change, energy change)</li><li>predict and investigate chemical reactions for signs that a chemical change has occurred</li><li>develop an experiment which indicates a chemical change</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHY2210 General Physics I<br />PHY2220 General Physics II<br />MTH2210 Calculus I<br />MTH2220 Calculus II'
            ],
            [
                93,
                'How can an observer tell if an endothermic or an exothermic reaction has taken place?',
                'Students will: <ol><li>Investigate various reactions to determine if the given reaction is exothermic or endothermic based upon temperature change </li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHY2210 General Physics I<br />PHY2220 General Physics II<br />MTH2210 Calculus I<br />MTH2220 Calculus II<br />MTH3300 Differential Equations'
            ],
            [
                93,
                'What happens to energy in an exothermic or endothermic reaction? Describe the transfer of energy in physical and chemical changes.',
                'Students will: <ol><li>Design and interpret models representing the flow of energy during endothermic and exothermic reactions</li><li>describe where the energy comes from and where it goes in reactions (conservation of energy)</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHY2210 General Physics I<br />PHY2220 General Physics II'
            ],
            [
                94,
                'How is energy from chemical reactions transported through living organisms?',
                'Students will: <ol><li>Describe some of the processes which occur in living organisms that transform energy</li><li>Develop models which demonstrate how energy is transformed through chemical reactions in living organisms</li></ol>',
                'BIO1210 Biology of Cells<br />BIO/CHM3550 Biochemistry,'
            ],
            [
                94,
                'How is energy converted from fuel to motion in transportation?',
                'Students will: <ol><li>Participate in laboratory experiences which demonstrate how motors create motion</li><li>Describe how the chemical processes in an internal combustion engine can produce energy</li><li>Develop models to demonstrate the energy flow from natural resource to transportation</li></ol>',
                'CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />PHY2210 General Physics I<br />PHY2220 General Physics II<br />MTH2210 Calculus I<br />MTH2220 Calculus II<br />CHM3575 Chemistry of Materials<br />CSC3850 Introduction to Robotics'
            ],
            [
                94,
                'How can energy be used in the recycling of materials?',
                'Students will: <ol><li>Participate in the demonstration and analysis of material recycling through composting</li><li>describe the flow of energy through a compost system</li><li>determine through experimentation other possible methods of recycling various materials</li></ol>',
                'PHY2210 General Physics I<br />PHY2220 General Physics II<br />MTH2210 Calculus I<br />MTH2220 Calculus II<br />CHM3575 Chemistry of Materials<br />BIO/CHM3550 Biochemistry<br />CSC4350 Software Engineering<br />CSC4100 Systems Analysis and Design'
            ],
            [
                94,
                'How can energy be harnessed during the recycling of materials?',
                'Students will: <ol><li>Develop a model to show how energy which is output during the recycling process could be stored and used for other energy purposes.</li></ol>',
                'PHY2210 General Physics I<br />PHY2220 General Physics II<br />MTH2210 Calculus I<br />MTH2220 Calculus II<br />CHM3575 Chemistry of Materials<br />BIO/CHM3550 Biochemistry'
            ],
            [
                95,
                'How does energy change throughout the manufacturing process?',
                'Students will: <ol><li>Research the flow of energy from creation through recycling in particular areas of manufacturing</li><li>Develop a model representing the flow of energy through the researched manufacturing process </li></ol>',
                'PHY2210 General Physics I<br />PHY2220 General Physics II<br />MTH2210 Calculus I<br />MTH2220 Calculus II<br />CHM3575 Chemistry of Materials<br />BIO/CHM3550 Biochemistry'
            ],
            [
                96,
                'How are elements properties defined as metals, nonmetals and metalloids?',
                'Students will: <ol><li>identify the common properties of metals, nonmetals and metalloids</li><li>locate metals, nonmetals, and metalloids on the periodic table</li><li>identify unknown materials as metal, nonmetal, or metalloid based upon their properties</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                96,
                'How is the periodic table arranged by groups and periods?',
                'Students will: <ol><li>determine how properties of an item can be utilized to produce an effective system of classification (e.g. table)</li><li>define the system which characterizes the current period table (groups and periods)</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                97,
                'What common properties can some elements share?',
                'Students will: <ol><li>investigate the properties of elements which are common within each group on the periodic table (reactivity, valence, density, radius)</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                97,
                'How do common properties of elements define their place on the periodic table?',
                'Students will: <ol><li>use the characteristic properties of a table system to predict where an item (element) might belong</li><li>demonstrate understanding of the role valence electrons have on an element’s properties.</li><li>predict the placement of an element on the periodic table based on given properties</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                98,
                'What elements are useful in various manufacturing processes?',
                'Students will: <ol><li>research a particular area of manufacturing to determine what elements are utilized during the production of a particular product</li><li>investigate how particular elements are used by common manufacturing industries</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />CHM3575 Chemistry of Materials'
            ],
            [
                98,
                'What properties of elements make them useful in manufacturing processes?',
                'Students will: <ol><li>design and conduct an experiment which utilizes different chemical solutions as a cleaning agent</li><li>design and conduct an experiment to prevent iron from rusting</li><li>design and conduct an experiment which utilizes particular elements of fertilizers to enhance plant growth</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />CHM2450 Analytical Chemistry<br />CHM3640 Instrumental Chemical Analysis<br />MTH3490 Numerical Anaylsis'
            ],
            [
                99,
                'How do atoms combine? Under what circumstances do they combine?',
                'Students will: <ol><li>describe how atoms bond to form molecules in terms of transferring and/or sharing electrons</li><li>identify which type of bond (ionic or covalent) has occurred by analyzing the type of electron interactions in terms of transferring or sharing</li><li>construct models that show the relationship of atoms and electrons with the use of Lewis structures.</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                99,
                'How do atomic bonds determine properties of compounds and molecules?',
                'Students will: <ol><li>discover trends and formulate rules about bonds and their physical properties</li><li>evaluate experimental results to determine the type of bond in a compound/molecule</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                99,
                'How are elements combined to create compounds/molecules?',
                'Students will: <ol><li>demonstrate understanding of the role of valence electrons in determining correct chemical formulas</li><li>apply the octet rule to determine the correct ratio of atoms in a compound</li><li>identify correct naming procedures for chemical compounds and molecules.</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />CHM2450 Analytical Chemistry<br />CHM3640 Instrumental Chemical Analysis '
            ],
            [
                100,
                'How does matter combine to form new kinds of substances?',
                'Students will: <ol><li>identify reactants and products in a chemical reaction</li><li>Identify a given chemical reaction as single replacement (displacement), double replacement (displacement/metathesis), decomposition, synthesis (combination/formation) and combustion</li><li>predict products of reactions: single-replacement, double-replacement, and combustion</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM2450 Analytical Chemistry'
            ],
            [
                100,
                'How is matter conserved in ordinary chemical reactions?',
                'Students will: <ol><li>describe the law of conservation of matter and explain how it relates to balanced chemical equations</li><li>design and complete a laboratory investigation which demonstrates the law of conservation of matter</li><li>evaluate chemical equations to determine the correct coefficients required to follow the law of conservation of matter.</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                101,
                'How does energy affect the rate of a reaction?',
                'Students will: <ol><li>apply scientific principles to design, construct, and test a device that either minimizes or maximizes thermal energy transfer</li><li>plan an investigation to determine the relationships among the energy transferred, the type of matter, the mass, and the change in the average kinetic energy of the particles as measured by the temperature of the sample</li><li>demonstrate an understanding of why thermal energy can be used as a catalyst to speed up the rate of reaction.</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />Physics 2210  General Physics<br />MTH 2210 Calculus I'
            ],
            [
                102,
                'How does concentration and amount impact molecular structure of new material?',
                'Students will: <ol><li>design an investigation to test how factors such as amount and concentration of reactants affect the resulting physical properties of a product</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                102,
                'What processes go into the design and improvement of new material?',
                'Students will: <ol><li>analyze the design of a product to determine how the materials affect purpose of each individual part (e.g. a tennis shoe)</li><li>design and construct materials which match the requirements for the product</li><li>create possibilities for improvements in the materials which would improve the overall quality of the product</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />CHM2450 Analytical Chemistry<br />CHM3640 Instrumental Chemical Analysis'
            ],
            [
                103,
                'What causes atoms to be unstable?',
                'Students will: <ol><li>describe the forces which keep the nucleus of an atom together</li><li>identify conditions which might lead to nuclear instability</li><li>demonstrate atomic notation for selected radioactive isotopes</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                103,
                'What happens to atoms that are unstable?',
                'Students will: <ol><li>develop models that illustrate the process of radioactive decay</li><li>compare and contrast alpha, beta and gamma radiation</li><li>design a model which demonstrates half life of an isotope</li><li>identify both natural and artificial causes of radiation</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                103,
                'What reactions involve the nucleus? How is the structure of atom altered during fusion and fission?',
                'Students will: <ol><li>develop models which illustrate the processes of nuclear fission and fusion</li><li>compare and contrast nuclear fission and fusion processes</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II'
            ],
            [
                104,
                'How do the products of decay affect surrounding matter?',
                'Students will: <ol><li>describe characteristics of the particles released during alpha, beta, and gamma decay</li><li>describe both the positive and negative effects that the products of alpha, beta, and gamma decay have on surrounding matter </li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />Physics 2220 General Physics II'
            ],
            [
                104,
                'How can the products of nuclear reactions be used for good or bad in our everyday lives?',
                'Students will: <ol><li>understand the common misconceptions about radiation</li><li>describe some of the ways that radiation can be used in everyday life (foods, medical, industrial, warfare)</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />Physics 2220 General Physics II'
            ],
            [
                105,
                'How can energy from nuclear reactions be captured for practical energy uses?',
                'Students will: <ol><li>understand the process of heat flow through a closed system</li><li>describe the process of converting thermal energy into electrical energy</li><li>design, create and test a model which is capable of harnessing thermal energy and converting it into electrical energy</li></ol>',
                'Chem 1200 Principles of Chemistry<br />CHM1310 General Chemistry I<br />CHM1320 General Chemistry II<br />Physics 2220 General Physics II'
            ],
            [
                105,
                'How is the energy from nuclear fission (and potentially fusion) reactions converted to electrical energy?',
                'Students will: <ol><li>describe the flow of energy from the nucleus of a fissionable atom through electrical power generation</li><li>understand the basic differences between a boiling water reactor and a pressurized water reactor</li></ol>',
                'Physics 2220 General Physics II'
            ],
            [
                106,
                'Why is nuclear energy considered to be unstable and how does that relate to implementation?  What are the costs, benefits, impact, and environmental concerns of using nuclear energy?',
                'Students will: <ol><li>compare and contrast the pros and cons of nuclear power generation</li><li>produce a cost benefit analysis for the use of nuclear energy</li><li>prepare a formal presentation of the evaluation and analysis of the use of nuclear power</li></ol>',
                'BIO2200 Humans and the Environment<br />MTH 3500 Applied Statistics'
            ],
            [
                107,
                'How are the life cycles of plants, animals and products similar?',
                'Students will: <ol><li>Examine the life cycles of animals, plant and products,</li><li>Describe typical life cycles for plants, animals and products,</li><li>Compare similarities of life cycles in plants, animals and products,</li><li>Articulate how animal, plant and product life cycles are similar</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                108,
                'How are plants, animals and products similar from generation to generation?',
                'Students will: <ol><li>Define similarities of animals, plants and products from previous and present generations,</li><li>Analyze similarities in generations,</li><li>Create a diagram or model to exhibit similarities discovered among different generations of animals, plants and products</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                109,
                'How can records of the past help us learn about plants, animals and products?',
                'Students will: <ol><li>define ʺrecords of the pastʺ,</li><li>Identify how records of the past can show variations in animals, plants and products,</li><li>Examine specific products to evaluate variations,</li><li>Trace the variant progression of product from its origin to latest model,</li><li>Identify the variations in characteristics that allowed plants, animals, and products to survive</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                110,
                'What internal and external structures support growth and reproduction of animals?',
                'Students will: <ol><li>Identify the essential internal and external structures of animals</li><li>Explain how each structure aids the animals</li><li>Construct a diagram/model to show the function of each structure in an animal</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                110,
                'How do internal and external structures support growth and reproduction of animals?',
                'Students will: <ol><li>identify vital internal and external structures necessary for healthy growth in an animal</li><li>Analyze how internal and external structures support growth and reproduction in animals</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                111,
                'What internal and external structures aid in survival?',
                'Students will: <ol><li>List internal and external structures that aid an animal in survival</li><li>Explain how internal and external structures aid in survival</li><li>Create a model to illustrate how structures aid in survival</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                111,
                'What animal behaviors increase their likelihood of survival?',
                'Students will: <ol><li>identify animal behaviors that increase the likelihood of survival</li><li>describe how animal behaviors increase its likelihood of survival</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                112,
                'What internal and external structures support growth and reproduction of plants?',
                'Students will: <ol><li>Identify the essential internal and external structures of plants</li><li>Explain how each structure aids the plant</li><li>Construct a diagram/model to show the function of each structure in a plant</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                112,
                'How do internal and external structures support growth and reproduction of plants?',
                'Students will analyze how internal and external structures support growth and reproduction in plants',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                113,
                'What internal and external structures aid in survival?',
                'Students will: <ol><li>List internal and external structures that aid a plant in survival</li><li>Explain how internal and external structures aid in survival of a plant</li><li>Create a model to illustrate how structures of a plant aid in survival</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                113,
                'What plant behaviors increase their likelihood of survival?',
                'Students will: <ol><li>Identify plant behaviors that increase the likelihood of survival</li><li>Describe how plant behaviors increase its likelihood of survival</li><li>Defend why certain plant behaviors help them survive</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                114,
                'What structures of animals increase their ability to detect information from their environment?',
                'Students will: <ol><li>Identify structures that allow animals to detect information</li><li>Construct a diagram of the sensory organs of an animal</li><li>Generate a hypothesis ascertaining how structure contributes to a sensory organ\'s function</li><li>Test hypothesis through research and experimentation</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                115,
                'How do the internal and external structures of a plant enable it to acquire, use and release energy?',
                'Students will: <ol><li>Identify internal and external structures in plants which are utilized to acquire energy</li><li>Identify internal and external structures which are utilized in plants to use energy</li><li>Identify internal and external structures in plants which are utilized to release energy</li><li>Describe the process of energy use in plants</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)<br />BIO 2200 (Humans and the Evironment)'
            ],
            [
                115,
                'How does the release of plant energy affect people in their daily lives?',
                'Students will: <ol><li>Explain how humans utilize the products released by plants</li><li>Explain the relationship between plants and humans</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)<br />BIO 2200 (Humans and the Evironment)'
            ],
            [
                116,
                'How do the internal and external structures of animals enable them to acquire, use and release energy?',
                'Students will: <ol><li>Identify internal and external structures in animals which are utilized to acquire energy</li><li>Identify internal and external structures which are utilized in animals to use energy</li><li>Identify internal and external structures in animals which are utilized to release energy</li><li>Describe the process of energy use in animals</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)<br />BIO 2200 (Humans and the Evironment)'
            ],
            [
                116,
                'What structures and functions allow both cold and warm-blooded animals to be energy efficient?',
                'Students will: <ol><li>Analyze the differences between cold-blooded and warm-blooded animals</li><li>Compare and contrast the structure and function of the digestive systems of cold and warm-blooded animals</li><li>Qualify and quantify energy efficiency in animals, both cold and warm-blooded</li><li>Utilize the information acquired to draw conclusions about the efficiency of energy use in cold and warm-blooded animals</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)<br />BIO 2200 (Humans and the Evironment)'
            ],
            [
                117,
                'How does the greenhouse illustrate the acquisition, utilization and release of energy?',
                'Students will: <ol><li>Research how scientists utilize technology to measure energy in plants</li><li>Create a diagram exhibiting the acquisition, utilization and release of energy in a greenhouse</li><li>Utilize a model of a greenhouse to demonstrate that plants acquire the materials for growth primarily from air and water</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)<br />BIO 2200 (Humans and the Evironment)'
            ],
            [
                117,
                'How can the variables in greenhouses be adjusted to produce the greatest energy?',
                'Students will: <ol><li>Determine potential variables present in a greenhouse</li><li>Categorize variables by energy efficiency</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)<br />BIO 2200 (Humans and the Evironment)'
            ],
            [
                117,
                'How can a greenhouse be designed to maximize production?',
                'Students will: <ol><li>research popular greenhouse designs</li><li>Analyze effective greenhouse design</li><li>Propose a prototype for the most energy efficient design</li><li>Establish the most efficient design and create a model for a greenhouse</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)<br />BIO 2200 (Humans and the Evironment)'
            ],
            [
                118,
                'What is a cell and what is cell theory?',
                'Students will: <ol><li>Identify the parts of a cell and the role each part performs,</li><li>Design an analogy/model to demonstrate understanding of a cell and its parts</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                118,
                'How do cells differ in their structure and function among organisms?',
                'Students will: <ol><li>Compare and contrast different cell types from different organisms and their functions</li><li>Utilize technology to illustrate the differences between cell types of different organisms</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                119,
                'How do cells differ in their structure and function within an organism?',
                'Students will: <ol><li>Examine differences in cell structure and function in an organism</li><li>Investigate how subsystems are developed from cells</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                119,
                'How do the subsystems interact to form a system?',
                'Students will: <ol><li>Identify subsystems within an organism</li><li>Design a model to illustrate the structure and function of subsystems</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                119,
                'What systems function within an organism?',
                'Students will: <ol><li>Identify systems within an organism</li><li>Develop a diagram/model to show systems in an organism and the functions of each system</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                120,
                'What role do sun and water play in a plants’ ability to acquire energy?',
                'Students will: <ol><li>Explain how sun and water are vital for photosynthesis</li><li>Develop an understanding about plants’ abilities to create energy</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                120,
                'How does photosynthesis help a plant to create energy?',
                'Students will: <ol><li>Identify how photosynthesis leads to energy production</li><li>Create a graphic to illustrate the cyclical nature of photosynthesis</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                120,
                'How does the digestive system aid in converting food to energy in organisms?',
                'Students will: <ol><li>Identify the parts of the digestive system</li><li>Describe the process of digestion</li><li>Construct a model illustrating the process of digestion</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                120,
                'What is the difference between aerobic and anaerobic respiration?',
                'Students will: <ol><li>explain the process of both aerobic and anaerobic respiration</li><li>Analyze the differences between the two processes</li><li>Identify conditions needed for the processes of aerobic and anaerobic respiration to occur</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                121,
                'What structures and behaviors of an organism determine its likelihood to reproduce?',
                'Students will: <ol><li>Research organisms to determine structures and behaviors that could affect likeliness of reproduction</li><li>Identify structures and behaviors which give advantages to a species’ likelihood of survival</li><li>Understand and describe how a species’ likelihood of survival can increase or decrease its offspring\'s chances of survival</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                121,
                'What are possible advantages of asexual reproduction for offspring?',
                'Students will: <ol><li>Define asexual reproduction and the conditions under which it occurs,</li><li>List advantages of asexual reproduction,</li><li>Compare asexual and sexual reproduction as it affects offspring (genetic defects, etc.)</li></ol>',
                'BIO 1210 (Biology of cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                122,
                'How can a disassembled prosthesis illustrate form and function of a limb?',
                'Students will: <ol><li>Design activities to perform reverse engineering on a prosthetic limb</li><li>Evaluate the form of a human limb and how it allows that limb to function accordingly</li><li>Consider the function of a limb, as it is related to its form</li><li>Document comparisons of function and form of a prosthesis to a natural limb</li></ol>',
                'BIO 3040 (Immunology)<br />BIO 2300 (Intro to Zoology)'
            ],
            [
                122,
                'If a portion of a limb is missing, how could those functions be restored with a prosthesis?',
                'Students will: <ol><li>Research the functions of a prosthesis</li><li>Analyze the function of the missing limb and what is necessary to restore full function</li><li>Construct a solution outlining the affected function of a limb and its restoration with a prosthesis</li><li>Present the solution to a panel of peers</li></ol>',
                'BIO 3040 (Immunology)<br />BIO 2300 (Intro to Zoology)'
            ],
            [
                122,
                'What will secure the prosthesis to the person now and in the future?',
                'Students will: <ol><li>Research existing practices for securing a prosthesis</li><li>Create a diagram illustrating a design of how the prosthesis will be secured in the future</li><li>Collaborate with peers to improve their design</li><li>Examine the role of continuous improvement in design</li></ol>',
                'BIO 3040 (Immunology)'
            ],
            [
                123,
                'How does the form of a structure determine life’s functions and how does the function of a structure determine its form?',
                'Students will: <ol><li>List the properties of a form of a structure</li><li>Using a model illustrate the relationship between form and function of a plant or animal</li></ol>',
                'BIO 1210 (Biology of Cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                123,
                'How does the knowledge of developmental milestones and function inform physicians, parents, and educators?',
                'Students will: <ol><li>Identify developmental milestones</li><li>Analyze an Individualized Education Plan (IEP)</li><li>Design a growth chart to document developmental milestones</li></ol>',
                'BIO 3400 (Genetics)<br />BIO 2200 (Humans and the Environment)'
            ],
            [
                124,
                'How do the individual structures in the system contribute to the overall functioning of the whole?',
                'Students will: <ol><li>Examine an individual structure to determine its contribution to the functioning of the whole system,</li><li>Document the possible variables in the functioning of a system</li></ol>',
                'BIO 3260 (Comparative Botany)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                124,
                'What are the similarities and differences in the structure of systems and how they function in organisms?',
                'Students will: <ol><li>Compare and contrast a system in plants and animals</li><li>Design an investigation to illustrate structural differences in plants and animals</li></ol>',
                'BIO 3260 (Comparative Botany)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                124,
                'What are ways cardiologist repair the circulatory system?',
                'Students will: <ol><li>utilize prior knowledge to establish understanding of form and function of the circulatory system</li><li>Describe conditions of the circulatory system which diminish cardiac output</li><li>Propose a surgical procedure to the affected supporting structures of the heart</li><li>Design a model illustrating a heart bypass operation</li></ol>',
                'BIO 1210 (Biology of Cells)<br />BIO 2660 (Anatomy and Physiology)'
            ],
            [
                125,
                'How do organisms utilize sensory organs to detect, process, and use information from the environment?',
                'Students will: <ol><li>Document how stimuli are detected by an organism</li><li>Create a diagram illustrating the processes of input and possible outputs as demonstrated by sensory reactions</li><li>Predict reactions of an organism using sensory receptors to internal stimuli and external stimuli</li></ol>',
                'BIO 1210 (Biology of Cells)<br />BIO 3450 (Advanced Cell)<br />BIO 2660/BIO 2670 (Anatomy and Physiology)'
            ],
            [
                125,
                'How have hearing devices improved sound for the hearing impaired and deaf?',
                'Students will: <ol><li>Develop a timeline illustrating the improvements to hearing devices</li><li>Identify which input paths have improved over time</li><li>Design a model predicting possible future improvements in hearing devices</li></ol>',
                'BIO 1210 (Biology of Cells)<br />BIO 3450 (Advanced Cell)<br />BIO 2660/BIO 2670 (Anatomy and Physiology)'
            ],
            [
                126,
                'How can organisms of the same species have different characteristics through Natural Selection?',
                'Students will: <ol><li>Identify genetic factors that determine characteristics in both plants and animals</li><li>Utilize tools (Punnett Square) to predict possible genetic variance in like species</li><li>Evaluate specific genetic variations to determine benefits or harm to an organism</li></ol>',
                'BIO 1210 (Biology of Cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                126,
                'How can using fossil records to identify and analyze the patterns of change help you understand why some traits continue and others disappear? (i.e., Mammoth to elephant, Neanderthal to modern man.)',
                'Students will: <ol><li>Conduct research to acquire knowledge about fossil records</li><li>Compare and contrast similarities and differences between ancient species and modern species (Neanderthal-Modern Man)</li><li>Analyze patterns of change in species</li><li>Document traits that have continued in species and traits that have disappeared in the same species through analysis</li></ol>',
                'BIO 1210 (Biology of Cells)<br />BIO 1220 (Biology of Organisms)'
            ],
            [
                126,
                'How does the identification of predisposition markers by geneticists affect the choices of individuals?',
                'Students will: <ol><li>Recognize how geneticists use genes to predict an organism\'s traits</li><li>Create a graphic tool to display how traits can be predicted and possibly altered by scientist</li><li>Create an argument exploring positive and negative effects of genetic knowledge</li></ol>',
                'BIO 3600 (Molecular Biology)<br />BIO 3400 (Genetics)'
            ],
            [
                127,
                'How have technologies influenced desired traits in organisms - plants?',
                'Students will: <ol><li>Describe technologies used to alter species of plants</li><li>Consider how technologies available in agriculture will affect future generation</li></ol>',
                'BIO 1220 (Biology of Organisms)<br />BIO 3530 (Evolution)'
            ],
            [
                127,
                'How does genetic variation among organisms affect survival and reproduction?',
                'Students will: <ol><li>Explain how technologies available in agriculture and human health will affect future generations,</li><li>Design an investigation to determine possible outcomes during the use of genetic technologies</li></ol>',
                'BIO 1210 (Biology of Cells)<br />BIO 3600 (Molecular Biology)'
            ],
            [
                127,
                'How do genetic technologies impact the supply chain to benefit the producers and consumers of the agricultural industry?',
                'Students will: <ol><li>Calculate how genetic engineering has affected the agricultural industry</li><li>Evaluate how genetic modification of agriculture has increased consumer options</li><li>Analyze the effect of technologies on a farmer\'s ability to produce crops and livestock</li></ol>',
                'BIO 1210 (Biology of Cells)<br />BIO 3600 (Molecular Biology)'
            ],
            [
                128,
                'How does technology increase the supply of livestock for human consumption?',
                'Students will document technology used to increase livestock production',
                'BIO 1220 (Biology of organisms)<br />BIO 3250 (Animal Behavior)'
            ],
            [
                128,
                'How have technologies influenced desired traits in organisms - animals?',
                'Students will: <ol><li>Recognize traits that are considered desirable</li><li>Create a graphic tool to evaluate traits that are considered desirable</li><li>Synthesize how the quality of life has improved for people because of increased technology</li><li>Evaluate how technology has changed agriculture</li></ol>',
                'BIO 1220 (Biology of Organisms)<br />BIO 3520 (Animal Behavior)'
            ],
            [
                128,
                'What are the ethical and moral responsibilities of scientists, doctors and individuals using technology to create an organism with particular traits?',
                'Students will: <ol><li>Communicate how technological advances create ethical and moral dilemmas</li><li>Construct an investigation to examine what role the ability to determine traits may have on future generations</li></ol>',
                'BIO 1220 (Biology of Organisms)<br />BIO 1210 (Biology of Cells)'
            ],
            [
                129,
                'What is the difference between weather and climate?',
                'Students will: <ol><li>Explain weather concepts, define terminology, and apply how weather instruments are used in meteorology</li><li>Observe and record local weather patterns in Aurora or the Midwest to develop these concepts before expanding to a national or global comparison such as the Arctic or Antarctica.</li></ol>',
                'NSM1300 Earth Science<br />BIO2200 Humans and the Environment<br />MTH 3240 Probability and Statistics'
            ],
            [
                129,
                'What factors influence temperature around the world and in your community?',
                'Students will: <ol><li>Investigate weather in a detailed way, learning about components of weather, weather instruments, and forecasting.  Students investigate (1) clouds; (2) thermometers (3) wind vanes; (4) air pressure and barometers; (5) severe weather; (6) collecting weather data; (7) interpreting weather data; (8) make weather forecasts.</li></ol>',
                'NSM1300 Earth Science<br />BIO2200 Humans and the Environment<br />MTH 3240 Probability and Statistics'
            ],
            [
                130,
                'What is weather?',
                'Students will: <ol><li>identify and journal daily weather at school</li><li>Compare and contrast weather in Aurora to other areas in USA.  (key geography tie-in).</li><li>Interpret implications how latitude changes weather.</li><li>Compare their data logs to previous years\' data (from previous classes)</li></ol>',
                'NSM1300 Earth Science<br />BIO2200 Humans and the Environment<br />MTH 3240 Probability and Statistics'
            ],
            [
                131,
                'What are distinct features of animal habitats in different regions particularly locally in the Midwest?',
                'Students will: <ol><li>Create an animal habitat “menu” where each habitat has a list of distinct features available to the habitat.</li><li>Demonstrate through Venn diagrams the similarities and differences among the distinct features of animal habitats locally.</li></ol>',
                'NSM1300 Earth Science<br />BIO2200 Humans and the Environment<br />MTH 3240 Probability and Statistics<br />MTH 3700 Models for Life Contingencies '
            ],
            [
                131,
                'How have animal habitats been impacted by weather and climate changes caused by human impact?',
                'Students will: <ol><li>Identify ways animals depend on their environment to live.</li><li>Identify how changes in weather and climate such as polar ice caps will affect animals’ habitats.</li><li>Create a short story that contains both illustrations and text about a specific animal habitat being altered by weather and climate change issues.</li></ol>',
                'MTH 3240 Probability and Statistics<br />MTH 3700 Models for Life Contingencies<br />MTH 3500 Applied Statistical Methods'
            ],
            [
                132,
                'What are different design solutions that are used to reduce weather related hazards?  (i.e. levees, flood elevation, lightning rods, trusses, concrete footings, etc.)',
                'Students will: <ol><li>Create a table listing different design solutions.</li><li>Investigate using the internet how each design solution reduces weather related hazards and resultant damage.</li></ol>',
                ''
            ],
            [
                126,
                '',
                'Students will: <ol><li></li></ol>',
                ''
            ]
        ];

        foreach($questions as $question){
            Question::create(['topic_id' => $question[0],'title' => $question[1], 'evidence' => $question[2], 'course_align' => $question[3]]);
        }
    }
}