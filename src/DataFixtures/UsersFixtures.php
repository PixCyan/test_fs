<?php

namespace App\DataFixtures;

use App\Entity\UserData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UsersFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 4; $i++) {
           $user = new UserData();
           $user->setUserName('Paul ' . $i);
           $manager->persist($user);
        }

        $manager->flush();
    }
}