CREATE DATABASE LENTA;
CREATE TABLE IF NOT EXISTS 'zinutes' (
    'id' SMALLINT NOT NULL AUTO_INCREMENT,
    'vardas' VARCHAR(30) NOT NULL,
    'pavardas' VARCHAR(30) NOT NULL,
    'gimdienis' DATE DEFAULT DATE '1970-01-01',
    'email' VARCHAR(30) NOT NULL,
    'zinutes_laikas' DATE,
    'zinute' TEXT NOT NULL,
    PRIMARY KEY ('id'),
    UNIQUE KEY 'vardas' ('vardas'),
    UNIQUE KEY 'email' ('email')
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
