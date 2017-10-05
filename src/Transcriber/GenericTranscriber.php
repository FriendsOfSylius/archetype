<?php

namespace Fosyl\ArchetypeOne\Transcriber;

use Fosyl\ArchetypeOne\Archetype;
use Fosyl\ArchetypeOne\Composition;
use Fosyl\ArchetypeOne\Variant;
use Fosyl\ArchetypeOne\Transcriber;

/**
 * Generic in this sense means the object is transcribed with the options and attributes, but none of their
 * values are set, thus the object is "unbranded".
 *
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
class GenericTranscriber implements Transcriber
{
    /**
     * @var GenericCompositionTranscriber
     */
    private $compositionTranscriber;

    /**
     * @var GenericVariantTranscriber
     */
    private $variantTranscriber;

    /**
     * @param GenericCompositionTranscriber $compositionTranscriber
     * @param GenericVariantTranscriber $variantTranscriber
     */
    public function __construct(GenericCompositionTranscriber $compositionTranscriber, GenericVariantTranscriber $variantTranscriber)
    {
        $this->compositionTranscriber = $compositionTranscriber;
        $this->variantTranscriber = $variantTranscriber;
    }

    final public static function quickInitialize(): self
    {
        return new self(new GenericCompositionTranscriber(), new GenericVariantTranscriber());
    }

    /**
     * @param Archetype $unit
     */
    public function express(Archetype $unit)
    {
        if (null === $archetype = $unit->getParent()) {
            return;
        }

        if ($unit instanceof Composition) {
            $this->compositionTranscriber->express($unit);
        }

        if ($unit instanceof Variant) {
             $this->variantTranscriber->express($unit);
        }
    }
}
