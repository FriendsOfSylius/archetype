<?php

namespace Fosyl\ArchetypeOne\Marker\Facet;

use Fosyl\ArchetypeOne\Gene\Attribute;
use Fosyl\ArchetypeOne\Marker\Facet;

class GenericFacet implements Facet
{
    /**
     * @var string
     */
    private $identificationCode;

    /**
     * @var Attribute|null
     */
    private $attribute;

    /**
     * @param string $identificationCode
     * @param Attribute|null $attribute
     */
    public function __construct(string $identificationCode, Attribute $attribute = null)
    {
        $this->identificationCode = $identificationCode;
        $this->attribute = $attribute;
    }

    public function setAttribute(Attribute $attribute)
    {
        $this->attribute = $attribute;
        $attribute->setFacet($this);
    }

    /**
     * @return null|Attribute
     */
    public function getAttribute(): ?Attribute
    {
        return $this->attribute;
    }

    /**
     * @return string
     */
    public function getIdentificationCode(): string
    {
        return $this->identificationCode;
    }
}
