<?php

namespace Fosyl\ArchetypeOne\Attribute;

use Fosyl\ArchetypeOne\Attribute;
use Fosyl\ArchetypeOne\Value;
use Fosyl\ArchetypeOne\Value\AttributeValue;

class GenericAttribute implements Attribute
{
    /**
     * @var string
     */
    private $identificationCode;
    /**
     * @var AttributeValue|null
     */
    private $value;

    /**
     * @param string $identificationCode
     * @param AttributeValue|null $value
     */
    public function __construct(string $identificationCode, AttributeValue $value = null)
    {
        $this->identificationCode = $identificationCode;
        $this->value = $value;
    }

    public function setValue(AttributeValue $value)
    {
        $value->setAttribute($this);

        $this->value = $value;
    }

    /**
     * @return Value
     */
    public function getValue(): ?Value
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getIdentificationCode(): string
    {
        return $this->identificationCode;
    }

}
