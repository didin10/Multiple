<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembokingan extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id_booking';

    public function get_member()
    {
    	return $this->belongsTo(Members::class, 'member_id','id');
    }
}
