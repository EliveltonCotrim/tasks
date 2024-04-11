<?php

namespace App\Models;

use App\Enums\Enums\TaskClassificationEnum;
use App\Enums\Enums\TaskStatusEnum;
use App\Enums\Enums\TaskTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'project_id',
        'name',
        'description',
        'classification',
        'status',
        'type',
        'month',
        'value',
        'term',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'classification' => TaskClassificationEnum::class,
            'status' => TaskStatusEnum::class,
            'type' => TaskTypeEnum::class,
        ];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function tasksTimes(): HasMany
    {
        return $this->hasMany(TaskTime::class);
    }

    public function taskChecklists(): HasMany
    {
        return $this->hasMany(TaskCheckList::class);
    }
}
