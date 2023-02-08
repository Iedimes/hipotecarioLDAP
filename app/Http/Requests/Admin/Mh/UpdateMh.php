<?php

namespace App\Http\Requests\Admin\Mh;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateMh extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.mh.edit', $this->mh);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'codigo' => ['nullable', 'integer'],
            'proyecto' => ['nullable', 'string'],
            'documento' => ['nullable', 'string'],
            'adjudicatario' => ['nullable', 'string'],
            'fecha_ins' => ['nullable', 'date'],
            'institucion_acreedora' => ['nullable', 'string'],
            'obs' => ['nullable', 'string'],
            'fecha_reins' => ['nullable', 'date'],

        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
