<?php

namespace Fosyl\ArchetypeOne\Value;

use Fosyl\ArchetypeOne\Option;
use Fosyl\ArchetypeOne\Value;

class OptionValue implements Value
{
    /**
     * @var Option
     */
    private $option;

    /**
     * @var mixed
     */
    private $name;

    /**
     * OptionValue constructor.
     * @param Option $option
     * @param $name
     */
    public function __construct(Option $option, $name)
    {
        $this->option = $option;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getName();
    }
}
