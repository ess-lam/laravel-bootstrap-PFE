<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\IsCompositeUnique;
use Illuminate\Http\Request;

class StoreProjetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // $etudiants = Request::input('projet-etudiants');
        // $sujet = Request::input('projet-sujet'); 

        return [
            'projet-sujet' => 'required',
            'projet-etudiants'=> 'required',
            'projet-encadrants'=> 'required',
            'projet-departement'=> 'required',
            'projet-annee'=> 'required',
            'projet-diplome'=> 'required',
            'fichier'=> 'required',
            // 'lien'=>'active_url',
            // not really working
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'projet-etudiants.required' => 'entrez nom d\'un etudiant',
        'projet-etudiants.unique' => 'entrez un autre etudiant',
        'projet-sujet.required'=> 'entrez le sujet',
        'projet-sujet.unique' => 'entrez un autre sujet',
        'projet-encadrants.required' => 'entrez nom d\'un encadrant',
        'projet-departement'=> 'entrez le departement',
        'projet-annee.required'=> 'entrez l\'année',
        'projet-diplome.required'=> 'entrez le diplome',
        'fichier.required'=> 'entrez le document',
    ];
}
}
