<?php

namespace App\Repository;

use App\Entity\Graphism;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Graphism|null find($id, $lockMode = null, $lockVersion = null)
 * @method Graphism|null findOneBy(array $criteria, array $orderBy = null)
 * @method Graphism[]    findAll()
 * @method Graphism[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraphismRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Graphism::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Graphism $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Graphism $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

     /**
      * @return Graphism[] Returns an array of Graphism objects
      */
    
      public function findByGraphismCatégorie($value)
      {
          
        $qb= $this->createQueryBuilder('g');
        if ($value) {
            $qb->join('g.categorie', 'dc')
            ->where('dc.categorieName= :val')
            ->setParameter('val',$value);
        }
        $qb->orderBy('g.id', 'DESC');
        return  $qb->getQuery()
          ->getResult()
      ;
      }
    

    /*
    public function findOneBySomeField($value): ?Graphism
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
