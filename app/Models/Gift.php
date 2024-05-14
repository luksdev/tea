<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'is_selected', 'invite_code_id'];

    public function inviteCode()
    {
        return $this->belongsTo(InviteCode::class);
    }
}
