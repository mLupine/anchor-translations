<?php

return array(

	'extend' => 'Ulepszenia', // Yeah, that's nowhere near "Extend", but literal translation would sound really bad in Polish

	'fields' => 'Własne pola',
	'fields_desc' => 'Dodaj swoje własne pola',

	'variables' => 'Zmienne strony',
	'variables_desc' => 'Dodatkowe metadane strony',

	'create_field' => 'Utwórz nowe pole',
	'editing_custom_field' => 'Edytowanie pola &ldquo;%s&rdquo;',
	'nofields_desc' => 'Pusto tu. Na razie!', // Changed to sound better in Polish

	'create_variable' => 'Utwórz nową zmienną',
	'editing_variable' => 'Ediytowanie zmiennej &ldquo;%s&rdquo;',
	'novars_desc' => 'Brak zmiennych. Zmienisz to?',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Typ treści, jaką chcesz umieścić w tym polu.',

	'field' => 'Pole',
	'field_explain' => 'Typ pola HTML',

	'key' => 'Unikalny klucz',
	'key_explain' => 'Unikalny klucz Twojego pola',
	'key_missing' => 'Wpisz swój unikalny klucz dla pola',
	'key_exists' => 'Pole o takim kluczu już istnieje w serwisie',

	'label' => 'Opis',
	'label_explain' => 'Opis pola, możliwy do zrozumienia dla człowieka',
	'label_missing' => 'Wpisz opis pola',

	'attribute_type' => 'Typy plików',
	'attribute_type_explain' => 'Oddzielona przecinkami lista dozwolonych rozszerzeń plików. Zostaw puste, by akceptować wszystkie.',

	// images
	'attributes_size_width' => 'Maksymalna szerokość',
	'attributes_size_width_explain' => 'Zdjęcia zostaną pomniejszone, jeśli przekroczą tą szerokość',

	'attributes_size_height' => 'Maksymalna wysokość',
	'attributes_size_height_explain' => 'Zdjęcia zostaną pomniejszone, jeśli przekroczą tą wysokość',

	// custom vars
	'name' => 'Nazwa',
	'name_explain' => 'Unikalna nazwa',
	'name_missing' => 'Wpisz unikalną nazwę',
	'name_exists' => 'Ta nazwa jest już użyta',

	'value' => 'Wartość',
	'value_explain' => 'Zawartość, którą chcesz przechować (maksymalnie 64KB)',
	'value_code_snipet' => 'Użyj tego kodu w swoim szablonie:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Zmienna została utworzona',
	'variable_updated' => 'Zmienna została zaktualizowana',
	'variable_deleted' => 'Zmienna została usunięta',

	'field_created' => 'Pole zostało dodane',
	'field_updated' => 'Pole zostało zaktualizowane',
	'field_deleted' => 'Pole zostało usunięte'

);