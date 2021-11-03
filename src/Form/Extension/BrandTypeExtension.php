<?php

declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\Brand;
use App\Form\Type\BrandType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

final class BrandTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->remove('state');
    }

    public static function getExtendedTypes(): iterable
    {
        return [BrandType::class];
    }
}