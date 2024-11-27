<?php

    $business = [
        'name' => 'Laracasts',
        'cost' => 15,
        'categories' => ["Testing","PHP","JavaScript"]
    ];

    $business['name']; //Laracasts

    if($business['cost'] > 99){
        echo "Not interested";
    }

    function register($user){
        // Create the user record in th db.
        // Log them in.
        // Send a welcome email
        // Redirect to their new dashboard
    }
require "index.view.php";