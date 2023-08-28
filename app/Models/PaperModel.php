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
        'paper_no',
        'paper_title',
        'paper_name',
        'start_page_no',
        'end_page_no',
        'authors',
        'vol_no',
        'issue_no',
        'file_path',
        'created_by',
        'updated_by',
        'status'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    public function issue(){
        return $this->belongsTo(IssueModel::class,'issue_no','issue_no');
    }

}
