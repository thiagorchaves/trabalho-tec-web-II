CREATE DATABASE projetos;
CREATE TABLE projetos.project (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  have_git tinyint (1) NOT NULL,
  imagem varchar(255) NOT NULL,
  link_git varchar (255) NOT NULL,
  categoria varchar(10) NOT NULL CHECK(categoria IN('Games','Esportes','Politica', 'Nerd', 'Adulto', 'Outros')),
  comentario varchar (255) NOT NULL,
  createdate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;