<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }


    public function load(ObjectManager $manager)
    {
        // Création d’un utilisateur de type “auteur”
        $subscriberauthor = new User();
        //ce que l'on verra comme adress apres connexion
        $subscriberauthor->setEmail('subscriberauthor@monsite.com');
        $subscriberauthor->setRoles(['ROLE_SUBSCRIBER']);
        $subscriberauthor->setPassword($this->passwordEncoder->encodePassword(
            $subscriberauthor,
            'subscriberpassword'
        ));
        $subscriberauthor->setBio('Serial commentator');
        $subscriberauthor->setUsername('Monsieur X');

        $manager->persist($subscriberauthor);

        // Création d’un utilisateur de type “administrateur”
        $admin = new User();
        $admin->setEmail('lilian.admin@gmail.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordEncoder->encodePassword(
            $admin,
            'adminpassword'
        ));

        $admin->setBio('Administrateur du site Wild Series');
        $admin->setUsername('Client');

        $manager->persist($admin);

        // Sauvegarde des 2 nouveaux utilisateurs :
        $manager->flush();
    }
}
