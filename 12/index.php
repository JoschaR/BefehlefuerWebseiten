<!DOCTYPE html>
<html>
    <head>
        <title>Titel</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="bootstrap.css"/>
    </head>
    <body>
        <div class="site">
            <div class="header">Header</div>
            <div class="nav">Navigation</div>
            <div class="content">            

            <?php
                
                
                function addition($zahl1, $zahl2){
                    $summe = $zahl1 + $zahl2;
                    return $summe;
                }

                echo "Das Ergebnis ist: " . addition(1,2);
                echo "</br>";
                echo rand();
                
                /**
                 * AUFGABE
                 * 1) Programmiere die Funktion subtraktion(). Sie hat zwei Eingabeparameter zahl1 und zahl2
                 * 2) Rufe diese Funktion auf.
                 * 3) Programmiere die Funktion division(). Sie hat zwei Eingabeparameter zahl1 und zahl2
                 * 4) Rufe diese Funktion auf.
                 * 5) Programmiere die Funktion multiplikation(). Sie hat zwei Eingabeparameter zahl1 und zahl2
                 * 6) Rufe diese Funktion auf.
                 * 
                 * 7) Recherchiere zu der Funktion rand() auf https://www.w3schools.com/php/func_math_rand.asp
                 * 8) Speichere die Funktion rand() in eine Variable zufallszahl
                 * 9) Gib diese Variable zufallszahl per echo-Befehl aus
                 * 
                 * 7) Recherchiere zu der Funktion empty() auf https://www.w3schools.com/php/func_var_empty.asp
                 * 8) Speichere eine Variable testwert mit einem Wert 10
                 * 9) Überprüfe die Variable testwert mit Hilfe einer If-Struktur und der empty-Funktion
                 * 
                 * 10) Recherchiere zu der Funktion file_exists() auf https://www.w3schools.com/php/func_filesystem_file_exists.asp
                 * 11) Wende sie an und überprüfe ob die style.css existiert
                 * 
                 * 12) Recherchiere zu der Funktion time()  auf https://www.w3schools.com/php/func_date_time.asp
                 * 13) Speichere die Funktion time() in die Variable zeit
                 * 14) Gib diese Variable zeit per echo-Befehl aus
                 */
            ?>            
            </div>
            <div class="footer">Footer</div>        
        </div>
    </body>
</html>