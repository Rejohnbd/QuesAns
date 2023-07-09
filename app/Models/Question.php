<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function host()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y g:i A');
    }

    public function getAssignTimeAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y g:i A');
    }

    public function getAnswerTimeAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y g:i A');
    }
}
