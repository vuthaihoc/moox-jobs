<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pruning
    |--------------------------------------------------------------------------
    |
    | This configuration is used to enable or disable pruning of old jobs.
    |
    */

    'pruning' => [
        'enabled' => true,
        'retention_days' => 7,
    ],

    'job_connection' => env('JM_JOB_CONNECTION'),
    'manager_connection' => env('JM_MANAGER_CONNECTION'),

];
