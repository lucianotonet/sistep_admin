<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'test_id' => ['required', 'exists:tests,id'],
            'is_anonymous' => ['sometimes'], // O campo is_anonymous é opcional
            'patient_id' => ['required_without:is_anonymous', 'exists:patients,id'], // O campo patient_id é obrigatório se is_anonymous não estiver presente
        ];
    }
}
