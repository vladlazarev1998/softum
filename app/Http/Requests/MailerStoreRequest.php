<?php

namespace App\Http\Requests;

use App\DTO\MailerDTO;
use Illuminate\Foundation\Http\FormRequest;

class MailerStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'from' => 'required|email|string|min:3|max:255',
            'to' => 'required|email|string|min:3|max:255',
            'cc' => 'nullable|email|string|min:3|max:255',
            'subject' => 'required|string|min:3|max:255',
            'type' => 'required|string|in:text,html',
            'body' => 'required|string|min:3|max:512'
        ];
    }

    /**
     * @return MailerDTO
     */
    public function getDTO(): MailerDTO
    {
        return new MailerDTO(
            $this->from,
            $this->to,
            $this->cc,
            $this->subject,
            $this->type,
            $this->body
        );
    }
}
