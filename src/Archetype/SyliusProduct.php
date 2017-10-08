<?php

namespace Fosyl\ArchetypeOne\Archetype;

use Fosyl\ArchetypeOne\Archetype;
use Sylius\Component\Product\Model\Product;

class SyliusProduct extends Product implements Archetype
{
    /**
     * @var Archetype
     */
    protected $archetype;

    /**
     * @return string
     */
    public function getIdentificationCode(): string
    {
        return $this->getCode() ?: '';
    }

    /**
     * @return null|Archetype
     */
    public function getParent(): ?Archetype
    {
        return $this->getArchetype();
    }

    /**
     * @return Archetype
     */
    public function getArchetype(): Archetype
    {
        return $this->archetype;
    }

    /**
     * @param Archetype $archetype
     */
    public function setArchetype(Archetype $archetype)
    {
        $this->archetype = $archetype;
    }
}
