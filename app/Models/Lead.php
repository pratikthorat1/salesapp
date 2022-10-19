<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'followup',
        'sitevisit',
        'alternate_phone',
        'project_id',
        'campaign_id',
        'user_id',
        'status_id',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
