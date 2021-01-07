<?php

namespace App\Repository;

use App\Entity\Medicijnen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Medicijnen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medicijnen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medicijnen[]    findAll()
 * @method Medicijnen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedicijnenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Medicijnen::class);
    }

    // /**
    //  * @return Medicijnen[] Returns an array of Medicijnen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Medicijnen
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
