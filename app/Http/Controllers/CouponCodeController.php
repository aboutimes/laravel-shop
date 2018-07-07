<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CouponCode;
use Carbon\Carbon;


class CouponCodeController extends Controller
{
    /**
     * @param $code
     * @return \Illuminate\Database\Eloquent\Model|null|object|static
     * @throws \App\Exceptions\CouponCodeUnavailableException
     */
    public function show($code)
    {
        if (!$record = CouponCode::where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        $record->checkAvailable();

        return $record;
    }
}
