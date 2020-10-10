<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class booksRequest extends FormRequest
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
            'author_id' => 'min:1|max:11',
            'book_name' => 'required|unique:books|min:3|max:255',
            'pages' => 'required|min:1|max:11',
        ];
    }



    public function messages()
    {
        return [
            'author_id.min' =>'Поле автор должно иметь больше одного символов',
            'author_id.max' =>'Поле автор должно иметь меньше 11-и символов',
            'book_name.required' =>'Поле название книги должно быть заполненно',
            'book_name.min' =>'Поле название книги должно иметь больше 3-х символов',
            'book_name.max' =>'Поле название книги должно иметь меньше 255-и символов',
            'book_name.unique' => 'Такое название книги уже зарегистрировано',
            'pages.required' =>'Поле страниц должно быть заполненно',
            'pages.min' =>'Поле страниц должно иметь более одного символа',
            'pages.max' =>'Поле страниц должно иметь менее 11-и символов',
        ];
    }
}
