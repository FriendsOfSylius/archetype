<?php

namespace Fosyl\ArchetypeOne\Gene\Attribute;

use Fosyl\ArchetypeOne\Gene\Attribute;
use Fosyl\ArchetypeOne\Marker\Facet;

class GenericAttribute implements Attribute
{
    /**
     * @var Facet
     */
    private $facet;
    /**
     * @var null
     */
    private $value;

    /**
     * @param Facet|null $facet
     * @param null|mixed $value
     */
    public function __construct(Facet $facet = null, $value = null)
    {
        $this->facet = $facet;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param Facet $facet
     */
    public function setFacet(Facet $facet)
    {
        $this->facet = $facet;
    }
}
