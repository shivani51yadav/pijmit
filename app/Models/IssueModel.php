<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueModel extends Model
{
    use HasFactory;

    protected $table = 'issues';

    protected $primaryKey = 'issue_id';
    protected $fillable = [
        'issue_id',
        'vol_id',
        'created_by',
        'modified_by',
        'issue_type',
        'status',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    public function volume()
    {
        return $this->belongsTo(VolumeModel::class, 'vol_id', 'vol_id');
    }
    public function paper()
    {
        return $this->hasMany(PaperModel::class, 'issue_id', 'issue_id');
    }
}
