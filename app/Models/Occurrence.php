<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\OccurrenceStatus;
use App\Enums\OccurrenceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Occurrence extends Model
{
    protected $table = 'occurrence';

    protected $fillable = [
        'description', 'status', 'closed_at', 'user_id', 'type', 'unity_id'
    ];

    protected $casts = [
        'status' => OccurrenceStatus::class,
        'type' => OccurrenceType::class
    ];

    public function unity(): BelongsTo
    {
        return $this->belongsTo(Unity::class);
    }

    public function complainer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
