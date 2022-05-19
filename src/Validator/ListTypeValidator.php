<?php

declare(strict_types=1);

namespace Crell\SettingsPrototype\Validator;

use Crell\SettingsPrototype\Hydratable;

class ListTypeValidator implements Validator
{
    use Hydratable;

    public function __construct(private readonly string $type)
    {
    }

    public function validate(mixed $value): ?ValidationError
    {
        foreach ($value as $v) {
            if (\get_debug_type($value) !== $this->type) {
                return new IncorrectType($this->type, \get_debug_type($value));
            }
        }

        return null;
    }
}
