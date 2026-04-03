<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'subsection_id'])]
class Quizz extends Model
{
    use HasUuids;

    public function subsection()
    {
        return $this->belongsTo(Subsection::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
