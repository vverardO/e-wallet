<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    protected const TYPE_EXPENSE = 1;
    protected const TYPE_CHECK = 2;

    use HasFactory;

    protected $fillable = [
        'description',
        'image',
        'status_id',
        'user_id',
        'amount',
        'date',
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function getAmountFormattedAttribute(): string
    {
        return $this->isExpense() ? '- '.$this->amount : $this->amount;
    }

    public function getExpenseType(): int
    {
        return self::TYPE_EXPENSE;
    }

    public function getChecksType(): int
    {
        return self::TYPE_CHECK;
    }

    public function setExpenseTypeAttribute()
    {
        return $this->type = self::TYPE_EXPENSE;
    }

    public function setChecksTypeAttribute()
    {
        return $this->type = self::TYPE_CHECK;
    }

    public function setStatusPendingAttribute()
    {
        return $this->status_id = Status::pending()->first()->id;
    }

    public function setStatusAcceptedAttribute()
    {
        return $this->status_id = Status::accepted()->first()->id;
    }

    public function setStatusRejectedAttribute()
    {
        return $this->status_id = Status::rejected()->first()->id;
    }

    public function isCheck(): bool
    {
        return $this->type == self::TYPE_CHECK;
    }

    public function isExpense(): bool
    {
        return $this->type == self::TYPE_EXPENSE;
    }

    public function scopeExpenses($query): Builder
    {
        return $query->where('type', self::TYPE_EXPENSE);
    }

    public function scopeChecks($query): Builder
    {
        return $query->where('type', self::TYPE_CHECK);
    }

    public function scopePending($query): Builder
    {
        return $query->where('status_id', Status::pending()->first()->id);
    }

    public function scopeRejected($query): Builder
    {
        return $query->where('status_id', Status::rejected()->first()->id);
    }

    public function scopeAccepted($query): Builder
    {
        return $query->where('status_id', Status::accepted()->first()->id);
    }
    
    public function scopeFromAuthenticatedUser($query): Builder
    {
        return Auth::user()->isNotAdmin() ? $query->where('user_id', Auth::id()) : $query;
    }
}
