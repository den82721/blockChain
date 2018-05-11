<?php

namespace App\Http\Requests\LK;

use Illuminate\Foundation\Http\FormRequest;

class IdentSettingsRequest extends FormRequest
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
            'email' => 'nullable|email',
            'phone' => 'nullable|regex:/^((\+7)+([0-9]){10})$/'
        ];
    }
}
