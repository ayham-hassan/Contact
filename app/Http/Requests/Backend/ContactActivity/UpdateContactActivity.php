<?php
namespace App\Http\Requests\Backend\ContactActivity;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateContactActivity extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.contact_activity.edit', $this->contactactivity);
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

            'contact_id' => 'required',

            'type_id' => 'required',

            'outcome_id' => 'required',

            'activity_date' => 'required',

            'details' => 'nullable'
        ];
    }
}
