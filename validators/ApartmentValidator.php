<?php

class ApartmentValidator
{
    protected $rules;

    public function __construct()
    {
        $this->rules = [
            'Apart_Cost' => [
                'required' => [
                    'message' => 'Apartment Cost is required'
                ],
                'positivity' => [
                    'value' => 0,
                    'message' => 'Cost must be positivity'
                ]
            ],
            'Apart_Num' => [
                'required' => [
                    'message' => 'Apartment number is required'
                ],
                'positivity' => [
                    'value' => 0,
                    'message' => 'Cost must be positivity'
                ]
            ],
            'ResComplex' => [
                'required' => [
                    'message' => 'ResComplex is required'
                ]
            ]
        ];
    }

    public function validate($data)
    {
        $errors = [];

        foreach ($this->rules as $fieldName => $rule){
            $fieldNotEmpty = !empty(trim($data[$fieldName]));

            if(isset($rule['required']) && $fieldNotEmpty === false){
                $errors[$fieldName] = $rule['required']['message'] ?? 'Required';
            }
        }

        $Apart_CostPositivity = (int)$data['Apart_Cost'] > $this->rules['Apart_Cost']['positivity']['value'];
        $Apart_NumPositivity = (int)$data['Apart_Num'] > $this->rules['Apart_Num']['positivity']['value'];

        if(!isset($errors['Apart_Cost']) && $Apart_CostPositivity === false){
            $errors['Apart_Cost'] = $this->rules['Apart_Cost']['positivity']['message'];
        }

        if(!isset($errors['Apart_Num']) && $Apart_NumPositivity === false){
            $errors['Apart_Num'] = $this->rules['Apart_Num']['natural']['message'];
        }

        return $errors;
    }

}