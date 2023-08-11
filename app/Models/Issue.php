<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    protected $table = 'pijmit_issues';

    protected $primaryKey = 'id';
    protected $fillable = [
        'vol_no',
        'issue_no',
        'year',
        'paper_title',
        'authors',
        'created_by',
        'modified_by',
        'page_nos',
        'issue_type',
        'status'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
