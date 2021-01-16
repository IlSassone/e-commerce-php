CREATE DATABASE IF NOT EXISTS `e-commerce-del-sium`;

USE `e-commerce-del-sium`;


CREATE TABLE articoli(
	ID int(11) auto_increment primary key,
    Nome varchar(255) default null,
    Descrizione varchar(255) default null,
    Prezzo decimal default null,
    LinkImmagine varchar(255) default null
);


CREATE TABLE clienti(
	ID int(11) auto_increment primary key,
    CF varchar(16) not null unique,
    Nome varchar(255) default null,
    Cognome varchar(255) default null,
    Email varchar(255) not null unique,
    Password varchar(255) not null
);


CREATE TABLE ordini(
	ID int(11) auto_increment primary key,
    DataOrdine date not null,
    IDCliente int(11) not null,
    FOREIGN KEY ordini(IDCliente) REFERENCES clienti(ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

desc ordini;

CREATE TABLE articoliOrdini(
	ID int(11) auto_increment primary key,
    Quantità double not null,
    PrezzoUnitario decimal not null,
    IDArticoli int(11) not null,
    IDOrdini int(11) not null,
    FOREIGN KEY (IDArticoli) REFERENCES articoli(ID),
    FOREIGN KEY (IDOrdini) REFERENCES ordini(ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);


ALTER TABLE articoli 
modify column Prezzo decimal(10,2) not null;


ALTER TABLE articoliOrdini 
modify column PrezzoUnitario decimal(10,2) not null;


ALTER TABLE articoli
add column Valuta varchar(3) not null;

ALTER table articoliOrdini
add column Valuta varchar(3) not null;



