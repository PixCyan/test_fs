<?php

namespace App\DataFixtures;

use App\Entity\View;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ViewsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $view = new View();
            $view->setEventValue(1);
            $view->setWizbiiUserId('Paul ' . $i);
            $view->setWizbiiUniqUserId('dd61f4zafs1d35f');
            $view->setTrackingId('tid');
            $view->setScreenName('sn');
            $view->setQueueTime(250);
            $view->setHitType('t');
            $view->setEventLabel('el');
            $view->setEventCategory('ec');
            $view->setEventAction('ea');
            $view->setEventValue(1);
            $view->setDocumentReferer('dr');
            $view->setDocumentLocation('dl');
            $view->setDataSource('ds');
            $view->setCampaignSource('cs');
            $view->setCampaignName('cn');
            $view->setCampaignMedium('cm');
            $view->setCampaignKeyword('ck');
            $view->setCampaignContent('cc');
            $view->setCacheBurster('z');
            $view->setApplicationVersion(1);
            $view->setApplicationName('an');
            $view->setWizbiiCreatorType('wct');
            try {
                $view->setVersion(random_int(1, 2));
            } catch (\Exception $e) {
                //todo
            }
            $manager->persist($view);
        }

        $manager->flush();
    }
}