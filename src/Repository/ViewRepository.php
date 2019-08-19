<?php

namespace App\Repository;

use App\Entity\View;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method View|null find($id, $lockMode = null, $lockVersion = null)
 * @method View|null findOneBy(array $criteria, array $orderBy = null)
 * @method View[]    findAll()
 * @method View[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ViewRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, View::class);
    }

    public function findByParams($values)
    {
         $query = $this->createQueryBuilder('v')
            ->andWhere('v.version = :version')
            ->andWhere('v.hitType = :hitType')
            ->andWhere('v.trackingId = :trackingId')
            ->setParameter('version', $values["v"])
            ->setParameter('hitType', $values["t"])
            ->setParameter('trackingId', $values["tid"]);

//            if($values["t"] == "event") {
//                $query->andWhere('v.eventCategory = :eventCategory')
//                    ->andWhere('v.eventAction = :eventAction')
//                    ->setParameter('eventCategory', $values["ec"])
//                    ->setParameter('eventAction', $values["ea"]);
//            }
//
//            if($values["t"] == "screenview") {
//                $query->andWhere('v.screenName = :screenName')
//                    ->setParameter('screenName', $values["sn"]);
//            }


        $query
            ->orderBy('v.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;


            return $query;
    }


    // /**
    //  * @return View[] Returns an array of View objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?View
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
