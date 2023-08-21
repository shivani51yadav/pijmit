<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolumeModel extends Model
{
    use HasFactory;
    protected $table ='volumes';

    protected $primaryKey = 'vol_id';
    protected $fillable = [
        'vol_id',
        'vol_no',
        'year',

    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    public function issues(){
        return $this->hasMany(IssueModel::class,'vol_id','vol_id');
    }
}
