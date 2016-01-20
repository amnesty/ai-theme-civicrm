<?php

function embedme_webform_element($variables) {

  $element = $variables['element'];

  // ------- Helena: Add a class for error elements.
  if (isset($element['#parents']) && form_get_error($element)) {
    array_push( $element['#wrapper_attributes']['class'], 'form-error');
  }

  $output = '<div ' . drupal_attributes($element['#wrapper_attributes']) . '>' . "\n";
  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . webform_filter_xss($element['#field_prefix']) . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . webform_filter_xss($element['#field_suffix']) . '</span>' : '';

  // Generate description for above or below the field.
  $above = !empty($element['#webform_component']['extra']['description_above']);
  $description = array(
    FALSE => '',
    TRUE => !empty($element['#description']) ? ' <div class="description">' . $element['#description'] . "</div>\n" : '',
  );

  switch ($element['#title_display']) {
    case 'inline':
      $output .= $description[$above];
      $description[$above] = '';
      // FALL THRU.
    case 'before':
    case 'invisible':
      $output .= ' ' . theme('form_element_label', $variables);
      $output .= ' ' . $prefix . $description[$above] . $element['#children'] . $suffix . "\n";
      break;

    case 'after':
      $output .= ' ' . $prefix . $description[$above] . $element['#children'] . $suffix;
      $output .= ' ' . theme('form_element_label', $variables) . "\n";
      break;

    case 'none':
    case 'attribute':
      // Output no label and no required marker, only the children.
      $output .= ' ' . $prefix . $description[$above] . $element['#children'] . $suffix . "\n";
      break;
  }

  $output .= $description[!$above];
  $output .= "</div>\n";

  return $output;
}
?>