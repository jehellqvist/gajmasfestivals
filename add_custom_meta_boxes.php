
/**
 *  Adds a metabox to posts (event-information)
 */
function program_add_meta_box() {

        add_meta_box(
            'programpunkt_meta',
            __( 'Programpunkts information', 'myplugin_textdomain' ),
            'program_meta_box_callback',
            'post',
            'normal',
            'high'
        );
}
add_action( 'add_meta_boxes', 'program_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function program_meta_box_callback( $post ) {

    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'program_meta_box', 'program_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value = get_post_meta( $post->ID, 'description1', true );

    echo '<p>
    <label for="description">';
    _e( 'En kort beskrivning av programpunkten', 'myplugin_textdomain' );
    echo '</label> ';
    echo '<br><textarea id="description1" name="description1" rows="4" cols="50">'
    . esc_attr( $value ) . 
    '</textarea>
    </p>';

    $value = get_post_meta( $post->ID, 'plats_pa_kartan1', true );
    echo '<p>
    <label for="plats_pa_kartan">';
    _e( 'Ange plats på kartan', 'myplugin_textdomain' );
    echo '</label> ';
    echo '<input type="text" id="plats_pa_kartan1" name="plats_pa_kartan1" value="' . esc_attr( $value ) . '" size="3" />
    </p>';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function program_save_meta_box_data( $post_id ) {

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

        // Check if our nonce is set.
        if ( ! isset( $_POST['program_meta_box_nonce'] ) ) {
            return;
        }

        // Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $_POST['program_meta_box_nonce'], 'program_meta_box' ) ) {
            return;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }

        // Check the user's permissions.
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

    /* OK, it's safe for us to save the data now. */
    
    // Make sure that it is set.
    if ( ! isset( $_POST['description1'] ) && ! isset( $_POST['plats_pa_kartan1']) ) {
        return;
    }

    // Sanitize user input.
    $description_data= sanitize_text_field( $_POST['description1'] );
    $plats_pa_kartan_data = sanitize_text_field( $_POST['plats_pa_kartan1'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, 'description1', $description_data );
    update_post_meta( $post_id, 'plats_pa_kartan1', $plats_pa_kartan_data );
}
add_action( 'save_post', 'program_save_meta_box_data' );

