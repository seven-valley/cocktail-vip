<?php

namespace App\Repository;

use App\Entity\Categ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Categ|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categ|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categ[]    findAll()
 * @method Categ[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categ::class);
    }

    // /**
    //  * @return Categ[] Returns an array of Categ objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Categ
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
