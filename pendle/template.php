
<?php function pendle_menu_link__menu_block($variables) {
 return theme_menu_link($variables);
 }




function pendle_preprocess_html(&$vars) {
  $path = drupal_get_path_alias();
  $aliases = explode('/', $path);

  foreach($aliases as $alias) {
    $vars['classes_array'][] = drupal_clean_css_identifier($alias);
  }
}
function pendle_menu_link(array $variables) {
 	$element = $variables['element'];
	$sub_menu = '';

	if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
	}

	if ($element['#original_link']['menu_name'] == 'navigation') {
		$linkText = '<span>' . $element['#title'] . '</span>';
		$element['#localized_options']['html'] = true;
	} else {
		$linkText = $element['#title'];
	}

	$output = l($linkText, $element['#href'], $options = $element['#localized_options']);

	return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
