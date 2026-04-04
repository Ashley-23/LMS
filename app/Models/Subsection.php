<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'content', 'chapter_id'])]
class Subsection extends Model
{
    use HasUuids, HasFactory;

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
