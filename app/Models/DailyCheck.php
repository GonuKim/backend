<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DailyCheck extends Model
{
  use HasFactory;

  public $timestamps = false;

  protected $fillable = [
    'user_id',
    'checked_at'
  ];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
