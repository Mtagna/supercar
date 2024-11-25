USE contact;

CREATE TABLE Formulaire(
  idcontact INT(5) NOT NULL AUTO_INCREMENT,
  name VARCHAR(15) NULL,
  email VARCHAR(30) NULL,
  objet VARCHAR(45) NULL,
  commentaires VARCHAR(255) NULL,
  PRIMARY KEY (idcontact)
	 )ENGINE=InnoDB  DEFAULT CHARSET=utf8;