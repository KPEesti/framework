<?php

class AgentsValidator
{
    protected array $rules;

    public function __construct()
    {
        $this->rules = [
            'Agent' => [
                'required' => [
                    'message' => 'ФИО агента - обязательное поле!'
                ],
                'size' => [
                    'value' => 255,
                    'message' => 'Длина ФИО агента должна быть меньше 255 символов!'
                ]
            ],
            'Apart_ID' => [
                'required' => [
                    'message' => 'Номер договора на квартиру - обязательное поле!'
                ],
                'positivity' => [
                    'message' => 'Номер договора на квартиру должен быть натуральным числом'
                ]
            ],
            'FIX_AWARD' => [
                'min_size' => [
                    'value' => 0,
                    'message' => 'Размер фиксированной награды не должен быть не меньше 0!'
                ],
                'max_size' => [
                    'value' => 1000000,
                    'message' => 'Размер фиксированной награды не должен превышать 1 миллион!'
                ]
            ],
            'PERCENT_AWARD' => [
                'min_size' => [
                    'value' => 0,
                    'message' => 'Размер процентной награды должен быть не меньше 0% от стоимости квартиры!'
                ],
                'max_size' => [
                    'value' => 10,
                    'message' => 'Размер процентной награды не должен превышать 10% от стоимости квартиры!'
                ]
            ],
            'Conclusion_Date' => [
                'required' => [
                    'message' => 'Это обязательное поле'
                ]
            ],
            'Expiration_Date' => [
                'required' => [
                    'message' => 'Это обязательное поле'
                ]
            ]
        ];
    }

    public function validate($data): array
    {
        $errors = [];

        foreach ($this->rules as $fieldName => $rule)
        {
            $data[$fieldName] = trim($data[$fieldName]);
            $fieldNotEmpty = !empty($data[$fieldName]);

            if(isset($rule['required']) && $fieldNotEmpty === false){
                $errors[$fieldName] = $rule['required']['message'] ?? 'Required';
            }
        }

        $MaxAgentLength = strlen($data['Agent']) > $this->rules['Agent']['size']['value'];
        $minValueFix = (int)$data['FIX_AWARD'] < $this->rules['FIX_AWARD']['min_size']['value'];
        $maxValueFix = (int)$data['FIX_AWARD'] > $this->rules['FIX_AWARD']['max_size']['value'];
        $minValuePercent = (int)$data['PERCENT_AWARD'] < $this->rules['PERCENT_AWARD']['min_size']['value'];
        $maxValuePercent = (int)$data['PERCENT_AWARD'] > $this->rules['PERCENT_AWARD']['max_size']['value'];

        if (!isset($errors['Agent']) && $MaxAgentLength){
            $errors['Agent'] = $this->rules['Agent']['size']['message'];
        }

        if ($minValueFix){
            $errors['FIX_AWARD'] = $this->rules['FIX_AWARD']['min_size']['message'];
        } elseif ($maxValueFix) {
            $errors['FIX_AWARD'] = $this->rules['FIX_AWARD']['max_size']['message'];
        }
        if ($minValuePercent){
            $errors['PERCENT_AWARD'] = $this->rules['PERCENT_AWARD']['min_size']['message'];
        } elseif ($maxValuePercent) {
            $errors['PERCENT_AWARD'] = $this->rules['PERCENT_AWARD']['max_size']['message'];
        }

        return $errors;
    }
}