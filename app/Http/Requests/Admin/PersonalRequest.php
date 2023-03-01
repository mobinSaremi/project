<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
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
                    'fullname'=>'required|max:255|min:2',
                    'description'=>'required|max:300|',
                  
                  
        

                ];
                break;
                case'edit':
                    return[

                        
                            'fullname'=>'required|min:3|max:255',
                            
                            
                        
                    ];
                    break;
        }
       
    }

    public function messages()
    {
        return [
            
            'fullname.required' => '  عنوان اجباری است',
            'fullname.min'=>'عنوان کمتر از 3 حرف است',
            'fullname.max'=>'عنوان بیشتر از 255 حرف است',
           
            'description.required' => '  توضیحات  اجباری است',
            'description.max'=>'توضیحات  بیشتر از 300 حرف است',

         
           
            
            
        ];
    }
}
