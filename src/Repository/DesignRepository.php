<?php

namespace App\Repository;

use App\Entity\Design;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Design|null find($id, $lockMode = null, $lockVersion = null)
 * @method Design|null findOneBy(array $criteria, array $orderBy = null)
 * @method Design[]    findAll()
 * @method Design[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DesignRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Design::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Design $entity, bool $flush = true): void
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
    public function remove(Design $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

     /**
      * @return Design[] Returns an array of Design objects
      */
    
    public function findByDesignId($value=0)
    {
        
        return $this->createQueryBuilder('d')
            ->orderBy('d.id', 'DESC')
            ->setFirstResult($value)
            ->setMaxResults(4)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Design
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
