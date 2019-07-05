<?php
namespace App\Http\Requests\Backend\CustomerAddress;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateCustomerAddress extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.customer_address.edit', $this->customeraddress);
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

            'customer_id' => 'required',

            'address_id' => 'required',

            'rec_date' => 'required',

            'details' => 'nullable'
        ];
    }
}
