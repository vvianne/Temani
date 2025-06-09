<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiariHamil extends Model
{
     use HasFactory;

    protected $table = 'diari_hamil';

    protected $fillable = [
        'user_id',
        'tanggal',
        'catatan',
        'perasaan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
