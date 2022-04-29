<?php

declare(strict_types=1);

namespace Crell\SettingsPrototype\SchemaType;

use Crell\SettingsPrototype\EmailValidator;
use Crell\SettingsPrototype\Widgets\TextField;
use Crell\SettingsPrototype\Validator\TypeValidator;
use Crell\SettingsPrototype\Widgets\Widget;

class EmailType implements SchemaType
{
    public function defaultValidators(): array
    {
        return [
            new TypeValidator('string'),
            // new EmailValidator(),
        ];
    }

    public function defaultWidget(): Widget
    {
        return new TextField();
    }
}