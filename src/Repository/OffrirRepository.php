<?php

namespace App\Repository;

use App\Entity\Offrir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Offrir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offrir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offrir[]    findAll()
 * @method Offrir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffrirRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Visiteur::class);
    }

    // /**
    //  * @return Visiteur[] Returns an array of Visiteur objects
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

  
    public function findByRapNum($vis,$rap): ?Visiteur
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.VIS_MATRICULE = :vis')
            ->andWhere('v.RAP_NUM = :rap')
            ->setParameter('vis', $vis)
            ->setParameter('rap', $rap)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }


  
}