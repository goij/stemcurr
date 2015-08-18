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
                45,
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