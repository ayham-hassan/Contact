<?php
namespace App\Http\Requests\Backend\Address;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateAddress extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.address.edit', $this->address);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'id' => 'None',

            'build_num' => 'required',

            'street' => 'required',

            'area' => 'required',

            'city' => 'required',

            'zipcode' => 'required',

            'country' => 'required',

            'details' => 'nullable'
        ];
    }
}
