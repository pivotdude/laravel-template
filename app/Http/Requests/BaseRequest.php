<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator;

class BaseRequest extends FormRequest {
    /**
     * A description of the entire PHP function.
     *
     * @param Validator $validator The validator object.
     * @throws HttpResponseException If the validator fails.
     * @return void
     */
    public function after(Validator $validator)
    {
        if ($validator->fails()) {
            throw new HttpResponseException(
                response()->json(['errors' => $validator->errors()], 422)
            );
        }
    }
}
