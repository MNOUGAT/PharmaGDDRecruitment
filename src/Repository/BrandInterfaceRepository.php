<?php

namespace App\Repository;

use App\Entity\Brand;
use Sylius\Component\Resource\Repository\RepositoryInterface;

interface BrandInterfaceRepository extends RepositoryInterface
{
    public function findProductsbyBrand($id): ?Brand;

}