<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'videos',

/*
* Modules .
*/
'modules'   => ['videos'],

'videos' => [
                    'Name'          => 'Videos',
                    'name'          => 'videos',
                    'table'         => 'videos',
                    'model'         => 'Lavalite\Videos\Models\Videos',
                    'image'         => [
                        'xs'        => ['width' => '60',         'height' => '45'],
                        'sm'        => ['width' => '100',        'height' => '75'],
                        'md'        => ['width' => '460',        'height' => '345'],
                        'lg'        => ['width' => '800',        'height' => '600'],
                        'xl'        => ['width' => '1000',       'height' => '750'],
                        ],

                    'fillable'          => ['user_id', 'id',  'v_id',  'name',  'slug',  'status',  'view_count',  'duration',  'file',  'uploaded_by'],
                    'listfields'        => ['id', 'id',  'v_id',  'name',  'slug',  'status',  'view_count',  'duration',  'file',  'uploaded_by'],
                    'translatable'      => ['id',  'v_id',  'name',  'slug',  'status',  'view_count',  'duration',  'file',  'uploaded_by'],

                    'upload-folder'     => '/uploads/videos/videos',
                    'uploadable'        => [
                                                'single'    => [],
                                                'multiple'  => [],
                                            ],
                ],
];
