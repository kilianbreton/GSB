<?php

namespace App\Repository;

use App\Entity\Offrir;
use App\Entity\Visiteur;
use App\Entity\RapportVisite;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Visiteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Visiteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Visiteur[]    findAll()
 * @method Visiteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RapportVisiteRepository extends ServiceEntityRepository
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

     
    public function findByVisMatricule($vis)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.VIS_MATRICULE = :vis')
            ->setParameter('vis', $vis)
           // ->orderBy("v.RAP_NUM","DESC")
            ->add('orderBy', 'v.RAP_NUM DESC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findByRapNum($visrap)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.VIS_MATRICULE = :vis')
            ->andWhere('v.RAP_NUM = :rap')
            ->setParameter('vis', $visrap[0])
            ->setParameter('rap', $visrap[1])
           // ->orderBy("v.RAP_NUM","DESC")
            ->add('orderBy', 'v.RAP_NUM DESC')
            ->getQuery()
            ->getResult()
            ;
    }
   

   
    public function findByNumVisMed($num, $vis)
    {
        return $this->createQueryBuilder('v')
            ->se
            ->andWhere('v.RAP_NUM = :num')
            ->andWhere('v.VIS_MATRICULE = :vis')
            ->andWhere('v.MED_DEPOTLEGAL = :med')
            ->setParameter('num', $num)
            ->setParameter('vis', $vis)
            ->orderBy("v.RAP_NUM","DESC")
            ->getQuery()
            ->getResult()
            ;
    }


    
}