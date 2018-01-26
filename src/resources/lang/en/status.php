<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Status[Order,Shipping,Payment] Reset Language Lines
    |--------------------------------------------------------------------------
    | 
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'order' => [
        1 => 'Pending',
        2 => 'Processing',
        3 => 'Complete',
        4 => 'Cancelled'
    ],

    'shipping' => [
        1 => 'Not Yet Shipped',
        2 => 'Shipped',
        3 => 'Delivered',
        4 => 'Cancelled'        
    ],

    'payment' => [
        1 => 'Unpaid',
        2 => 'Paid',
        3 => 'Partially Refunded',
        4 => 'Refunded',
        5 => 'Cancelled'
    ]
];