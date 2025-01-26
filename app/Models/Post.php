<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['content', 'file', 'schedule_time', 'account_id'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'schedule_time' => 'datetime:Y-m-d H:i',
        ];
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
