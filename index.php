<?php

include './Language.php';
$language = new Language('./languages/');

$languages = $language->get_available_languages();
$current_language = $language->get_current_language();

if (isset($_GET['language'])) {
    $language->set_language($_GET['language']);
}

echo '<select onchange="location = this.value;">';
foreach($languages as $lang) {
    $selected = '';
    if($lang == $current_language) {
        $selected = 'selected';
    }
    echo '<option value="?language=' . $lang . '" ' . $selected . '>' . $lang . '</option>';
}
echo '</select>';

// $languages = $language->get_available_languages();
// foreach ($languages as $lang) {
//     echo '<a href="?language=' . $lang . '">' . $lang . '</a>';
//     echo '<br>';
// }
echo "<br>";
echo $language->get('Language');
echo "<br>";
echo $language->get('Hello');
echo "<br>";

echo 'Current language: ' . $language->get_current_language();