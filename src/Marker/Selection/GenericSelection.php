<?php

namespace Fosyl\ArchetypeOne\Marker\Selection;

use Fosyl\ArchetypeOne\Gene\Option;
use Fosyl\ArchetypeOne\Marker\Selection;

class GenericSelection implements Selection
{
    /**
     * @var string
     */
    private $identificationCode;

    /**
     * @var Option
     */
    private $option;

    /**
     * @param string $identificationCode
     * @param Option|null $option
     */
    public function __construct($identificationCode, Option $option = null)
    {
        $this->identificationCode = $identificationCode;
        $this->option = $option;
    }

    /**
     * @return mixed
     */
    public function getIdentificationCode(): string
    {
        return $this->identificationCode;
    }

    /**
     * @return Option
     */
    public function getOption(): ?Option
    {
        return $this->option;
    }

    /**
     * @param Option $option
     */
    public function setOption(Option $option)
    {
        $this->option = $option;
        $option->setSelection($this);
    }
}
