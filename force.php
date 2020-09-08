<?php
/**
* Force You welcome Message to be display all the time
*/

function wrapper(){
 add_action( 'load-index.php', 'show_welcome_panel' );

function show_welcome_panel() {
    // get the current user ID
    $user_id = get_current_user_id();
    
    if ( 1 != get_user_meta( $user_id, 'show_welcome_panel', true ) ) // check if the welcome message is true or not in the datavase
        update_user_meta( $user_id, 'show_welcome_panel', 1 ); // Update the user meta
 }   
}

add_action( 'admin_init', 'wrapper');
