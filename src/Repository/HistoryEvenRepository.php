<?php

namespace App\Repository;

use App\Entity\HistoryEven;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HistoryEven|null find($id, $lockMode = null, $lockVersion = null)
 * @method HistoryEven|null findOneBy(array $criteria, array $orderBy = null)
 * @method HistoryEven[]    findAll()
 * @method HistoryEven[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoryEvenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoryEven::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(HistoryEven $entity, bool $flush = true): void
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
    public function remove(HistoryEven $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return HistoryEven[] Returns an array of HistoryEven objects
     */    
    public function orderByDate($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.date >= :val')
            ->setParameter('val', $value)
            ->orderBy('h.date', 'ASC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult()
        ;
    }
    
        /**
     * @return HistoryEven[] Returns an array of HistoryEven objects
     */    
    public function findByDate($dateMin)
    {

        return $this->createQueryBuilder('h')
            ->andWhere('h.date >= :val')
            ->setParameter('val', $dateMin)
            ->orderBy('h.date', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?HistoryEven
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
