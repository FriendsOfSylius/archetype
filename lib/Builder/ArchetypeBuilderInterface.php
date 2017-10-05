<?php

/*
 * This file is part of the Fosyl Archetype package.
 *
 * (c) Adam Elsodaney
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Archetype\Builder;

use Sylius\Component\Archetype\Model\ArchetypeSubjectInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
interface ArchetypeBuilderInterface
{
    /**
     * Build the archetype of product.
     *
     * @param ArchetypeSubjectInterface $subject
     */
    public function build(ArchetypeSubjectInterface $subject);
}
