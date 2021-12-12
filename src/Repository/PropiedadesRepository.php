<?php

namespace App\Repository;

use App\Entity\Propiedades;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Propiedades|null find($id, $lockMode = null, $lockVersion = null)
 * @method Propiedades|null findOneBy(array $criteria, array $orderBy = null)
 * @method Propiedades[]    findAll()
 * @method Propiedades[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropiedadesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Propiedades::class);
    }

    public function findAllWithFilterAndOrderQuery(array $filters, array $order=null)
    {       
        $q = $this->createQueryBuilder('p')
            ->select('p');          
            
            if (!empty($filters['name'])) {
                $name = '%' . $filters['name'] . '%';
                $q->andWhere('p.name LIKE :name')
                ->setParameter('name', $name);
            }
            if (!empty($filters['area'])) {
                $idArea = $filters['area'];
                $q->andWhere('p.area = :area')
                ->setParameter('area', $idArea);
            }
           
        return $q->getQuery();                                            
    }        
}
