<?php

namespace App\Repository;

use App\Entity\Praticien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Praticien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Praticien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Praticien[]    findAll()
 * @method Praticien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PraticienRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Praticien::class);
    }

    // /**
    //  * @return Praticien[] Returns an array of Praticien objects
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
    public function findOneBySomeField($value): ?Praticien
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
