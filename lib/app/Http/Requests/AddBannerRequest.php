<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBannerRequest extends FormRequest
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
            'name'=>'unique:slide,name'
        ];
    }
        public function messages(){
            return[
                'name.unique'=>'Tên banner bị trùng'
            ];
    }
}
