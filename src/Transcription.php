<?php

namespace Fosyl\ArchetypeOne;

/**
 * The transcription is responsible for developing the archetypal object and
 * populating its characteristics from the attributes stored in its archetypal parent.
 *
 * @link https://en.wikipedia.org/wiki/Transcription_(biology)
 *
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
interface Transcription
{
    /**
     * @param Archetype $unit
     */
    public function express(Archetype $unit);
}
