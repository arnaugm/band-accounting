<?php

namespace RootDiamoons\BandAccountingBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

/**
 * ActivityRepository
 *
 */
class ActivityRepository extends EntityRepository
{
    public function getActivities($filter = null)
    {
        $qb = $this->createQueryBuilder('a')
            ->select('a')
//            ->setMaxResults(10)
            ->orderBy('a.dateValue', 'DESC')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);

        return $qb;
    }
}