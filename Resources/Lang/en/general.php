<?php

return [

    'audit-log'           => [
        'category'              => 'Erp',
        'msg-home'              => 'Accessed Erp.',
        'msg-supplies'            => 'Accessed Supplies.',
        'msg-recipes'              => 'Accessed Recipes.',
        'msg-production_orders'    => 'Accessed Production Orders.',
        'msg-process'    => 'Accessed Process view.',
    ],

    'status'           => [
        'error-retrieving-ad-record'      => 'Error retrieving AD record.',
        'no-records-found'                => 'No record found.',
    ],

    'columns'           => [
        'type'                        => 'Type',
        'cn'                          => 'CN',
        'dn'                          => 'DN',
        'username'                    => 'User name',
        'samaccountname'              => 'sAMAccountName',
        'group_name'                  => 'Group name',
        'description'                 => 'Description',
        'email'                       => 'Email',
        'first_name'                  => 'First name',
        'last_name'                   => 'Last name',
        'displayname'                 => 'Display name',
        'physicaldeliveryofficename'  => 'Office',
        'telephonenumber'             => 'Telephone number',
        'key'                         => 'Key',
        'value'                       => 'Value',
    ],

    'tabs'           => [
        'general'       => 'General',
        'members'       => 'Members',
        'member_of'     => 'Member of',
        'raw'           => 'Raw',
    ],

    'page'              => [
        'home'              => [
            'title'                     => 'Erp',
            'description'               => 'Simple Enterprise Resource Planer.',
            'box-title'                 => 'Search: ',
        ],
        'supplies'   => [
            'index'   => [
                'title'                     => 'Erp | Supplies',
                'description'               => 'Supplies catalog.'
            ],
            'show'   => [
                'title'                     => 'Erp | Supplies | :supplyName',
                'description'               => 'Displaying supply.'
            ]
        ],
        'recipes'   => [
            'index'   => [
                'title'                     => 'Erp | Recipes',
                'description'               => 'Recipes catalog.'
            ],
            'show'   => [
                'title'                     => 'Erp | Recipes | :recipeName',
                'description'               => 'Displaying recipe.'
            ]
        ],
        'production_orders'   => [
            'index'   => [
                'title'                     => 'Erp | Production Orders',
                'description'               => 'Production Orders list.'
            ],
            'show'   => [
                'title'                     => 'Erp | Production Order',
                'description'               => 'Displaying production order.'
            ]
        ],
        'process'   => [
            'index'   => [
                'title'                     => 'Erp | Process view',
                'description'               => 'Production Order execution visualizer.'
            ]
        ],
    ],

];
