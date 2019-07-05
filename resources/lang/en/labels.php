<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update'
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
        'none' => 'None'
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total'
                ]
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total'
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History'
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone'
                        ]
                    ]
                ],

                'view' => 'View User'
            ]
        ],

        //start_Address_start
        'addresses' => [
            'management' => 'Addresses Management',
            'create' => 'Create Address',
            'view' => 'View Address',
            'edit' => 'Edit Address',

            'table' => [
                'id' => "Id",
                'build_num' => "Building Num",
                'street' => "Street",
                'area' => "Area",
                'city' => "City",
                'zipcode' => "Zipode",
                'country' => "Country",
                'details' => "Details",
                'sort' => 'Sort',
                'total' => 'Addresses total|Addresses total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update',
                'id' => "Id",
                'build_num' => "Building Num",
                'street' => "Street",
                'area' => "Area",
                'city' => "City",
                'zipcode' => "Zipode",
                'country' => "Country",
                'details' => "Details"
            ]
        ],
        //end_Address_end

        //start_Customer_start
        'customers' => [
            'management' => 'Customers Management',
            'create' => 'Create Customer',
            'view' => 'View Customer',
            'edit' => 'Edit Customer',

            'table' => [
                'id' => "Id",
                'name' => "Customer Name",
                'coming_date' => "Coming Date",
                'details' => "Details",
                'sort' => 'Sort',
                'total' => 'Customers total|Customers total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update',
                'id' => "Id",
                'name' => "Customer Name",
                'coming_date' => "Coming Date",
                'details' => "Details"
            ]
        ],
        //end_Customer_end

        //start_CustomerAddress_start
        'customer_addresses' => [
            'management' => 'Customer Address Management',
            'create' => 'Create CustomerAddress',
            'view' => 'View CustomerAddress',
            'edit' => 'Edit CustomerAddress',

            'table' => [
                'id' => "Id",
                'customer_id' => "Customer Name",
                'address_id' => "Address City",
                'rec_date' => "Record Date",
                'details' => "Details",
                'sort' => 'Sort',
                'total' => 'Customer Address total|Customer Address total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update',
                'id' => "Id",
                'customer_id' => "Customer Name",
                'address_id' => "Address City",
                'rec_date' => "Record Date",
                'details' => "Details"
            ]
        ],
        //end_CustomerAddress_end

        //start_Status_start
        'status' => [
            'management' => 'Status Management',
            'create' => 'Create Status',
            'view' => 'View Status',
            'edit' => 'Edit Status',

            'table' => [
                'id' => "Id",
                'code' => "Code",
                'description' => "Description",
                'sort' => 'Sort',
                'total' => 'Status total|Status total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update',
                'id' => "Id",
                'code' => "Code",
                'description' => "Description"
            ]
        ],
        //end_Status_end

        //start_Contact_start
        'contacts' => [
            'management' => 'Contacts Management',
            'create' => 'Create Contact',
            'view' => 'View Contact',
            'edit' => 'Edit Contact',

            'table' => [
                'id' => "Id",
                'image' => "Photo",
                'name' => "Name",
                'customer_id' => "Customer Name",
                'status_id' => "Status Code",
                'email' => "Email",
                'web_sit' => "Web Site",
                'phone' => "Phone",
                'mobile' => "Mobile",
                'fax' => "Fax",
                'details' => "Details",
                'sort' => 'Sort',
                'total' => 'Contacts total|Contacts total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update',
                'id' => "Id",
                'image' => "Photo",
                'name' => "Name",
                'customer_id' => "Customer Name",
                'status_id' => "Status Code",
                'email' => "Email",
                'web_sit' => "Web Site",
                'phone' => "Phone",
                'mobile' => "Mobile",
                'fax' => "Fax",
                'details' => "Details"
            ]
        ],
        //end_Contact_end

        //start_Outcome_start
        'outcomes' => [
            'management' => 'Outcome Management',
            'create' => 'Create Outcome',
            'view' => 'View Outcome',
            'edit' => 'Edit Outcome',

            'table' => [
                'id' => "Id",
                'code' => "Code",
                'description' => "Description",
                'sort' => 'Sort',
                'total' => 'Outcome total|Outcome total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update',
                'id' => "Id",
                'code' => "Code",
                'description' => "Description"
            ]
        ]
        //end_Outcome_end

        // Do not delete me :) I'm used for auto-generation
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me'
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information'
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link'
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password'
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information'
            ]
        ]
    ]
];
