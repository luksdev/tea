<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InviteCode extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'used', 'guest_name'];

    public function gift()
    {
        return $this->hasOne(Gift::class);
    }
}
