<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['content', 'question_id'])]
class Answer extends Model
{
    use HasUuids;
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
