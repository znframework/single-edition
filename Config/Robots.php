<?php return
[
    /*
    |--------------------------------------------------------------------------
    | Create File
    |--------------------------------------------------------------------------
    |
    | Decides whether to create a robots file.
    | 
    */

    'createFile' => false,

    /*
    |--------------------------------------------------------------------------
    | Rules
    |--------------------------------------------------------------------------
    |
    | Expressions to be written to the file.
    | 
    | Multiple Usage
    |
    | Example: rules => [['userAgent' => '*', disallow => ['/dir/']] ... ], 
    | 
    */

    'rules' =>
    [
        'userAgent' => '*',
        'allow'     => [],
        'disallow'  =>
        [
            '/Butchery/',
            '/Commands/',
            '/Config/',
            '/Controllers/',
            '/Databases/',
            '/Languages/',
            '/Libraries/',
            '/Models/',
            '/Resources/',
            '/Routes/',
            '/Starting/',
            '/Storage/',
            '/Settings/'
        ]
    ]
];
