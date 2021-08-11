<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $date = new \DateTime(date("Y-m-d",mt_rand(strtotime('2015-01-01'),strtotime('2021-07-01'))));
        $event1 = new Event();
        $event1->setName('Evenement 1');
        $event1->setDate($date);
        $manager->persist($event1);

        $event2 = new Event();
        $event2->setName('Evenement 2');
        $event2->setDate($date);
        $manager->persist($event2);

        $event3 = new Event();
        $event3->setName('Evenement 3');
        $event3->setDate($date);
        $manager->persist($event3);

        $manager->flush();
    }
}
