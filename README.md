## Lorem-Ipsum-Generator
- Jednoduché API pro tvorbu Lorem Ipsum.
- Endpointem v tomto kódu je samotný skript. Když klient odešle požadavek na tento koncový bod s příslušnými vstupními parametry (num_paragraphs a num_sentences), skript se spustí a vygeneruje text Lorem Ipsum a vytvoří odpověď JSON, která se odešle zpět klientovi.
- Output je vracen jako JSON objekt obsahující daný počet vět "Lorem Ipsum".

# Požadavky
- PHP 7.0 nebo novější.
- Web Server Software (Apache, Nginx)

# Instalace
- Naklonujte nebo nainstalujte repozitář do vašeho zařízení.
- Vložte obsah repozitáře do vašeho root document directory vašeho web serveru.
- Ujistěte se že web server je nakonfigurován aby zvládal PHP files.

# Užití
- "num_paragraphs" je vstupní parametr, jenž vypíše kolik paragrafů je v textu.
- "num_sentences" je vstupní parametr, pomocí kterého si vyberete počet vět jež skript vypíše.

# Výstup
- API vrací JSON Objekt obsahující zvolený počet vět a paragrafů.
- JSON Objekt má následující strukturu: {"num_paragraphs": "$num_paragraphs", "text:"num_sentences"}

# Jak to funguje
- Skript generuje Lorem Ipsum dle vašeho zvoleného počtu paragrafů a vět. 
