<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected const STATUS_ACCEPTED = 1;
    protected const STATUS_PENDING = 2;
    protected const STATUS_REJECTED = 3;

    protected $fillable = [
        'id',
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function scopeAccepted($query): Builder
    {
        return $query->where('id', self::STATUS_ACCEPTED);
    }

    public function scopePending($query): Builder
    {
        return $query->where('id', self::STATUS_PENDING);
    }

    public function scopeRejected($query): Builder
    {
        return $query->where('id', self::STATUS_REJECTED);
    }
}
