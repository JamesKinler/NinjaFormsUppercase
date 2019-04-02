<?php 

add_filter( 'ninja_forms_submit_data', 'my_ninja_forms_submit_data' );
function my_ninja_forms_submit_data( $form_data ) {

foreach( $form_data[ 'fields' ] as $key => $field ) { // Field settigns, including the field key and value.
   if( 284 != $key ) continue; // Check the field key to see if this is the field that I need to update.
    $form_data[ 'fields' ][$key]['value'] = strtoupper($form_data[ 'fields' ][$key]['value']); // Update the submitted field value.
}
  $form_settings = $form_data[ 'settings' ]; // Form settings.

  $extra_data = $form_data[ 'extra' ]; // Extra data included with the submission.

  return $form_data;
}


?>
