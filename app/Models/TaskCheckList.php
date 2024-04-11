<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TaskCheckList extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'description',
        'date',
        'progress',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function checkListItems(): HasMany
    {
        return $this->hasMany(CheckListItem::class);
    }
}
