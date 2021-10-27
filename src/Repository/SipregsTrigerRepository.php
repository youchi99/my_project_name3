<?php

namespace App\Repository;

use App\Entity\SipregsTriger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SipregsTriger|null find($id, $lockMode = null, $lockVersion = null)
 * @method SipregsTriger|null findOneBy(array $criteria, array $orderBy = null)
 * @method SipregsTriger[]    findAll()
 * @method SipregsTriger[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SipregsTrigerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SipregsTriger::class);
    }

    // /**
    //  * @return SipregsTriger[] Returns an array of SipregsTriger objects
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
    public function findOneBySomeField($value): ?SipregsTriger
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
