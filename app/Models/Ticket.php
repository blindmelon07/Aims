<?php

namespace App\Models;

use App\Models\Member;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory, HasRoles;
    protected $fillable = ['members_id','ticket_code',];


    public function member()
    {
        return $this->belongsTo(Member::class);

    }
}
