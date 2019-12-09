<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Service\Slugify;
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
            $slugify = new Slugify();
            $slug = $slugify->generate($actor->getName());
            $actor->setSlug($slug);
            //getReference permettant de récupérer une donnée qui a été créée dans la fixture précédente.
            $this->addReference('actor_' . $i, $actor);
            $actor->addProgram($this->getReference('program_' . rand(0,5)));

            $manager->persist($actor);
        }

        //pour chaque acteur (apres avoir instancie l'objet, on set le nom mais pas issu de faker, celui du program 0
        foreach (self::ACTORS as $key => $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $slugify = new Slugify();
            $slug = $slugify->generate($actor->getName());
            $actor->setSlug($slug);
            $manager->persist($actor);
            $this->addReference('actor_' . $i, $actor);
            $i++;
            $actor->addProgram($this->getReference('program_0'));
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}
