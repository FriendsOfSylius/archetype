<?php

namespace Fosyl\ArchetypeOne\Transcription;

use Fosyl\ArchetypeOne\Archetype;
use Fosyl\ArchetypeOne\Transcription;
use Fosyl\ArchetypeOne\Value;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
class DefaultTranscription implements Transcription
{
    public function express(Archetype $unit)
    {
        if (null === $archetype = $unit->getParent()) {
            return;
        }

        $this->expressAttributes($archetype, $unit);
        // $this->expressOptions($archetype, $unit);
    }

    /**
     * @param Archetype $carrier
     * @param Archetype $unit
     */
    private function expressAttributes(Archetype $carrier, Archetype $unit)
    {
        foreach ($carrier->getAllAttributes() as $attribute) {
            if (null === $unit->getSingleAttribute($attribute->getIdentificationCode())) {
                // @todo use factory
                $attribute->setValue(new Value\AttributeValue());

                $unit->assignAttribute($attribute);
            }
        }
    }
}
