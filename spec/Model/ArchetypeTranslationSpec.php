<?php

/*
 * This file is part of the Fosyl Archetype package.
 *
 * (c) Adam Elsodaney
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Component\Archetype\Model;

use PhpSpec\ObjectBehavior;
use Sylius\Component\Archetype\Model\ArchetypeTranslation;
use Sylius\Component\Archetype\Model\ArchetypeTranslationInterface;

/**
 * @author Gonzalo Vilaseca <gvilaseca@reiss.co.uk>
 *
 * @mixin ArchetypeTranslation
 */
final class ArchetypeTranslationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ArchetypeTranslation::class);
    }

    function it_is_an_Archetype()
    {
        $this->shouldImplement(ArchetypeTranslationInterface::class);
    }

    function it_has_no_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function it_has_no_name_by_default()
    {
        $this->getName()->shouldReturn(null);
    }

    function its_name_is_mutable()
    {
        $this->setName('T-Shirt size');
        $this->getName()->shouldReturn('T-Shirt size');
    }
}
