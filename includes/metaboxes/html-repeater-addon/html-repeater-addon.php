<?php
/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_paintings_additional_items_array($items_array) {
    array_push($items_array,
        array(
        'field_id'  => 'newthing1',
        'field_title'  =>  __('CD Genre','mp_core' ),
        'field_description'  => __( 'Select the genre','mp_core' ),
        'field_type'  => 'customfieldtype',
		'field_value' => 'Yeah baby'
    ));
	array_push($items_array,
        array(
        'field_id'  => 'newthing2',
        'field_title'  =>  __('CD Genre','mp_core' ),
        'field_description'  => __( 'Select the genre','mp_core' ),
        'field_type'  => 'customfieldtype',
        'field_repeater' => 'my_sweet_repeater',
    ));
	
    return $items_array;
}
add_filter('mp_html_in_post_items_array','mp_paintings_additional_items_array');

/**
 * Add a custom field type to the metabox class for this plugin
 *
 */
function my_custom_field_type($field_id, $field_title, $field_description, $value, $classname){
		echo '<p><label for="' . $field_id . '">';
		echo '<strong>' .  $field_title . '</strong>';
		echo $field_description != "" ? ' - ' . $field_description : '';
		echo '</label><br />';
		echo '<input type="text" class="' . $classname . '" id="' . $field_id . '" name="' . $field_id . '" value="'.$value.'" size="25" />';
		echo '</p>'; 
}
add_action('mp_core_' . 'html_metabox' . '_customfieldtype', 'my_custom_field_type', 10, 5);