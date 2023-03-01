<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
                    'title_seo'=>'required|max:255|min:2',
           

                ];
                break;
                case'edit':
                    return[

                        
                            'title'=>'required|min:3|max:255',
                            'title_seo'=>'required|max:255|min:2',
                        
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
           
            
            'title_seo.required' => '  عنوان اجباری است',
            'title_seo.min'=>'عنوان کمتر از 3 حرف است',
            'title_seo.max'=>'عنوان بیشتر از 255 حرف است',
            
        ];
    }
}
