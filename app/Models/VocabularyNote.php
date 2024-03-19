<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocabularyNote extends Model
{
  use HasFactory;

  protected $fillable = [
    'title', 'user_id', 'meaning', 'gana', 'kanji', 'is_public', 'is_creator'
  ];

  protected $casts = [
    'meaning' => 'array',
    'gana' => 'array',
    'kanji' => 'array',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
