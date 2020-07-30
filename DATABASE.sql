CREATE DATABASE IF NOT EXISTS evaluacion;
USE evaluacion;

CREATE TABLE clients(
	id	int(255)	auto_increment not null,
	clave 	varchar(255) 	not null,
	nom_com	varchar(255)	not null,
	raz_soc	varchar(255) 	not null,
	rfc	varchar(255)	not null,
	edad 	int(255),
	domicilio varchar(10),
	status int(3),
	created_at      datetime DEFAULT NULL,
   	updated_at      datetime DEFAULT NULL,
    	remember_token  varchar(255),
    	CONSTRAINT pk_clients PRIMARY KEY (id)

)ENGINE=InnoDb;