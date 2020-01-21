<?php

require_once 'File.php';
require_once 'FileParser.php';

# укажите путь к файлу
$file = new File('path/to/file');
# введите поисковой запрос
$needle = 'search-string';

$parser = new FileParser();
$result = $parser->find($file, $needle);

print $result;
