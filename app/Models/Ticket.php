<?php

namespace App\Models;
use App\Models\Member;
use App\Models\gsacbulan;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Ticket extends Model
{
    use HasFactory, HasRoles, LogsActivity;
    
    protected $fillable = ['ticket_code','member_id','asign_by','check_by'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['ticket_code', 'asign_by']);
        // Chain fluent methods for configuration options
    }
    public function member()
    {
        return $this->belongsTo(Member::class);

    }
  
   
 
    
  
}
