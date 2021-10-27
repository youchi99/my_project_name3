<?php

namespace App\Repository;

use App\Entity\SipusersTriger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SipusersTriger|null find($id, $lockMode = null, $lockVersion = null)
 * @method SipusersTriger|null findOneBy(array $criteria, array $orderBy = null)
 * @method SipusersTriger[]    findAll()
 * @method SipusersTriger[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SipusersTrigerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SipusersTriger::class);
    }

    // /**
    //  * @return SipusersTriger[] Returns an array of SipusersTriger objects
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
    public function findOneBySomeField($value): ?SipusersTriger
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
