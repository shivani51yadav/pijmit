<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperModel extends Model
{
    use HasFactory;

    protected $table ='papers';

    protected $primaryKey = 'paper_id';
    protected $fillable = [
        'paper_title',
        'paper_no',
        'page_no',
        'authors',
        'vol_no',
        'issue_no',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    public function issue(){
        return $this->belongsTo(IssueModel::class,'issue_no','issue_no');
    }

    public function volume(){
        return $this->belongsTo(VolumeModel::class,'vol_no','vol_no');
    }

}
