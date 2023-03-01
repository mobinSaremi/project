<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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


    public function rules()
    {
        switch ($this->segment(3)) {
            case 'add':
                return [
                    'title' => 'required|max:255|min:2',
                    'title_seo' => 'required|max:150|min:5|unique:categories',
                    'url' => 'required|max:255|min:10',
                ];
                break;
            case 'edit':
                return [
                    'title' => 'required|min:3|max:255',
                    'title_seo' => 'required|max:150|min:5|unique:categories',
                    'url' => 'required|max:255|min:10',

                ];
                break;
        }
    }

    public function messages()
    {
        return [

            'title.required' => '  عنوان اجباری است',
            'title.min' => 'عنوان کمتر از 3 حرف است',
            'title.max' => 'عنوان بیشتر از 255 حرف است',
            'title_seo.required' => '  عنوان سئواجباری است',
            'title_seo.min' => 'عنوان کمتر از5 حرف است',
            'title_seo.max' => 'عنوان بیشتر از 150 حرف است',
            'title_seo.unique' => 'عنوان سئو تکراری است',
            'url.required' => '  url اجباری است',
            'url.min' => 'url کمتر از 10 حرف است',
            'url.max' => 'url بیشتر از 255 حرف است',

        ];
    }
}
