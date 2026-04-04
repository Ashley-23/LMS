<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'formation_id'])]
class Chapter extends Model
{
    use HasUuids, HasFactory;
    
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

    public function subsections()
    {
        return $this->hasMany(Subsection::class);
    }
}
