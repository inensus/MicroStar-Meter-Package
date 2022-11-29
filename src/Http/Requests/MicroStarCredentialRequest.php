<?php


namespace Inensus\MicroStarMeter\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MicroStarCredentialRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => ['required',Rule::unique('micro_star_api_credentials')->ignore($this->id)],
            'api_key' => ['required',Rule::unique('micro_star_api_credentials')->ignore($this->id)],
        ];
    }
}