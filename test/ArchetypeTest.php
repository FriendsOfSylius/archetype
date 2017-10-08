<?php

namespace test\Fosyl\ArchetypeOne;

use Fosyl\ArchetypeOne\Archetype\OptionsAndAttributesArchetype;
use Fosyl\ArchetypeOne\Marker\Facet\GenericFacet;
use Fosyl\ArchetypeOne\Marker\Selection\GenericSelection;
use Fosyl\ArchetypeOne\Transcriber\GenericTranscriber;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ArchetypeTest extends TestCase
{
    public function testThatNewArchetypesAreTranscribed()
    {
        $shoeArchetype = new OptionsAndAttributesArchetype('Shoe', [
            'color' => new GenericFacet('color'),
        ], [
            'size'  => new GenericSelection('size'),
        ]);

        $shoeProduct = OptionsAndAttributesArchetype::blank('Trainers', $shoeArchetype);
        Assert::assertNull($shoeProduct->getSingleFacet('color'));

        $transcription = GenericTranscriber::quickInitialize();
        $transcription->express($shoeProduct);

        Assert::assertNotNull($shoeProduct->getSingleFacet('color'));
        Assert::assertNotNull($shoeProduct->getSingleSelection('size'));
    }
}
