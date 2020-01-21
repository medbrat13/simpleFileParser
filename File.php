<?php

/**
 * Файл
 */
class File
{
    private $fileSrc;

    public function __construct(string $fileName)
    {
        if (file_exists($fileName) && is_readable($fileName)) {
            $this->fileSrc = file($fileName);
        } else {
            throw new \Exception('Файл не найден.');
        }
    }

    public function getSrc(): array
    {
        return $this->fileSrc;
    }
}