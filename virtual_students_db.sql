CREATE DATABASE virtual_students; 

USE virtual_students;

CREATE TABLE configuracion_del_sitio(
	id_sitio INT NOT NULL AUTO_INCREMENT, 
	titulo_sitio VARCHAR(255) NOT NULL,
    
    PRIMARY KEY(id_sitio)
    
);
    

CREATE TABLE centros_educativos(
	id_centro INT NOT NULL AUTO_INCREMENT,
    nombre_centro VARCHAR(255) NOT NULL, 
    direccion VARCHAR(255) NOT NULL, 
    postal_code INT(5) NOT NULL, 
    localidad VARCHAR(255) NOT NULL, 
    provincia VARCHAR(255) NOT NULL,
    com_auto VARCHAR(255) NOT NULL, 
    pais VARCHAR(255) NOT NULL, 
    
    PRIMARY KEY(id_centro)
    
);

CREATE TABLE ciclos_formativos(
	id_ciclo INT NOT NULL AUTO_INCREMENT, 
    nombre_ciclo VARCHAR(255) NOT NULL, 
    descripcion TEXT(65535) NOT NULL,
    num_cursos INT NOT NULL, 
    horas_totales INT NOT NULL, 
    familia_profesional VARCHAR(255) NOT NULL, 
    
    PRIMARY KEY(id_ciclo)
    
);

CREATE TABLE modulos(
	id_modulo INT NOT NULL AUTO_INCREMENT, 
    nombre_modulo VARCHAR(255) NOT NULL,
    descripcion TEXT(65535) NOT NULL,
    horas_totales INT NOT NULL, 
    horas_semanales INT NOT NULL, 
    curso VARCHAR(255) NOT NULL, 
    
    PRIMARY KEY(id_modulo)
);

CREATE TABLE usuarios(
	id_user INT NOT NULL AUTO_INCREMENT, 
    username VARCHAR(255) NOT NULL, 
    _password VARCHAR(255) NOT NULL, 
    nombre_usuario VARCHAR(255) NOT NULL, 
    primer_apellido VARCHAR(255) NOT NULL, 
    segundo_apellido VARCHAR(255) NOT NULL, 
    fecha_de_nacimiento DATE NOT NULL, 
    dni VARCHAR(12) NOT NULL, 
    direccion VARCHAR(255) NOT NULL, 
    postal_code INT(5) NOT NULL, 
    localidad VARCHAR(255) NOT NULL, 
    com_auto VARCHAR(255) NOT NULL,
    nacionalidad VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono_movil INT(11) NOT NULL, 
    telefono_fijo INT(11) NOT NULL, 
    categoria VARCHAR(255) NOT NULL, 
    
    PRIMARY KEY(id_user)
);
    
CREATE TABLE alumnos(
	id_alumno INT NOT NULL AUTO_INCREMENT, 
    nia INT NOT NULL, 
    id_user_fk INT NOT NULL,
    
	PRIMARY KEY(id_alumno), 
    
    FOREIGN KEY(id_user_fk)
		REFERENCES usuarios(id_user)
			ON UPDATE CASCADE
            		ON DELETE CASCADE
);

CREATE TABLE profesores(
	id_profesor INT NOT NULL AUTO_INCREMENT,
    nrp INT NOT NULL, 
    salario INT NULL, 
    email_docente VARCHAR(255) NOT NULL, 
    id_user_fk INT NOT NULL, 
    
    PRIMARY KEY(id_profesor), 
    
    FOREIGN KEY(id_user_fk)
		REFERENCES usuarios(id_user)
			ON UPDATE CASCADE
            		ON DELETE CASCADE
            
);

CREATE TABLE correspondencia_profesores_modulos(
	id_profesor_fk INT NOT NULL,
	id_modulo_fk INT NOT NULL, 
	
	PRIMARY KEY(id_profesor_fk, id_modulo_fk), 
	
	FOREIGN KEY(id_profesor_fk)
		REFERENCES profesores(id_profesor)
			ON DELETE CASCADE
			ON UPDATE CASCADE, 
	
	FOREIGN KEY(id_modulo_fk)
		REFERENCES modulos(id_modulo)
			ON UPDATE CASCADE
			ON DELETE CASCADE
	
);

CREATE TABLE padres_de_alumnos(
	id_padre INT NOT NULL AUTO_INCREMENT, 
    parentesco VARCHAR(255) NOT NULL, 
    id_alumno_fk INT NOT NULL, 
    id_user_fk INT NOT NULL, 
    
    PRIMARY KEY(id_padre), 
    
    FOREIGN KEY(id_alumno_fk)
		REFERENCES alumnos(id_alumno)
			ON UPDATE CASCADE
            		ON DELETE CASCADE, 
            
	FOREIGN KEY(id_user_fk)
		REFERENCES usuarios(id_user)
			ON UPDATE CASCADE
            		ON DELETE CASCADE
);

