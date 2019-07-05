<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'roles' => [
            'created' => 'The role was successfully created.',
            'deleted' => 'The role was successfully deleted.',
            'updated' => 'The role was successfully updated.'
        ],

        'users' => [
            'cant_resend_confirmation' =>
                'The application is currently set to manually approve users.',
            'confirmation_email' =>
                'A new confirmation e-mail has been sent to the address on file.',
            'confirmed' => 'The user was successfully confirmed.',
            'created' => 'The user was successfully created.',
            'deleted' => 'The user was successfully deleted.',
            'deleted_permanently' => 'The user was deleted permanently.',
            'restored' => 'The user was successfully restored.',
            'session_cleared' => "The user's session was successfully cleared.",
            'social_deleted' => 'Social Account Successfully Removed',
            'unconfirmed' => 'The user was successfully un-confirmed',
            'updated' => 'The user was successfully updated.',
            'updated_password' =>
                "The user's password was successfully updated."
        ]
    ],

    'frontend' => [
        'contact' => [
            'sent' =>
                'Your information was successfully sent. We will respond back to the e-mail provided as soon as we can.'
        ],

        //start_Address_start
        'address' => [
            'saved' => 'Address saved successfully.',
            'updated' => 'Address updated successfully.',
            'deleted' => 'Address deleted successfully.'
        ],
        //end_Address_end

        //start_Customer_start
        'customer' => [
            'saved' => 'Customer saved successfully.',
            'updated' => 'Customer updated successfully.',
            'deleted' => 'Customer deleted successfully.'
        ],
        //end_Customer_end

        //start_CustomerAddress_start
        'customer_address' => [
            'saved' => 'CustomerAddress saved successfully.',
            'updated' => 'CustomerAddress updated successfully.',
            'deleted' => 'CustomerAddress deleted successfully.'
        ],
        //end_CustomerAddress_end

        //start_Status_start
        'status' => [
            'saved' => 'Status saved successfully.',
            'updated' => 'Status updated successfully.',
            'deleted' => 'Status deleted successfully.'
        ],
        //end_Status_end

        //start_Contact_start
        'contact' => [
            'saved' => 'Contact saved successfully.',
            'updated' => 'Contact updated successfully.',
            'deleted' => 'Contact deleted successfully.'
        ],
        //end_Contact_end

        //start_Outcome_start
        'outcome' => [
            'saved' => 'Outcome saved successfully.',
            'updated' => 'Outcome updated successfully.',
            'deleted' => 'Outcome deleted successfully.'
        ]
        //end_Outcome_end

        // Do not delete me :) I'm used for auto-generation
    ]
];
