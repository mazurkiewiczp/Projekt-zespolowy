# Projekt-zespolowy

Tematem projektu była analiza danych testu psychologicznego określającego płeć mózgu,
przy pomocy sieci neuronowych. W repozytorium znajduje się tylko strona z ankietą.

Do analizy danych zastosowano dwie sieci neuronowe:

Uczenie nadzorowane:
* biblioteka Synaptic.js
* Sieć MLP

Uczenie nienadzorowane:
* biblioteka PyBrain
* Sieć Kohonena

Dla danych z zastosowanego testu psychologicznego znacznie lepsza okazało się uczenie
z nauczycielem (sieć MLP). Osiągnęła wynik skuteczności rozpoznawania płci wyraźnie
lepszy niż algorytm pierwotnie zastosowany w książce. Dane wyjściowe sieci kohonena
pokategoryzowały ankietowanych w zupełnie inny sposób niż oryginalny test.

Najlepszy wynik został osiągnięty dla sieci MLP z 15 neuronami w warstwie ukrytej i 100
zestawów treningowych. Średnia skuteczność wykrywania płci wynosiła 70%. Dla tych
samych danych algorytm z książki miał skuteczność 47%.
