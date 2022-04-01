<?php

namespace App\Repository;

use App\Entity\GraphismCategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GraphismCategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method GraphismCategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method GraphismCategorie[]    findAll()
 * @method GraphismCategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraphismCategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GraphismCategorie::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(GraphismCategorie $entity, bool $flush = true): void
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
    public function remove(GraphismCategorie $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return GraphismCategorie[] Returns an array of GraphismCategorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GraphismCategorie
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
