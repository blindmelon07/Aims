<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
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
