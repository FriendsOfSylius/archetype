<?php

namespace Fosyl\ArchetypeOne\Archetype;

use Fosyl\ArchetypeOne\Archetype;
use Fosyl\ArchetypeOne\Marker\Facet;
use Fosyl\ArchetypeOne\Marker\Selection;
use Fosyl\ArchetypeOne\Composition;
use Fosyl\ArchetypeOne\Variant;

class OptionsAndAttributesArchetype implements Archetype, Variant, Composition
{
    /**
     * @var string
     */
    private $identificationCode;

    /**
     * @var Facet[]
     */
    private $facets;

    /**
     * @var Selection[]
     */
    private $selections;

    /**
     * @var null|Archetype
     */
    private $parent;

    /**
     * @param string $identificationCode
     * @param Facet[] $facets
     * @param Selection[] $selections
     * @param Archetype|null $parent
     */
    public function __construct($identificationCode, $facets = [], $selections = [], Archetype $parent = null)
    {
        $this->identificationCode = $identificationCode;
        $this->facets = $facets;
        $this->selections = $selections;
        $this->parent = $parent;
    }

    public static function blank($identificationCode, $parent)
    {
        return new self($identificationCode, [], [], $parent);
    }

    /**
     * @return string
     */
    public function getIdentificationCode(): string
    {
        return $this->identificationCode;
    }

    /**
     * @return Facet[]
     */
    public function getAllFacets(): array
    {
        return $this->facets;
    }

    /**
     * @param string $identifier
     *
     * @return Facet
     */
    public function getSingleFacet(string $identifier): ?Facet
    {
        return $this->facets[$identifier] ?? null;
    }

    /**
     * @param Facet $attribute
     */
    public function assignFacet(Facet $attribute)
    {
        $this->facets[$attribute->getIdentificationCode()] = $attribute;
    }

    /**
     * @return Selection[]
     */
    public function getAllSelections(): array
    {
        return $this->selections;
    }
    /**
     * @param string $identifier
     *
     * @return Selection
     */
    public function getSingleSelection(string $identifier): ?Selection
    {
        return $this->selections[$identifier];
    }

    /**
     * @param Selection $selection
     */
    public function assignSelection(Selection $selection)
    {
        $this->selections[$selection->getIdentificationCode()] = $selection;
    }

    /**
     * @return Archetype
     */
    public function getParent(): ?Archetype
    {
        return $this->parent;
    }
}
