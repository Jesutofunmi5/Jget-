<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],

        'teacher' => [
            'driver' => 'session',
            'provider' => 'teachers',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'super_admin' => [
            'driver' => 'session',
            'provider' => 'super_admins',
        ],

        'unity_exam' => [
            'driver' => 'session',
            'provider' => 'unity_exams',
        ],

        'entrance' => [
            'driver' => 'session',
            'provider' => 'entrances',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'students' => [
            'driver' => 'eloquent',
            'model' => App\Student::class,
        ],

        'teachers' => [
            'driver' => 'eloquent',
            'model' => App\Teacher::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],

        'super_admins' => [
            'driver' => 'eloquent',
            'model' => App\SuperAdmin::class,
        ],

        'unity_exams' => [
            'driver' => 'eloquent',
            'model' => App\UnityExam::class,
        ],

        'entrances' => [
            'driver' => 'eloquent',
            'model' => App\PrimarySchool::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Here you may set the options for resetting passwords including the view
    | that is your password reset e-mail. You may also set the name of the
    | table that maintains all of the reset tokens for your application.
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'students' => [
            'provider' => 'students',
            'email' => 'auth.emails.password-student',
            'table' => 'password_resets',
            'expire' => 30,
        ],

        'teachers' => [
            'provider' => 'teachers',
            'email' => 'auth.emails.password-teacher',
            'table' => 'password_resets',
            'expire' => 30,
        ],

         'admins' => [
            'provider' => 'admins',
            'email' => 'auth.emails.password-admin',
            'table' => 'password_resets',
            'expire' => 20,
        ],

         'super_admins' => [
            'provider' => 'super_admins',
            'email' => 'auth.emails.password-supur-admin',
            'table' => 'password_resets',
            'expire' => 20,
        ],

        'unity_exams' => [
            'provider' => 'unity_exams',
            'email' => 'auth.emails.password-unity-exam',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'entrances' => [
            'provider' => 'entrances',
            'email' => 'auth.emails.password-unity-exam',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
