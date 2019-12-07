<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const ACTORS = [

        'Johnny',
        'Ben',
        'Arnold',
        'Sylvester',
    ];

    public function load(ObjectManager $manager)
    {

        $faker = Faker\Factory::create('fr_FR');
        //après avoir ajouté faker on boucle pour 50 acteurs
        //à l'objet acteur : methode ajout program + reference nom du program pour le nb program

        for ($i = 1; $i < 51; $i++) {
            //on instancie un nouvel objet acteur et on ajoute un nom via faker
            $actor = new Actor();
            $actor->setName($faker->name);
            //getReference permettant de récupérer une donnée qui a été créée dans la fixture précédente.
            //add reference permet de sauver une reference vers une entité, là pour season, dans l'intervalle de la boucle
            $actor->addProgram($this->getReference('program_' . rand(0,5)));

            $manager->persist($actor);
        }
        $manager->flush();
        //pour chaque acteur (apres avoir instancie l'objet, on set le nom mais pas issu de faker, celui du program 0
        foreach (self::ACTORS as $key => $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $this->addReference('actor_' . $key, $actor);
            $actor->addProgram($this->getReference('program_0'));
            $manager->persist($actor);

        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}
