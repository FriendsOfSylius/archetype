<?php

namespace Fosyl\ArchetypeOne\Option;

use Fosyl\ArchetypeOne\Option;
use Fosyl\ArchetypeOne\Value;

class GenericOption implements Option
{
    private $identificationCode;
    /**
     * @var Value\OptionValue
     */
    private $value;

    public function __construct($identificationCode, Value\OptionValue $value = null)
    {
        $this->identificationCode = $identificationCode;
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getIdentificationCode(): string
    {
        return $this->identificationCode;
    }

    /**
     * @return Value
     */
    public function getValue(): ?Value
    {
        return $this->value;
    }
}
