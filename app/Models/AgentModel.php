<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentModel extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = 'agent';
    protected $fillable = [
        'agent_full_name', 'agent_email', 'agent_mobile_no', 'gender', 'joining_date',
        'nationalidpassport', 'agentcommision_no_general', 'agentcommision_no_life',
        'supervisor_name'

    ];
    protected $dates = ['deleted_at'];
}
