<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * IrrdbPrefix
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class IrrdbPrefix extends EntityRepository
{
    /**
     * Utility function to get the prefixes a customer has for a given protocol
     *
     * Returns an array of associative arrays containing keys 'id' (database ID) and 'prefix'.
     *
     * If `$flatten` is true, returns a flat array or prefixes indexed by database ID.
     *
     * @param \Entities\Customer $cust The customer entity
     * @param int $protocol The IP protocol (4/6)
     * @param boolean $flatten Return a flat array indexed by database ID with value being the prefix string
     * @return array The number of prefixes found
     */
    public function getForCustomerAndProtocol( $cust, $protocol, $flatten = false ): array
    {
        $prefixes = $this->getEntityManager()->createQuery(
                    "SELECT p.id, p.prefix FROM \\Entities\\IrrdbPrefix p
                        WHERE p.Customer = :cust AND p.protocol = :protocol
                        ORDER BY p.prefix ASC, p.id ASC"
                )
                ->setParameter( 'cust', $cust )
                ->setParameter( 'protocol', $protocol )
                ->getScalarResult();

        if( !$flatten ) {
            return $prefixes;
        }

        $flat = [];
        foreach( $prefixes as $p ) {
            $flat[$p['id']] = $p['prefix'];
        }

        return $flat;
    }

    /**
     * Utility function to get the number of prefixes a customer has for a given protocol
     *
     * @param \Entities\Customer $cust The customer entity
     * @param int $protocol The IP protocol (4/6)
     * @return int The number of prefixes found
     */
    public function getCountForCustomerAndProtocol( $cust, $protocol )
    {
        return $this->getEntityManager()->createQuery(
                    "SELECT COUNT(p.id) FROM \\Entities\\IrrdbPrefix p
                        WHERE p.Customer = :cust AND p.protocol = :protocol"
                )
                ->setParameter( 'cust', $cust )
                ->setParameter( 'protocol', $protocol )
                ->getSingleScalarResult();
    }
}
