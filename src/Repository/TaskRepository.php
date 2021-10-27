<?php

namespace App\Repository;

use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\DriverManager;
use App\Entity\Task;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Task|null find($id, $lockMode = null, $lockVersion = null)
 * @method Task|null findOneBy(array $criteria, array $orderBy = null)
 * @method Task[]    findAll()
 * @method Task[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaskRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Task::class);
    }

    // /**
    //  * @return Task[] Returns an array of Task objects
    //  */
    
    public function findByExampleField()
    {
        
        
        $connectionParams = array(
            'url' => 'mysql://root:@127.0.0.1:3306/asterisk',
        );
        $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

        $queryBuilder = $conn->createQueryBuilder();

        $queryBuilder
        ->insert('users')
        ->values(
            array(
                'name' => '?',
                'password' => '?'
            )
        )
        ->setParameter(0, "mohamed")
        ->setParameter(1, "rootPass");
    }
    

    /*
    public function findOneBySomeField($value): ?Task
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
