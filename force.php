<?php
/**
* Force You welcome Message to be display all the time
*/

add_action( 'load-index.php', 'show_welcome_panel' );

function show_welcome_panel() {
    $user_id = get_current_user_id();

    if ( 1 != get_user_meta( $user_id, 'show_welcome_panel', true ) )
        update_user_meta( $user_id, 'show_welcome_panel', 1 );
}
