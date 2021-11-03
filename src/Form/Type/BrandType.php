<?php

declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\Brand;
use Symfony\Component\Form\AbstractType;
//use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\FormBuilderInterface;

final class BrandType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('state')
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'brand';
    }

}