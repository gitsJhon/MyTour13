create DATABASE mytour13;
use mytour13;

create table pais (
    id_pais int primary key auto_increment,
    nombre_pais varchar(50)
);

create table usuario (
    id_usuario varchar(20) primary key not null,
    nombre_usuario varchar(30) not null,
    apellido_usuario varchar(30) not null,
    pass varchar(100) not null,
    gmail_usuario varchar(50) not null,
    rol_usuario varchar(1) not null,
    foto_usuario varchar(500),
    descripcion varchar(180),
    telefono varchar(12),
    calificacion int,
    fecha_creacion varchar(20),
    id_pais int,
    foreign key (id_pais) references pais(id_pais)
);

create table graffitis (
    id_grafiti int primary key auto_increment,
    nombre_graffiti varchar(50),
    imagen_carta varchar(500),
    nombre_autor varchar(50),
    descripcion_graffiti varchar(180)
);
create table contrato (
    id_contrato int primary key auto_increment,
    fecha_realizado date not null,
    fecha_inicio date not null,
    fecha_fin date not null,
    id_usuario varchar(20),
    foreign key (id_usuario) references usuario(id_usuario)
);

create table chat (
    id_chat int primary key auto_increment,
    id_usuario varchar(20),
    foreign key (id_usuario) references usuario(id_usuario)
);

create table mensajes (
    id_mensajes int primary key auto_increment,
    texto_mensaje varchar(350),
    archivo varchar(500),
    fecha_envio date,
    id_chat int,
    foreign key (id_chat) references chat(id_chat)
);

create table reportes (
    id_reporte int primary key auto_increment,
    razon_reporte varchar(600),
    decision_reporte varchar(600),
    id_usuario varchar(20),
    foreign key (id_usuario) references usuario(id_usuario)
);
CREATE VIEW vista_guia AS
SELECT * FROM usuario WHERE rol_usuario = 'G';  
DELIMITER //
CREATE FUNCTION get_ids() RETURNS VARCHAR(1000)
BEGIN
  DECLARE ids VARCHAR(1000) DEFAULT '';
  DECLARE done INT DEFAULT FALSE;
  DECLARE id_usuario VARCHAR(50);
  DECLARE cur CURSOR FOR SELECT id_usuario FROM vista_guia WHERE rol_usuario = 'G';
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
  OPEN cur;
  read_loop: LOOP
    FETCH cur INTO id_usuario;
    IF done THEN
      LEAVE read_loop;
    END IF;
    SET ids = CONCAT(ids, id_usuario, ',');
  END LOOP;
  CLOSE cur;
  RETURN ids;
END//
DELIMITER ;


