<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionFormRequest extends FormRequest
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
            
            'test_id' => 'required|exists:tests,id',
            'query' => 'required|string|max:255',
            'answers.solution_1' => 'required|string|max:255',
            'answers.solution_2' => 'required|string|max:255',
            'answers.solution_3' => 'required|string|max:255',
            'answers.solution_4' => 'required|string|max:255',
            'correct' => 'required|in:solution_1,solution_2,solution_3,solution_4'
        
        ];
    }

    public function messages()
    {
        return [
            'test_id.*' => 'You must select a test to wthich you want to add questions.', 
            'answers.solution_1.*' => 'Solution 1 is required and must be string less than 255 characters.',
            'answers.solution_2.*' => 'Solution 2 is required and must be string less than 255 characters.',
            'answers.solution_3.*' => 'Solution 3 is required and must be string less than 255 characters.',
            'answers.solution_4.*' => 'Solution 4 is required and must be string less than 255 characters.',
            'correct.*' => 'You must choose the correct answer.'
        ];
    }

}
