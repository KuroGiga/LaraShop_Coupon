<?php

namespace App\Http\Controllers;

use App\Coupons;
use Illuminate\Http\Request;
use \Cart as Cart;

class CouponsController extends Controller
{
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupons::where('code', $request->coupon_code)->first();

        if (!$coupon) {

            session()->put('coupons', [
            'name' => "",
            'discount' => "",
        ]);

            return redirect('cart')->withSuccessMessage('Invalid Code!');

        }


        session()->put('coupons', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(cart::total()),
            
        ]);


        return redirect('cart')->withSuccessMessage('Coupon Has Been Aplied');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
