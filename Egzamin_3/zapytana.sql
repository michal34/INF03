SELECT id, tytul, tresc FROM ogloszenia 
WHERE kategoria = 1;


SELECT uz.telefon FROM goloszenia as ogloszenia
JOIN uzytkownik as uz ON ogloszenia.uzytkownik_id = uz.id 
WHERE ogloszenia.id = 1;

