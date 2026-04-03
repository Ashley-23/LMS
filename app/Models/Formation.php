<?php

namespace App\Models;

use App\Enums\FormationLevelEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

#[Fillable(['nom', 'description', 'level', 'duration', 'user_id'])]
class Formation extends Model
{
    use HasUuids; 
    
    protected function casts()
    {
        return [
            'level' => FormationLevelEnum::class,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
