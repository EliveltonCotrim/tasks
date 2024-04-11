<?php

namespace App\Enums\Enums;

enum TaskTypeEnum: int
{
    case Bug = 1;
    case Improvement = 2;
    case Upgrade = 3;
    case Feature = 4;

    public function getName(): string
    {
        return match ($this) {
            self::Bug => 'Bug',
            self::Improvement => 'Improvement',
            self::Upgrade => 'Upgrade',
            self::Feature => 'Feature',
            default => 'Unknown'
        };
    }

    public function getStyle(): string
    {
        return match ($this) {
            self::Bug => 'orange',
            self::Improvement => 'purple',
            self::Upgrade => 'warning',
            self::Feature => 'green',
            default => null
        };
    }
}
