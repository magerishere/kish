<?php

return [
    'required' => ':attribute الزامیست',
    'email' => ':attribute معتبر وارد کنید',
    'min' => [
        'numeric' => ':attribute حداقل باید :min کاراکتر باشد',
        'string' => ':attribute حداقل باید :min کاراکتر باشد',
    ],
    'max' => [
        'numeric' => ':attribute نباید بیشتر از :max کاراکتر باشد',
        'string' => ':attribute نباید بیشتر از :max کاراکتر باشد',
    ],
    'digits' => ':attribute باید :digits کاراکتر باشد',
    'integer' => ':attribute باید عدد باشد',
    'boolean' => 'کد :attribute دستکاری کردی!',
    'confirmed' => ':attribute با تکرار آن همخوانی ندارد',
    'custom' => [
        'name' => [
            'regex' => ':attribute نباید شامل عدد باشد',
        ],
        'phone_number' => [
            'regex' => ':attribute باید به صورت 09********* باشد',
        ]
    ],

    'attributes' => [
        'phone_number' => 'شماره تلفن همراه',
        'email' => 'ایمیل',
        'gender' => 'جنسیت',
        'verification_code' => 'کد تایید',
        'name' => 'نام',
        'year' => 'سال',
        'address' => 'آدرس',
        'password' => 'رمز عبور',

    ]
];
