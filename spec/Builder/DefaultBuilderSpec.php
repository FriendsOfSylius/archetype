<?php

namespace spec\Fosyl\ArchetypeOne\Builder;

use Fosyl\ArchetypeOne\Archetype;
use Fosyl\ArchetypeOne\Transcriptable;
use Fosyl\ArchetypeOne\Builder\DefaultTranscription;
use Fosyl\ArchetypeOne\Transcriber;
use Fosyl\ArchetypeOne\Transcription;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
class DefaultBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DefaultTranscription::class);
    }

    function it_is_an_archetype_builder()
    {
        $this->shouldImplement(Transcription::class);
    }
}
