<?php

namespace App\Repository;

use App\Entity\OfertaCandidat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OfertaCandidat|null find($id, $lockMode = null, $lockVersion = null)
 * @method OfertaCandidat|null findOneBy(array $criteria, array $orderBy = null)
 * @method OfertaCandidat[]    findAll()
 * @method OfertaCandidat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfertaCandidatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OfertaCandidat::class);
    }

    // /**
    //  * @return OfertaCandidat[] Returns an array of OfertaCandidat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OfertaCandidat
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
