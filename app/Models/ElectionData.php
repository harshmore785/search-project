<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class ElectionData extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'election_data';

    protected $fillable = ['fname', 'lname', 'epic_number', 'part_no', 'part_serial_no'];

    public static function booted()
    {
        static::created(function (self $user) {
            if (Auth::check()) {
                self::where('id', $user->id)->update([
                    'created_by' => Auth::user()->id,
                ]);
            }
        });
        static::updated(function (self $user) {
            if (Auth::check()) {
                self::where('id', $user->id)->update([
                    'updated_by' => Auth::user()->id,
                ]);
            }
        });
        static::deleting(function (self $user) {
            if (Auth::check()) {
                self::where('id', $user->id)->update([
                    'deleted_by' => Auth::user()->id,
                ]);
            }
        });
    }
}
