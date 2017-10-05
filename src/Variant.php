<?php

namespace Fosyl\ArchetypeOne;

use Fosyl\ArchetypeOne\Marker\Selection;

interface Variant
{
    /**
     * @return Selection[]
     */
    public function getAllSelections(): array;

    /**
     * @param string $identifier
     *
     * @return Selection
     */
    public function getSingleSelection(string $identifier): ?Selection;

    /**
     * @param Selection $selection
     */
    public function assignSelection(Selection $selection);
}
