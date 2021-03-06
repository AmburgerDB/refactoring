<?php

namespace UR\DB\NewBundle\Entity;

use Doctrine\ORM\EntityRepository;
/**
 * IsGrandparentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class IsGrandparentRepository extends EntityRepository
{
   
    public function loadGrandparents($ID)
    {
        
        $queryBuilder = $this->_em->getRepository('NewBundle:IsGrandparent')->createQueryBuilder('gp');

        return $queryBuilder
                ->where('gp.grandChildID = :id')
                ->setParameter('id', $ID)
                ->getQuery()
                ->getResult();
    }
    
    public function loadGrandchildren($ID)
    {
        
        $queryBuilder = $this->_em->getRepository('NewBundle:IsGrandparent')->createQueryBuilder('gp');

        return $queryBuilder
                ->where('gp.grandParentID = :id')
                ->setParameter('id', $ID)
                ->getQuery()
                ->getResult();
    }
}