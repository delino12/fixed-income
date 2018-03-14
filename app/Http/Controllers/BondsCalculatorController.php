<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BondsCalculatorController extends Controller
{
    // calculate bonds
    public function calculatePvalue(Request $request)
    {
    	/*
    	* pv = present value
    	* fv = face value
    	* ca = coupon amount
    	*/

    	# request data
    	$face_value 	= $request->value;
    	$coupon_rate 	= $request->rate;
    	$duration		= $request->years;

    	// calculate percent 
    	$r = $coupon_rate / 100; 

    	// get coupon amount
    	$ca = $face_value * $r;

    	// get PV value using PV =FV/(1+r)n
    	$r = 1 + $r;
    	$n = $duration;
    	$r_power = pow($r, 1);
    	$pv = $face_value / $r_power;

    	// format digits
    	$ca = number_format($ca, 2);
		$pv = number_format($pv, 2);
    	
    	$results = array(
    		'coupon_amount' => $ca,
    		'present_value' => $pv
    	);

    	// return response data
    	$data = array(
    		'status' 	=> 'success',
    		'message' 	=> 'bond calculated successfully !',
    		'results'   => $results
    	);

    	// return response
    	return response()->json($data);
    }
}
