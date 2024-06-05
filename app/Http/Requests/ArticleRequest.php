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
            "title" => "required",
            "first_page" => "required",
            "last_page" => "required",
            "published_date" => "required",
            "dio" => "required",
            "journal_id" => "required",
            "volume_id" => "required",
            "issue_id" => "required",
            "abstract" => "required",
            "references" => "required",
            "file" => "required",
            'article_type' => 'required',
            'extra_meta_tag' => 'required',
        ];
    }
}
