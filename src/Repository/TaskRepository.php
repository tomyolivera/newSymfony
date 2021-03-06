<?php

namespace App\Repository;

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

    public function getUserTasks(int $userId)
    {
        return $this->createQueryBuilder('t')
            ->select()
            ->from(Task::class, 't')
            ->andWhere('t.user_id', ':userId')->setParameter('userId', $userId)
            ->getQuery()->getResult();
    }

    public function getTotalTasksByUser($id)
    {
        return $this->getEntityManager()
                ->createQuery('
                    SELECT count(task.id)
                    FROM App:Task task
                    WHERE task.user = :id
                ')
                ->setParameter(':id', $id)
                ->getResult();
    }

    public function deleteAll($id)
    {
        return $this->getEntityManager()
                ->createQuery('
                    DELETE
                    FROM App:Task task
                    WHERE task.user = :id
                ')
                ->setParameter(':id', $id)
                ->getResult();
    }

    // /**
    //  * @return Task[] Returns an array of Task objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

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
