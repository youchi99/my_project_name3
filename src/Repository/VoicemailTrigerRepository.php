<?php

namespace App\Repository;

use App\Entity\VoicemailTriger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VoicemailTriger|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoicemailTriger|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoicemailTriger[]    findAll()
 * @method VoicemailTriger[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoicemailTrigerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoicemailTriger::class);
    }

    // /**
    //  * @return VoicemailTriger[] Returns an array of VoicemailTriger objects
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
    public function findOneBySomeField($value): ?VoicemailTriger
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
