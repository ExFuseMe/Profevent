<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'location' => ['required', 'string'],
            'date' => ['required', 'date', 'after:today'],
            'time' => ['required', 'string'],
        ];
    }
}
