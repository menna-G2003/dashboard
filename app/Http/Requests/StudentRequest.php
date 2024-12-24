<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true; // لازم اول حاجه لازم تتعمل كده
    }
    protected function onCreate(){ // return part rules
            return
            [
                'code'=> ['required','integer'],
                'name'=>['required','string'],
                'email'=> ['required','email'],
                'password'=> ['required','string'],
                'phone'=> ['required'],
                'subject'=> ['required','string'],
                // 'dept_id'=> ['required','integer'],
                'photo'=>'image',
            ];
    }
    protected function onUpdate(){
        return
        [
            'name'=>['required','string'],
            'email'=> ['required','email'],
            'password'=> ['required','string'],
            'phone'=> ['required','regex:/^(011|010|012|015)[0-9]{8}$/'],
            'subject'=> ['required','string'],
            // 'dept_id'=> ['required','integer'],
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
     // بعدي عليها الاول قبل ما اعمل store
     return request()->isMethod('POST')?$this->onCreate():$this->onUpdate();
    }
  public function messages(){
        return [ 
            'code.required'=> 'please enter your code',
            'code.integer'=> 'please enter integer',
            'name.required'=> 'please enter your name',
            'name.string'=> 'please enter string',
            'email.required'=> 'please enter your email',
            'email.email'=> 'please enter your email correctly',
            'password.required'=> 'please enter your password',
            'password.string'=> 'please enter string',
            'subject.required'=> 'please enter your subject',
            'subject.string'=> 'please enter string',
            // 'phone.required'=> 'please enter your phone',
            // 'phone.regex'=> 'please enter your phone correctly',
        ];
    }
    public function attributes()//بتشتغل ف حاله لو مش مديه حاجه ليه في ال maessage
    {
        return [
            'code'=> 'techer code',
            'name'=> 'techer nome',
            'email'=> 'techer email ',
            'password'=> 'techer password',
            'phone'=> 'techer phone',
            'subject'=> 'techer subject',
        ];
    }
}


  
