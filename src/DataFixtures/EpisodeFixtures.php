<?php


namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;

//rappel : appeler les bon use
//rappel : mettre la bonne class, le bon extend et le bon implement


class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //utilisation faker
        $faker = Faker\Factory::create('fr_FR');

        //on boucle pour un nb d'episodes choisis
        //attention a ce que la boucle corresponde à saison
        for ($i = 0; $i <50; $i++) {
            //on instancie l'objet qui nous interesse
            $episode = new Episode();
            //on set les données qui intéressent, celles de la table episode
            //attention valeur : text et random digit
            $episode->setTitle($faker->text);
            $episode->setNumber($faker->randomDigit);
            $episode->setSynopsis($faker->paragraph);
            //on raccroche les episodes aux saison et on ajoute les donnees de faker à l'objet via $this et getreference, pour le nb saison defini
            $episode->setSeason($this->getReference('season_' . rand(0, 49)));

            $manager->persist($episode);

        }
        $manager->flush();

    }

    public function getDependencies()
    {

        return [SeasonFixtures::class];
    }
}
