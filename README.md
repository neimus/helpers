**Helpers. Вспомогательные методы и тесты**



* **text/StringHelper.php**

        getMiddleCharacter(string $text): string

    Метод возвращает средний символ из текста (длина текста не может превышать 1000 символов) 
    
    Если длина слова нечетна, вернет средний символ. Если длина слова четная, вернет средние 2 символа.
    
        removeFirstAndLastChar(string $text): string
        
   Простой метод, который удаляет первый и последний символ в строке
    
