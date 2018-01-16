<?php return
[
    /*
    |--------------------------------------------------------------------------
    | View Name Type
    |--------------------------------------------------------------------------
    |
    | If the views are created in a certain standard, they are automatically 
    | loaded by the controllers. There are 2 options for this;
    |
    | directory: Views/controllerName/methodName.php
    |
    | file: Views/controllerName-methodName.php
    |
    */

    'viewNameType' => 'directory',

    /*
    |--------------------------------------------------------------------------
    | Ajax Code Continue
    |--------------------------------------------------------------------------
    |
    | After Ajax operations, it is specified whether the code will continue to 
    | flow. If you get unexpected output on ajax requests, set this value to 
    | false.
    |
    */

    'ajaxCodeContinue' => true,

    /*
    |--------------------------------------------------------------------------
    | Wizard
    |--------------------------------------------------------------------------
    |
    | The template wizard specifies what to compile.
    |
    */

    'wizard' =>
    [
        'keywords'  => true,
        'printable' => true,
        'functions' => true,
        'comments'  => true,
        'tags'      => true,
        'jsdata'    => true,
        'html'      => false
    ]
];
