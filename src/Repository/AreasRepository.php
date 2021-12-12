<?php

namespace App\Repository;

use App\Entity\Areas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Areas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Areas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Areas[]    findAll()
 * @method Areas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AreasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Areas::class);
    }

    public function findAllWithFilterAndOrderQuery(array $filters, array $order=null)
    {       
        $q = $this->createQueryBuilder('a')
            ->select('a');          
            
            if (!empty($filters['name'])) {
                $name = '%' . $filters['name'] . '%';
                $q->andWhere('a.name LIKE :name')
                ->setParameter('name', $name);
            }
           
        return $q->getQuery();                                            
    }    
}
