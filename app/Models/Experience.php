<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $guarded = [];

    public function getYearOnlyRangeAttribute()
    {
        $parts = explode(' - ', $this->year_range);
        $start = isset($parts[0]) && $parts[0] ? date('Y', strtotime($parts[0])) : '';
        $end = '';
        if (isset($parts[1]) && $parts[1]) {
            $end = $parts[1] === 'Present' ? 'Present' : date('Y', strtotime($parts[1]));
        }
        return $start . ($end ? ' - ' . $end : '');
    }
}
