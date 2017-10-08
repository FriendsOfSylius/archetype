<?php

namespace spec\Fosyl\ArchetypeOne\Builder;

use Fosyl\ArchetypeOne\Transcriber;
use PhpSpec\ObjectBehavior;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
class DefaultBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Transcriber\GenericTranscriber::class);
    }

    function it_is_an_archetype_builder()
    {
        $this->shouldImplement(Transcriber::class);
    }
}
