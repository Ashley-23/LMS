<?php

namespace App\Enums;

use App\Traits\EnumToolsTrait;

enum FormationLevelEnum: string
{
    use EnumToolsTrait;

    case BEGINNER = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case ADVANCED = 'advanced';

    public function displayName(): string
    {
        return match ($this) {
            self::BEGINNER => 'Débutant',
            self::INTERMEDIATE => 'Intermédiaire',
            self::ADVANCED => 'Avancé',
        };
    }
}