<?php

namespace Modules\Tautan\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TautanRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'label' => 'required',
                    'url' => 'required|url',
                    'banner' => 'required|mimes:png,jpg,jpeg'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'label' => 'required',
                    'url' => 'required|url',
                    'banner' => 'mimes:png,jpg,jpeg'
                ];
            }
            default:break;
        }
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
