<?php

namespace src\text;

use OutOfRangeException;

class StringHelper
{
    /**
     * Метод возвращает средний символ из текста (длина текста не может превышать 1000 символов)
     * Если длина слова нечетна, вернет средний символ. Если длина слова четная, вернет средние 2 символа.
     *
     * https://www.codewars.com/kata/get-the-middle-character/php
     *
     * @param string $text
     *
     * @return string
     *
     * @throws \OutOfRangeException если символов в строке меньше 1 или больше 1000
     */
    public function getMiddleCharacter(string $text): string
    {
        $length = \strlen($text);
        if ($length > 0 && $length <= 1000) {

            if ($length % 2 === 0) {
                return substr($text, $length / 2 - 1, 2);
            }

            return $text[(int)($length / 2)];
        }

        throw new OutOfRangeException('Символов в строке должно быть от 0 до 1000');
    }
}
