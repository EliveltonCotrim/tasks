<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckListItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'task_check_lists_id',
        'description',
        'finished',
    ];

    public function taskCheckList(): BelongsTo
    {
        return $this->belongsTo(TaskCheckList::class);
    }
}
