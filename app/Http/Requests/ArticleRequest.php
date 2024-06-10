<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required',
            'first_page' => 'required',
            'last_page' => 'required|gte:first_page',
            'article_type' => 'sometimes',
            'recived_date' => 'nullable|date',
            'revised_date' => 'nullable|date|after_or_equal:recived_date',
            'accepted_date' => 'nullable|date|after_or_equal:revised_date',
            'published_date' => 'nullable|date|after_or_equal:accepted_date',
            'dio' => 'required',
            'issue_id' => 'required',
            'volume_id' => 'required',
            'journal_id' => 'required',
        ];
    }
}
