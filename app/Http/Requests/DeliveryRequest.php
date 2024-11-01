<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryRequest extends FormRequest
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
            'delivery_number' => 'required|string|unique:deliveries,delivery_number',
            'company_name' => 'required|string|max:255',
            'shipper_id' => 'required|integer|exists:shippers,id',
            'status_id' => 'required|integer|exists:statuses,id',
            'delivery_date' => 'required|date',
            'receive_date' => 'nullable|date',
            'confirmation_code' => 'nullable|string|max:255',
        ];
    }
}
