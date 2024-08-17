<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'user_type' => ['required', 'string', Rule::in(['student', 'psychologist'])],
            'crp' => [
                'nullable',
                'string',
                'max:255',
                Rule::requiredIf($this->input('user_type') === 'psychologist'),
            ],
            'institution' => [
                'nullable',
                'string',
                'max:255',
                Rule::requiredIf($this->input('user_type') === 'student'),
            ],
        ];
    }
}
