<?php

namespace App\Repository;

use App\Entity\Pageview;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pageview|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pageview|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pageview[]    findAll()
 * @method Pageview[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageviewRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pageview::class);
    }

    // /**
    //  * @return Pageview[] Returns an array of Pageview objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pageview
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
