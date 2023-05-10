# PHP-Class-Multi-language
 This class allows to implement multiple languages to a Web site developed in PHP Language.

## Example Usage
```php
require 'Language.php';
$language = new Language('languages/');

// Get All available languages
$languages = $language->get_available_languages();
//Get Current Active Language
$current_language = $language->get_current_language();

//Set New language
if (isset($_GET['language'])) {
    $language->set_language($_GET['language']);
}

//Language Selector
echo '<select onchange="location = this.value;">';
foreach($languages as $lang) {
    $selected = '';
    if($lang == $current_language) {
        $selected = 'selected';
    }
    echo '<option value="?language=' . $lang . '" ' . $selected . '>' . $lang . '</option>';
}
echo '</select>';

//Tests
echo "<br>";
echo $language->get('Language');
echo "<br>";
echo $language->get('Hello');
echo "<br>";

echo 'Current language: ' . $language->get_current_language();
```