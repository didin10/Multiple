<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';

    public function get_booking()
    {
    	return $this->belongsTo(Pembokingan::class, 'bkg_id','id_booking');
    }
}
