<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        switch($this->segment(3)){
            case 'add' :
                return[
                    'title'=>'required|max:255|min:2',
            'description'=>'required|max:300|',
            'image'=>'required|max:5000',
            'description_seo'=>'required|max:170|unique:categories',
            'title_seo'=>'required|max:150|min:5|unique:categories',
            'url'=>'required|max:255|min:10',
            'price'=>'required|digits_between:2,10',
            'category_id'=>'required',

                ];
                break;
                case'edit':
                    return[

                        
                            'title'=>'required|min:3|max:255',
                            'url'=>'required|max:255|min:10',
                            'title_seo'=>'required|max:150|min:5|unique:categories',
                        
                    ];
                    break;
        }
        
    }

    public function messages()
    {  
        return [
            
            'title.required' => '  عنوان اجباری است',
            'title.min'=>'عنوان کمتر از 3 حرف است',
            'title.max'=>'عنوان بیشتر از 255 حرف است',
           
            'description.required' => '  توضیحات  اجباری است',
            'description.max'=>'توضیحات  بیشتر از 300 حرف است',

            'image.required'=>'تصویر اجباری است',
            'image.max'=>'حجم فایل بیشتر از 5 مگابایت می باشد',

            'description_seo.required' => '  توضیحات سئو اجباری است',
            'description_seo.max'=>'توضیحات سئو بیشتر از 170 حرف است',
            'description_seo.unique'=>'توضیحات سئو تکراری است',

            'title_seo.required' => '  عنوان اجباری است',
            'title_seo.min'=>'عنوان کمتر از5 حرف است',
            'title_seo.max'=>'عنوان بیشتر از 150 حرف است',
            'title_seo.unique'=>'عنوان سئو تکراری است',

            'url.required' => '  url اجباری است',
            'url.min'=>'url کمتر از 10 حرف است',
            'url.max'=>'url بیشتر از 255 حرف است',

            'price.required'=>'قیمت اجباری است',
            'price.digits_between'=>' قیمت باید بین 2 تا 10 رقم باشد' ,
            'category_id.required'=>'دسته بندی اجباری است',
            
        ];
    }
}
