<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    public static function findByCode($code)
    {
    	return self::where('code', $code)->first();
    	;
    }

    public function discount($total)
    {
    	if ($this->type = 'fixed') {
    		return $this->value;
    	}else {
    		return 0;
    	}
    }
}
