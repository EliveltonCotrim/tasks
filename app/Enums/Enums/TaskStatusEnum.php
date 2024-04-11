<?php

namespace App\Enums\Enums;

enum TaskStatusEnum: int
{
    case Pending = 1;
    case InProgress = 2;
    case Completed = 3;

    public function getName(): string
    {
        return match ($this) {
            self::Pending => 'Pendente',
            self::InProgress => 'Em Progresso',
            self::Completed => 'Concluído',
            default => 'Unknown'
        };
    }

    public function getStyle(): string{
        return match($this){
            self::Pending => 'slate',
            self::InProgress => 'sky',
            self::Completed => 'green',
            default => null
        };
    }
}
