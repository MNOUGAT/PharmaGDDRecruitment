<?php

namespace App\Repository;

use App\Entity\Brand;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Brand|null find($id, $lockMode = null, $lockVersion = null)
 * @method Brand|null findOneBy(array $criteria, array $orderBy = null)
 * @method Brand[]    findAll()
 * @method Brand[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrandRepository extends EntityRepository implements BrandInterfaceRepository
{
    public function findProductsbyBrand($id): ?Brand
    {
        /*return $this->createQueryBuilder('b')
            ->innerJoin('b.products', 'p', 'WHERE', 'p.brand = :brandId')
            ->setParameter('brandId', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;*/
    }
}
