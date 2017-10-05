<?php

namespace test\Fosyl\ArchetypeOne;

use Fosyl\ArchetypeOne\Archetype;
use Fosyl\ArchetypeOne\Attribute;
use Fosyl\ArchetypeOne\Transcription\DefaultTranscription;
use Fosyl\ArchetypeOne\Option;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ArchetypeTest extends TestCase
{
    public function testThatItWorks()
    {
        $shoeArchetype = new Archetype\OptionsAndAttributesArchetype('Shoe', [
            'color' => new Attribute\GenericAttribute('color'),
        ], [
            'size'  => new Option\GenericOption('size'),
        ]);

        $showProduct = Archetype\OptionsAndAttributesArchetype::blank('Trainers', $shoeArchetype);
        Assert::assertNull($showProduct->getSingleAttribute('color'));

        $transcription = new DefaultTranscription();
        $transcription->express($showProduct);

        Assert::assertNotNull($showProduct->getSingleAttribute('color'));
    }
}
