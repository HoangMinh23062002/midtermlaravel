<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255|string',
            'frice'=>'numeric',
            'image'=>'required|filled|image|mimes:jpeg,png,jpg,gif,svg|max:25000',
            'title'=>'required|max:255|string',

         
        ];
    }
    public function message()
    {
        return [
            'name.required' => 'Name_food bắt buộc phải nhập!',
            'title.required' => 'Description bắt buộc phải nhập!',
            'frice.required' => 'Price bắt buộc phải nhập!',
            'image.required' => 'Image bắt buộc phải chọn!',
        ];
    }
}
