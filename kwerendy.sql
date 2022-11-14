SELECT `nazwa`,`cena`,`dostepnosc` FROM `podzespoly` WHERE `producenci_id`=5

SELECT `id`,`opis` FROM `podzespoly` WHERE `dostepnosc`= 0 AND `producenci_id`=2 OR 1;

SELECT podzespoly.opis,podzespoly.cena,producenci.nazwa FROM `podzespoly` JOIN `producenci` ON podzespoly.producenci_id = producenci.id;

ALTER TABLE `producenci` ADD COLUMN priorytet INT;