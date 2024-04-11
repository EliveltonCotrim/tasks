<?php

namespace App\Enums\Enums;

enum TaskClassificationEnum: int
{
    case Light = 1;
    case Medium = 2;
    case Urgent = 3;


    public function getName(): string
    {
        return match ($this) {
            self::Light => 'Leve',
            self::Medium => 'Médio',
            self::Urgent => 'Urgente',
            default => 'Unknown'
        };
    }

    public function getStyle(): string{
        return match($this){
            self::Light => 'green',
            self::Medium => 'amber',
            self::Urgent => 'red',
            default => null
        };
    }
}
