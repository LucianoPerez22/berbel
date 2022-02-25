<?php

namespace App\Repository;

use App\Entity\ParteDiario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ParteDiario|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParteDiario|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParteDiario[]    findAll()
 * @method ParteDiario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParteDiarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParteDiario::class);
    }
        
    public function findByFechas($empleado, $desde, $hasta)
    {      
        $data = $this->createQueryBuilder('p')
            ->andWhere('p.empleado = :empleado AND p.Fecha >= :desde AND p.Fecha <= :hasta')
            ->setParameter('empleado', $empleado)
            ->setParameter('desde', $desde)
            ->setParameter('hasta', $hasta)
            ->orderBy('p.Fecha', 'ASC')            
            ->getQuery()
            ->getResult()
        ;
        
        $info = [];
        foreach ($data as $key => $value) {
            $info[$key]['id'] = $value->getId();
            $info[$key]['empleado']['nombre'] = $value->getEmpleado()->getName();
            $info[$key]['empleado']['direccion'] = $value->getEmpleado()->getAddress();
            $info[$key]['empleado']['email'] = $value->getEmpleado()->getEmail();
            $info[$key]['area'] = $value->getArea()->getName();
            $info[$key]['fecha'] = $value->getFecha()->format('Y-m-d');
            $info[$key]['numero'] = $value->getNumero();
           
            $i=0;
            foreach ($value->getDatos() as $key1 => $value1) {                                
                $info[$key]['datos'][$i]['clave'] = $key1;
                $info[$key]['datos'][$i]['valor'] = $value1;
                $i++;
            }
        }

        return $info;
        
    }      
}
