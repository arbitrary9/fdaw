<?php

namespace App\Repository;

use App\Entity\Component;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Component|null find($id, $lockMode = null, $lockVersion = null)
 * @method Component|null findOneBy(array $criteria, array $orderBy = null)
 * @method Component[]    findAll()
 * @method Component[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComponentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Component::class);
    }

    public function findByName(string $name) : array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT c.*, p.name as product FROM component c
            LEFT JOIN product p ON p.id = c.product_id 
            WHERE c.name LIKE :name
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['name' => '%'.$name.'%']);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }
}
