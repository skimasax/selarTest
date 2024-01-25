<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayoutRateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "buyer_payment_currency" => ['required'],
            "creator_receiving_currency" => ['required'],
            "amount_paid_in_buyer_currency" => ['required', 'numeric']
        ];
    }
}
