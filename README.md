# MangaReader
Organizza i tuoi manga in modo da poterli leggere da qualunque dispositivo tenendoli su uno solo.

## Scopo
Tutti noi appassionati spesso ci troviamo a dover leggere fumetti che non sono ancora usciti e per questo ci affidiamo alle scan, ma spesso i siti che le forniscono sono pieni di pubblicità o poco pratici.
<br>Allora perchè non sfruttare questo e creare un sistema semplice ed efficace, privo di ogni tipo di pubblicità?
<br>L'obbiettivo finale è rendere più facile la vita all'utilizzatore.

## Implementazione
L'intero progetto si basa su 4 elementi HTML, CSS, JS e PHP, ognuna delle quali responsabile di una specifica parte del sito.
<br>L'uso dell'HTML e CSS permette la realizzazione del sito che è composto solamente di 3 elementi: una select per il volume, una per il capitolo e una galleria.
<br>L'uso di JS e PHP invece permette di gestire dinamicamente le scelte che l'utente compie mediante le select, nello specifico JS si occupa di riportare l'utente al contenuto selezionato da esso e il PHP invece genera la galleria e naturalmente le possibili opzioni selezionabili dalle select.

N.B.: Attualmente il progetto prevede che il manga sia uno solo e che quindi si possano selezionare solo Volume e Capitolo, il primo update in programma è quello per il supporto al Multi-Manga.

## Requisiti
Fondamentalmente l'unico requisito è avere un dispositivo su cui poter abilitare un server web e poter caricare le scan.

## Organizzazione Scan
E' importante che le scan vengano organizzate secondo una semplice struttura ad albero.

      Manga XXX:
          volumeX:
            -CapitoloA:
              -PrimaImmagine.jpg
              -Secondaimmagina.jpg
                ...
            -CapitoloB:
              ...
          volumeY:
            ...
      Manga YYY:
          ...
