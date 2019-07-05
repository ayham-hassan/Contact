<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Access',

            'roles' => [
                'all' => 'All Roles',
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'main' => 'Roles'
            ],

            'users' => [
                'all' => 'All Users',
                'change-password' => 'Change Password',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'main' => 'Users',
                'view' => 'View User'
            ]
        ],

        'log-viewer' => [
            'main' => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs'
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'General',
            'history' => 'History',
            'system' => 'System',

            //begin_Address_begin
            'addresses' => 'Addresses',
            //finish_Address_finish
            //begin_Customer_begin
            'customers' => 'Customers',
            //finish_Customer_finish
            //begin_CustomerAddress_begin
            'customer_addresses' => 'Customer Address',
            //finish_CustomerAddress_finish
            //begin_Status_begin
            'status' => 'Status',
            //finish_Status_finish
            //begin_Contact_begin
            'contacts' => 'Contacts',
            //finish_Contact_finish
            //begin_Outcome_begin
            'outcomes' => 'Outcome',
            //finish_Outcome_finish
            //begin_Type_begin
            'types' => 'Types',
            //finish_Type_finish
            //begin_ContactActivity_begin
            'contact_activities' => 'Contact Activities'
            //finish_ContactActivity_finish
            // **********Do_Not_Delete_me****************
        ],

        //start_Address_start
        'addresses' => [
            'view' => 'View Address',
            'all' => 'All Addresses',
            'create' => 'Create Address',
            'edit' => 'Edit Address',
            'management' => 'Address Management',
            'main' => 'Addresses'
        ],
        //end_Address_end

        //start_Customer_start
        'customers' => [
            'view' => 'View Customer',
            'all' => 'All Customers',
            'create' => 'Create Customer',
            'edit' => 'Edit Customer',
            'management' => 'Customer Management',
            'main' => 'Customers'
        ],
        //end_Customer_end

        //start_CustomerAddress_start
        'customer_addresses' => [
            'view' => 'View CustomerAddress',
            'all' => 'All Customer Address',
            'create' => 'Create CustomerAddress',
            'edit' => 'Edit CustomerAddress',
            'management' => 'CustomerAddress Management',
            'main' => 'Customer Address'
        ],
        //end_CustomerAddress_end

        //start_Status_start
        'status' => [
            'view' => 'View Status',
            'all' => 'All Status',
            'create' => 'Create Status',
            'edit' => 'Edit Status',
            'management' => 'Status Management',
            'main' => 'Status'
        ],
        //end_Status_end

        //start_Contact_start
        'contacts' => [
            'view' => 'View Contact',
            'all' => 'All Contacts',
            'create' => 'Create Contact',
            'edit' => 'Edit Contact',
            'management' => 'Contact Management',
            'main' => 'Contacts'
        ],
        //end_Contact_end

        //start_Outcome_start
        'outcomes' => [
            'view' => 'View Outcome',
            'all' => 'All Outcome',
            'create' => 'Create Outcome',
            'edit' => 'Edit Outcome',
            'management' => 'Outcome Management',
            'main' => 'Outcome'
        ],
        //end_Outcome_end

        //start_Type_start
        'types' => [
            'view' => 'View Type',
            'all' => 'All Types',
            'create' => 'Create Type',
            'edit' => 'Edit Type',
            'management' => 'Type Management',
            'main' => 'Types'
        ],
        //end_Type_end

        //start_ContactActivity_start
        'contact_activities' => [
            'view' => 'View ContactActivity',
            'all' => 'All Contact Activities',
            'create' => 'Create ContactActivity',
            'edit' => 'Edit ContactActivity',
            'management' => 'ContactActivity Management',
            'main' => 'Contact Activities'
        ]
        //end_ContactActivity_end

        // Do not delete me :) I'm used for auto-generation
    ],

    'language-picker' => [
        'language' => 'Language',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'zh' => 'Chinese Simplified',
            'zh-TW' => 'Chinese Traditional',
            'da' => 'Danish',
            'de' => 'German',
            'el' => 'Greek',
            'en' => 'English',
            'es' => 'Spanish',
            'fa' => 'Persian',
            'fr' => 'French',
            'he' => 'Hebrew',
            'id' => 'Indonesian',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'nl' => 'Dutch',
            'no' => 'Norwegian',
            'pt_BR' => 'Brazilian Portuguese',
            'ru' => 'Russian',
            'sv' => 'Swedish',
            'th' => 'Thai',
            'tr' => 'Turkish'
        ]
    ]
];
