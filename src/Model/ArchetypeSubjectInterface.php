<?php

/*
 * This file is part of the Fosyl Archetype package.
 *
 * (c) Adam Elsodaney
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Archetype\Model;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Attribute\Model\AttributeSubjectInterface;

/**
 * The class that is the result of copies made from an archetype, should
 * implement this interface.
 *
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
interface ArchetypeSubjectInterface extends AttributeSubjectInterface
{
    /**
     * @return null|ArchetypeInterface
     */
    public function getArchetype();

    /**
     * @param ArchetypeInterface $archetype
     */
    public function setArchetype(ArchetypeInterface $archetype = null);

    // Methods copied from VariableInterface

    /**
     * @return bool
     */
    public function hasVariants();

    /**
     * @return Collection|object[]
     */
    public function getVariants();

    /**
     * @param Collection $variants
     */
    public function setVariants(Collection $variants);

    /**
     * @param object $variant
     */
    public function addVariant($variant);

    /**
     * @param object $variant
     */
    public function removeVariant($variant);

    /**
     * @param object $variant
     *
     * @return bool
     */
    public function hasVariant($variant);

    /**
     * @return bool
     */
    public function hasOptions();

    /**
     * @return Collection|object[]
     */
    public function getOptions();

    /**
     * @param Collection $options
     */
    public function setOptions(Collection $options);

    /**
     * @param object $option
     */
    public function addOption($option);

    /**
     * @param object $option
     */
    public function removeOption($option);

    /**
     * @param object $option
     *
     * @return bool
     */
    public function hasOption($option);
}
