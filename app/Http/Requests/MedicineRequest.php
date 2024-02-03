<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'medicine.name'=>'required|string',
            'medicine.maker'=>'required',
            'medicine.price'=>'required|integer',
            'medicine.discription'=>'required|string|max:300',
            'medicine.jancode'=>'required|integer',
            'medicine.category_id'=>'required',
        ];
    }
}
