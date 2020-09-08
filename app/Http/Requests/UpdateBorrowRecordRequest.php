<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBorrowRecordRequest extends FormRequest
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
            'borrow_date' => 'required|string|date_format:Y-m-d H:i:s',
            'return_date' => 'nullable|string|after:borrow_date|date_format:Y-m-d H:i:s',
        ];
    }
}
