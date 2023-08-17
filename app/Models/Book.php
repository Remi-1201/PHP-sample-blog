<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function scopeTodaySearch($query)
    {
        return $query->whereBetween('created_at', [Carbon::today(), Carbon::tomorrow()]);
    }

    public function scopeTitleSearch($query, $part)
    {
        return $query->where('title', 'like', "%$part%");
    }

    public function scopeTodayTitleSearch($query, $title)
    {
        return $query->whereBetween('created_at', [Carbon::today(), Carbon::tomorrow()])->where('title', $title);
    }

    public function scopeData3($query)
    {
        return $query->limit(3);
    }
}
