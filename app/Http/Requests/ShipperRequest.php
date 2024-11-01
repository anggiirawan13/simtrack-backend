<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipperRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Ubah menjadi false jika ingin menambahkan otorisasi
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'device_mapping' => 'required|string|max:255',
        ];
    }
}
