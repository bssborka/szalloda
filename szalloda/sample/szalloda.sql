CREATE DATABASE szalloda DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci



CREATE TABLE szoba(
	szoba_id int(2) not null  PRIMARY KEY,
	szoba_tipus varchar(20) not null
	
);

CREATE TABLE szolgaltatas (
	szolgaltatas_id 			int				 not null PRIMARY KEY,
	szolgaltatas_neve 			varchar(30) 	not null 
);

CREATE TABLE foglalas(
	foglalas_id				int 					not null 	AUTO_INCREMENT PRIMARY KEY,
    vendeg_veznev 			varchar(25) 			not null,
	vendeg_kernev 			varchar(25) 			not null,
    vendeg_email 			varchar(30) 			not null,
	vendeg_tel 				int(15) 				not null,	
	erkezes_datum 			datetime				not null,	
	tavozas_datum			datetime 				not null,	
	szoba_tipus  			varchar(30) 			not null,
	szobaszam 				int(2),							
	specialis_menu 			varchar(4),	
	parkolo 				varchar(4),	
	masszazs 				varchar(4),	
	reggeli 				varchar(4),	
	tura 					varchar(4),	
	megjegyzes 				varchar(100)
);

ALTER TABLE foglalas
ADD CONSTRAINT FK_szoba
FOREIGN KEY (szobaszam) REFERENCES szoba(szoba_id);
ALTER TABLE foglalas
ADD CONSTRAINT FK_szolgaltatasok
FOREIGN KEY (szolgaltatasok) REFERENCES szolgaltatas(szolgaltatas_id);

INSERT INTO szoba(szoba_id, szoba_tipus) VALUES(1, 'lakosztaly');
INSERT INTO szoba(szoba_id, szoba_tipus) VALUES(2, 'menyasszonyi lakosztaly');
INSERT INTO szoba(szoba_id, szoba_tipus) VALUES(3, 'nemdohanyzo');
INSERT INTO szoba(szoba_id, szoba_tipus) VALUES(4, 'kisallat');

INSERT INTO szolgaltatas(szolgaltatas_id, szolgaltatas_neve ) VALUES(1, 'specialis menu');
INSERT INTO szolgaltatas(szolgaltatas_id, szolgaltatas_neve ) VALUES(2, 'parkolo');
INSERT INTO szolgaltatas(szolgaltatas_id, szolgaltatas_neve ) VALUES(3, 'masszazs');
INSERT INTO szolgaltatas(szolgaltatas_id, szolgaltatas_neve ) VALUES(4, 'reggeli');
INSERT INTO szolgaltatas(szolgaltatas_id, szolgaltatas_neve ) VALUES(5, 'tura');


INSERT INTO szalloda.foglalas(vendeg_veznev, vendeg_kernev, vendeg_email, vendeg_tel, erkezes_datum, erkezes_ido, tavozas_datum, tavozas_ido, szoba_tipus, szobaszam, specialis_menu, parkolo, masszazs, reggeli, tura, megjegyzes) VALUES('Doe', 'John', 'john.doe@sample.com', '+33 50 864 8456', '2021.06.20', '12:00', '2021.06.30', '15:00', '2', '1', '4');

