<?php

return [



    'default' => env('FILESYSTEM_DRIVER', 'local'),


    'cloud' => env('FILESYSTEM_CLOUD', 's3'),



    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
        ],

        'local_Attachments' => [
            'driver' => 'local',
            'root' => public_path('app/public/Attachments/'),
        ],

        'parent_Attachments' => [
            'driver' => 'local',
            'root' => storage_path('app/parent_Attachments'),
        ],
        'upload_attachments' => [
            'driver' => 'local',
            'root' => public_path('/'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'public_uploads' => [
            'driver' => 'local',
            'root' => public_path('Attachments/books'),
        ],

        'public_uploads_setting_ershad' => [
            'driver' => 'local',
            'root' => public_path('Attachments/setting/ershad'),
        ],

        'public_uploads_setting_slook' => [
            'driver' => 'local',
            'root' => public_path('Attachments/setting/slook'),
        ],

        'public_uploads_setting_adds' => [
            'driver' => 'local',
            'root' => public_path('Attachments/setting/adds'),
        ],

        'public_adds' => [
            'driver' => 'local',
            'root' => public_path('/'),
            'url' => env('APP_URL').'/storage',
        ],
        'public_uploads_notes' => [
            'driver' => 'local',
            'root' => public_path('Attachments/Notes'),
        ],

        'public_uploads_tameem' => [
            'driver' => 'local',
            'root' => public_path('Attachments/Tameem'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
