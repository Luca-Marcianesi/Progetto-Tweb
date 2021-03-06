<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ModificaPostoLetto extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'titolo' => 'required|max:25',
            'desc_b' => 'required',
            'desc_l' => 'required|max:1000',
            'stato' => 'string|required',
            'prezzo' => 'required|integer|min:0',
            'genere' => 'required|string',
            'angolo_studio' => 'string|required',
            'posti_letto_appartamento' => 'integer|required|min:1',
            'posti_letto_camera' => 'integer|required|min:1',
            'dimensioni_camera' => 'integer|required|min:1',
            
        ];
    }

    /*
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
    */

}
