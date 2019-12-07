<?php


namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;



class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //utilisation faker
        $faker = Faker\Factory::create('fr_FR');

        //on boucle pour un nb saison
        for ($i = 0; $i <50; $i++) {
            //on instancie l'objet
            $season = new Season();
            //on set les données qui intéressent
            //attention valeur : text et random digit
            $season->setYear($faker->year);
            $season->setDescription($faker->text);
            $season->setNumber($faker->randomDigit);
            //getReference permettant de récupérer une donnée qui a été créée dans la fixture précédente.
            $season->setProgram($this->getReference('program_' . rand(0, 5)));
            //add reference permet de sauver une reference vers une entité, là pour season, dans l'intervalle de la boucle
            $this->addReference('season_' .$i, $season);

            $manager->persist($season);
        }
        $manager->flush();

    }

    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}
