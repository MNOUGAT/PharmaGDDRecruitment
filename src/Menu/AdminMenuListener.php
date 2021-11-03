<?php

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        
        $menu['catalog']->addChild('brand', array(
            'route' => 'app_admin_brand_index',
            'labelAttributes' => array('icon' => 'cube'),
        ))->setLabel('Marques');
    }
}