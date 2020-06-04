<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class CreateUseadminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
        'name' => 'required|max:50|min:2',
         'patronymic' => 'required|max:50|min:2',
          'family' => 'required|max:50|min:2',
         'phone' => 'size:20',
         'email' => 'email:rfc,dns',
         'Photo file'=>'url',
         'title' => 'required|max:50|min:2',
        'description' => 'required|max:10000|min:10',
        'inn' => 'required|size:22',
        'useRest_phone' => 'size:20',
        'address' => 'max:500|min:10',
        'site' => 'url',
        'useRest_email' => 'email:rfc,dns',
         'col_board'=>'size:100',
         'kitchen' => 'required|max:10000|min:10'
        ];
    }
}
