CREATE DATABASE eva;
USE eva;

-- Tabla Medicos
CREATE TABLE medicos(
  idMedico INT(11) AUTO_INCREMENT NOT NULL,
  nombreMedico VARCHAR(30) NOT NULL,
  apellidoMedico VARCHAR(30) NOT NULL,
  CONSTRAINT PK_Medicos PRIMARY KEY(idMedico)
)ENGINE=InnoDb;

-- Tabla Consultorios
CREATE TABLE consultorios(
  idConsultorio INT(11) AUTO_INCREMENT NOT NULL,
  nombreConsultorio VARCHAR(30) NOT NULL,
  CONSTRAINT PK_Consultorios PRIMARY KEY(idConsultorio)
)ENGINE=InnoDb;

-- Tabla Paciente
CREATE TABLE pacientes(
  idPaciente INT(11) AUTO_INCREMENT NOT NULL,
  nombrePaciente VARCHAR(30) NOT NULL,
  apellidoPaciente VARCHAR(30) NOT NULL,
  fechaNacimiento DATE NOT NULL,
  sexo VARCHAR(15) NOT NULL,
  CONSTRAINT PK_Pacientes PRIMARY KEY(idPaciente)
)ENGINE=InnoDb;

-- Tabla Tratamientos
CREATE TABLE tratamientos(
  idTratamiento INT(11) AUTO_INCREMENT NOT NULL,
  idPaciente INT(11) NOT NULL,
  fechaAsignado DATE NOT NULL,
  descripcion VARCHAR(255) NOT NULL,
  fechaInicio DATE NOT NULL,
  fechaFin DATE NOT NULL,
  observacionesT VARCHAR(255) NOT NULL,
  CONSTRAINT PK_Tratamiento PRIMARY KEY(idTratamiento),
  CONSTRAINT FK_Tratamiento_Paciente FOREIGN KEY(idPaciente) REFERENCES pacientes(idPaciente)
)ENGINE=InnoDb;

-- Tabla Tratamientos
CREATE TABLE citas(
  idCita INT(11) AUTO_INCREMENT NOT NULL,
  idPaciente INT(11) NOT NULL,
  idMedico INT(11) NOT NULL,
  idConsultorio INT(11) NOT NULL,
  fecha DATE NOT NULL,
  hora TIME NOT NULL,
  estado VARCHAR(15) NOT NULL,
  observacionesC VARCHAR(255) NOT NULL,
  CONSTRAINT PK_Tratamiento PRIMARY KEY(idCita),
  CONSTRAINT FK_Citas_Paciente FOREIGN KEY(idPaciente) REFERENCES pacientes(idPaciente),
  CONSTRAINT FK_Citas_Medico FOREIGN KEY(idMedico) REFERENCES medicos(idMedico),
  CONSTRAINT FK_Citas_Consultorio FOREIGN KEY(idConsultorio) REFERENCES consultorios(idConsultorio)
)ENGINE=InnoDb;

CREATE TABLE instituto(
  idInstituto INT(11) AUTO_INCREMENT NOT NULL,
  nombreInstituto VARCHAR(30) NOT NULL,
  CONSTRAINT PK_Instituto PRIMARY KEY(idInstituto)
)ENGINE=InnoDb;


CREATE TABLE user(
  idUser INT(11) AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(20) NOT NULL,
  apellido VARCHAR(20) NOT NULL,
  edad VARCHAR(20) NOT NULL,
  idInstituto INT(11) NOT NULL
  CONSTRAINT PK_User PRIMARY KEY(idUser),
  CONSTRAINT FK_Instituto FOREIGN KEY(idInstituto) REFERENCES instituto(idInstituto)
)ENGINE=InnoDb;