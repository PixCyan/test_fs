<?php

namespace App\Repository;

use App\Entity\Screenview;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Screenview|null find($id, $lockMode = null, $lockVersion = null)
 * @method Screenview|null findOneBy(array $criteria, array $orderBy = null)
 * @method Screenview[]    findAll()
 * @method Screenview[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScreenviewRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Screenview::class);
    }

    // /**
    //  * @return Screenview[] Returns an array of Screenview objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Screenview
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
