<?php

namespace App\Entity;

use App\Entity\Product\Product;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ResourceInterface;

interface BrandInterface extends ResourceInterface
{
    /**
     * @return Collection|Product[]
     */
    public function getProducts(): Collection;

    public function addProduct(Product $product): \App\Entity\Brand;

    public function removeProduct(Product $product): \App\Entity\Brand;
}