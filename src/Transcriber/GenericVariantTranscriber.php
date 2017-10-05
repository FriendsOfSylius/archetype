<?php

namespace Fosyl\ArchetypeOne\Transcriber;

use Fosyl\ArchetypeOne\Archetype;
use Fosyl\ArchetypeOne\Gene\Option\GenericOption;
use Fosyl\ArchetypeOne\Transcriber;
use Fosyl\ArchetypeOne\Variant;

class GenericVariantTranscriber implements Transcriber
{
    /**
     * @param Archetype $unit
     */
    public function express(Archetype $unit)
    {
        if (! $unit instanceof Variant) {
            throw new \InvalidArgumentException('Can only transcribe objects that can have variants.');
        }

        $parent = $unit->getParent();

        if (! $parent instanceof Variant) {
            throw new \DomainException('Cannot inherit selections or options from the parent that is not also a variant.');
        }

        $this->expressOptions($unit, $parent);
    }

    /**
     * @param Variant $unit
     * @param Variant $carrier
     */
    private function expressOptions(Variant $unit, Variant $carrier)
    {
        foreach ($carrier->getAllSelections() as $selection) {
            $selection->setOption(new GenericOption());

            $unit->assignSelection($selection);
        }
    }
}