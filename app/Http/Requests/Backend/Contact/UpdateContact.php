<?php
namespace App\Http\Requests\Backend\Contact;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateContact extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.contact.edit', $this->contact);
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

            //'image_file'=>'file|image|mimes:png',

            'name' => 'required',

            'customer_id' => 'required',

            'status_id' => 'required',

            'email' => 'required|email',

            'web_sit' => 'nullable',

            'phone' => 'nullable',

            'mobile' => 'nullable',

            'fax' => 'nullable',

            'details' => 'nullable'
        ];
    }
}
