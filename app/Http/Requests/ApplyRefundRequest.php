<?php

namespace App\Http\Requests;


class ApplyRefundRequest extends Request
{
    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'reason' => '原因',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'reason' => 'required',
        ];
    }
}
