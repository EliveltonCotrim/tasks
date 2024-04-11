<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManagerCompany extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $table = 'manager_has_company_pivot';
    protected $fillable = [
        'manager_id',
        'company_id',
    ];

    public function menager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
