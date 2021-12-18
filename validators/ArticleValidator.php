<?php

class ArticleValidator
{
    protected array $rules;

    public function __construct()
    {
        $this->rules = [
            'name' => [
                'required' => [
                    'message' => 'Name is required'
                ],
                'size' => [
                    'value' => 255,
                    'message' => 'Name must be less then 255 letters'
                ]
            ],
            'body' => [
                'required' => [
                    'message' => 'Body is required'
                ],
                'size' => [
                    'value' => 255,
                    'message' => 'Body must be less then 10000 letters'
                ]
            ]
        ];
    }

    public function validate($data): array
    {
        $errors =[];

        foreach ($this->rules as $fieldName => $rule){
            $fieldNotEmpty = !empty(trim($data[$fieldName]));

            if(isset($rule['required']) && $fieldNotEmpty === false){
                $errors[$fieldName] = $rule['required']['message'] ?? 'Required';
            }
        }

        $hasName = !empty(trim($data['name']));
        $hasBody = !empty(trim($data['body']));

        $nameSizeNotExceeded = strlen($data['name']) < 255;
        $bodySizeNotExceeded = strlen($data['body']) < 10000;

        if ($hasName === false){
            $errors['name'] = 'Name is required';
        }

        if ($nameSizeNotExceeded === false){
            $errors['name'] = 'Name must be less then 255 letters!';
        }

        if ($hasBody === false){
            $errors['body'] = 'Body is required';
        }

        if ($bodySizeNotExceeded === false){
            $errors['body'] = 'Body must be less then 10000 letters!';
        }

        return $errors;
    }
}