CREATE TABLE correspondecia_ciclos_modulos(
	id_modulo_fk INT NOT NULL, 
    id_ciclo_fk INT NOT NULL, 
    
    PRIMARY KEY(id_modulo_fk, id_ciclo_fk), 
    
    FOREIGN KEY(id_modulo_fk)
		REFERENCES modulos(id_modulo)
			ON UPDATE CASCADE
            		ON DELETE CASCADE, 
            
	FOREIGN KEY(id_ciclo_fk)
		REFERENCES ciclos_formativos(id_ciclo)
			ON UPDATE CASCADE
            		ON DELETE CASCADE
);

CREATE TABLE documentos(
	id_documento INT NOT NULL AUTO_INCREMENT, 
    nombre VARCHAR(255) NOT NULL, 
    entidad_reguladora VARCHAR(255) NOT NULL, 
    fecha_expedicion DATE NOT NULL, 
    fecha_fin_validez DATE NULL, 
    archivo LONGBLOB NOT NULL, 
    id_alumno_fk INT NOT NULL, 
    
    PRIMARY KEY(id_documento), 
    
    FOREIGN KEY(id_alumno_fk)
		REFERENCES alumnos(id_alumno)
			ON UPDATE CASCADE
            ON DELETE CASCADE
            
);

CREATE TABLE tareas_recursos_examenes(
	id_tre INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL, 
    categoria VARCHAR(255) NOT NULL, /* Si es tarea, recurso o examen*/ 
    fecha_subida DATE NOT NULL,
    fecha_limite DATE NULL, /* Solo en el caso de las tareas*/
    tipo VARCHAR(255) NULL, /* Solo en el caso de las tareas. Si es obligatoria o no obligatoria, para subir nota, etc*/
    nota VARCHAR(255) NULL, /* Solo en el caso de tareas y examenes*/
    observaciones TEXT(65535) NULL, 
    archivo LONGBLOB NOT NULL, 
    id_profesor_fk INT NULL, 
    id_modulo_fk INT NOT NULL, 
    
    PRIMARY KEY(id_tre), 
    
    FOREIGN KEY(id_profesor_fk)
		REFERENCES profesores(id_profesor)
			ON UPDATE CASCADE
            		ON DELETE SET NULL,
            
	FOREIGN KEY(id_modulo_fk)
		REFERENCES modulos(id_modulo)
			ON UPDATE CASCADE
            		ON DELETE CASCADE
            
);

CREATE TABLE entregas_de_tareas(
	id_alumno_fk INT NOT NULL, 
    id_tre_fk INT NOT NULL, 
    fecha_de_entrega DATE NOT NULL, 
    
    PRIMARY KEY(id_alumno_fk, id_tre_fk), 
    
    FOREIGN KEY(id_alumno_fk) 
		REFERENCES alumnos(id_alumno)
			ON UPDATE CASCADE
            ON DELETE CASCADE, 
            
	FOREIGN KEY(id_tre_fk)
		REFERENCES tareas_recursos_examenes(id_tre)
			ON UPDATE CASCADE
            ON DELETE CASCADE
            
); 

CREATE TABLE correspondencia_ciclos_centros(
	id_ciclo_fk INT NOT NULL, 
    id_centro_fk INT NOT NULL,
    
    PRIMARY KEY(id_ciclo_fk, id_centro_fk), 
    
    FOREIGN KEY(id_ciclo_fk)
		REFERENCES ciclos_formativos(id_ciclo)
			ON UPDATE CASCADE
            ON DELETE CASCADE, 
            
	FOREIGN KEY(id_centro_fk)
		REFERENCES centros_educativos(id_centro)
			ON UPDATE CASCADE
            ON DELETE CASCADE
            
);

CREATE TABLE matriculaciones(
	id_user_fk INT NOT NULL, 
    id_centro_fk INT NOT NULL, 
    id_ciclo_fk INT NOT NULL, 
    id_modulo_fk INT NOT NULL, 
    fecha_matriculacion DATE NOT NULL, 
    curso_academico VARCHAR(255) NOT NULL, 
    fecha_inicio_curso DATE NOT NULL, 
    fecha_fin_curso DATE NOT NULL, 
    
    PRIMARY KEY(id_user_fk, id_centro_fk, id_ciclo_fk, id_modulo_fk), 
    
    FOREIGN KEY(id_user_fk)
		REFERENCES usuarios(id_user)
			ON UPDATE CASCADE
            		ON DELETE CASCADE, 
            
	FOREIGN KEY(id_centro_fk)
		REFERENCES centros_educativos(id_centro)
			ON UPDATE CASCADE
            		ON DELETE CASCADE, 
            
	FOREIGN KEY(id_ciclo_fk)
		REFERENCES ciclos_formativos(id_ciclo)
			ON UPDATE CASCADE
			ON DELETE CASCADE, 
            
	FOREIGN KEY(id_modulo_fk)
		REFERENCES modulos(id_modulo)
			ON UPDATE CASCADE
            		ON DELETE CASCADE
            
);
    

    
