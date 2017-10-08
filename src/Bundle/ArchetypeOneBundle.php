<?php

namespace Fosyl\ArchetypeOne\Bundle\ArchetypeBundle;

use Sylius\Bundle\ResourceBundle\AbstractResourceBundle;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
class ArchetypeOneBundle extends AbstractResourceBundle
{
    /**
     * {@inheritdoc}
     */
    public function getSupportedDrivers()
    {
        return [
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM,
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getModelNamespace()
    {
        return 'Fosyl\ArchetypeOne\Archetype';
    }
}
