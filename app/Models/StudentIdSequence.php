<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentIdSequence extends Model
{
    protected $fillable = ['year', 'last_sequence'];

    public static function getNextSequence($year)
    {
        return \DB::transaction(function () use ($year) {
            $sequence = self::where('year', $year)->lockForUpdate()->first();
            
            if (!$sequence) {
                $sequence = self::create([
                    'year' => $year,
                    'last_sequence' => 0
                ]);
            }
            
            $sequence->increment('last_sequence');
            
            return $sequence->last_sequence;
        });
    }
}
