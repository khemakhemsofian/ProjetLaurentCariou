<?php

namespace App\Repository;

use App\Entity\DesignCategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DesignCategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method DesignCategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method DesignCategorie[]    findAll()
 * @method DesignCategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DesignCategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DesignCategorie::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(DesignCategorie $entity, bool $flush = true): void
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
    public function remove(DesignCategorie $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return DesignCategorie[] Returns an array of DesignCategorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DesignCategorie
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
