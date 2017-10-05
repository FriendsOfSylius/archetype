<?php

namespace Fosyl\ArchetypeOne\Gene\Option;

use Fosyl\ArchetypeOne\Gene\Option;
use Fosyl\ArchetypeOne\Marker\Selection;

class GenericOption implements Option
{
    /**
     * @var Selection
     */
    private $selection;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @param Selection $selection
     * @param mixed|null $value
     */
    public function __construct(Selection $selection = null, $value = null)
    {
        $this->selection = $selection;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param Selection $selection
     */
    public function setSelection(Selection $selection)
    {
        $this->selection = $selection;
    }
}
