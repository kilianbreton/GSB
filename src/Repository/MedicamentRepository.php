<?php

namespace App\Repository;

use App\Entity\Medicament;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Visiteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Visiteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Visiteur[]    findAll()
 * @method Visiteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedicamentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Medicament::class);
    }
    
}
