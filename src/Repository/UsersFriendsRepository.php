<?php

namespace App\Repository;

use App\Entity\UsersFriends;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsersFriends|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsersFriends|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsersFriends[]    findAll()
 * @method UsersFriends[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersFriendsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsersFriends::class);
    }

    // /**
    //  * @return UsersFriends[] Returns an array of UsersFriends objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsersFriends
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
