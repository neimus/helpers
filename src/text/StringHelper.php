<?php

namespace src\text;

use OutOfRangeException;

class StringHelper
{
    /**
     * Метод возвращает средний символ из текста (длина текста не может превышать 1000 символов)
     * Если длина слова нечетна, вернет средний символ. Если длина слова четная, вернет средние 2 символа.
     *
     * @param string $text
     *
     * @return string
     *
     * @throws \OutOfRangeException если символов в строке больше 1000
     */
    public function getMiddleCharacter(string $text): string
    {
        $length = \mb_strlen($text);
        if ($length <= 1000) {
            if ($length % 2 === 0) {
                return mb_substr($text, $length / 2 - 1, 2);
            }

            return $text[(int)($length / 2)];
        }

        throw new OutOfRangeException('Символов в строке должно быть не более 1000');
    }

    /**
     * Простой метод, который удаляет первый и последний символ в строке
     *
     * @param string $text
     *
     * @return string
     */
    public function removeFirstAndLastChar(string $text): string
    {
        $length = \mb_strlen($text);
        if ($length > 2) {
            return mb_substr($text, 1, $length - 2);
        }

        return '';
    }
}
