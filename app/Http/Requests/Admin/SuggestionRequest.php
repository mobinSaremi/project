<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class SuggestionRequest extends FormRequest
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
                    'name'=>'required|max:255|min:2',
                    'description'=>'required|max:600|',
                    'image'=>'required|max:5000',
                  
        

                ];
                break;
                case'edit':
                    return[

                        
                            'name'=>'required|min:3|max:255',
                            
                            
                        
                    ];
                    break;
        }
       
    }

    public function messages()
    {
        return [
            
            'name.required' => '  عنوان اجباری است',
            'name.min'=>'عنوان کمتر از 3 حرف است',
            'name.max'=>'عنوان بیشتر از 255 حرف است',
           
            'description.required' => '  توضیحات  اجباری است',
            'description.max'=>'توضیحات  بیشتر از 600 حرف است',

            'image.required'=>'تصویر اجباری است',
            'image.max'=>'حجم فایل بیشتر از 5 مگابایت می باشد',
           
            
            
        ];
    }
}
