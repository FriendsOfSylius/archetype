<?php

namespace Fosyl\ArchetypeOne\Repository;

use Fosyl\ArchetypeOne\Archetype;

interface ArchetypeRepository
{
    /**
     * @param string $code
     *
     * @return Archetype|null
     */
    public function findOneByIdentificationCode(string $code): ?Archetype;

    /**
     * @param string $name
     *
     * @return Archetype|null
     */
    public function findOneByName(string $name): ?Archetype;
}
