<?php

/**
 * Класс, сканирующий файл
 */
class FileParser
{
    /**
     * Ведет поиск по файлу и возвращает массив с данными о строке и позиции в ней
     * @param File $file
     * @param string $searchQuery
     * @return string
     */
    public function find(File $file, string $searchQuery): string
    {
        $fileSrc = $file->getSrc();
        $stringNumber = 0;
        $firstPos = 0;

        foreach ($fileSrc as $key => $value) {
            if (strpos($value, $searchQuery,0) !== false ) {
                $stringNumber = $key + 1;
                $firstPos = mb_strpos($value, $searchQuery, 0) + 1;
                break;
            } elseif ($key === array_key_last($fileSrc)) {
                return "Вхождение '$searchQuery' не найдено. \n";
            }
        }

        return "String $stringNumber, position start from $firstPos \n";
    }
}
