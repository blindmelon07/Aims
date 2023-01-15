<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gsacbulan extends Model
{
    use HasFactory;
    protected $fillable=[

        'clientid',
        'fullname',
        'address',
        'dateofbirth',
        'age',
        'gender',
        'cellnumber',
        'branch_name',

];

public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
