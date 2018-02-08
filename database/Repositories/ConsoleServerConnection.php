<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * ConsoleServerConnection
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConsoleServerConnection extends EntityRepository
{
    /**
     * Get all console server connections (or a particular one) for listing on the frontend CRUD
     *
     * @see \IXP\Http\Controllers\Doctrine2Frontend
     *
     *
     * @param \stdClass $feParams
     * @param int|null $id
     * @return array Array of console server connections (as associated arrays) (or single element if `$id` passed)
     */
    public function getAllForFeList( \stdClass $feParams, int $id = null )
    {
        $dql = "SELECT  csc.id AS id,
                        csc.port AS port, 
                        csc.speed AS speed,
                        csc.notes AS notes, 
                        c.name AS customer, 
                        c.id AS customerid,
                        csc.parity AS parity, 
                        csc.stopbits AS stopbits,
                        csc.autobaud AS autobaud,
                        csc.flowcontrol AS flowcontrol,
                        csc.description AS description
                FROM Entities\\ConsoleServerConnection csc
                LEFT JOIN csc.Customer c
                
                WHERE 1 = 1";

        if( $id ) {
            $dql .= " AND csc.id = " . (int)$id;
        }

        if( isset( $feParams->listOrderBy ) ) {
            $dql .= " ORDER BY " . $feParams->listOrderBy . ' ';
            $dql .= isset( $feParams->listOrderByDir ) ? $feParams->listOrderByDir : 'ASC';
        }

        $query = $this->getEntityManager()->createQuery( $dql );

        return $query->getArrayResult();
    }
}
