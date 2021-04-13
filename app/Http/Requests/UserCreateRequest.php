<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name'=>'required|max:255|unique:users', // champ obligatoire et unique dans la table 'users'
            'email'=>'required|email|max:255|unique:users', // champ obligatoire, de type email, max 255 caractères, et unique dans la table 'users'
            'password'=>'required|confirmed|min:6' // champ obligatoire et qui doit correspondre à ce qui est entré dans le champ de confirmation. 
                                                   // Le champ doit se nommer comme le champ password avec _confirmation à la fin ;-)
        ];
    }
}
