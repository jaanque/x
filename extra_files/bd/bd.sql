USE bd;

CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL
);

INSERT INTO personas (nombre, fecha_nacimiento) VALUES 
('Juan Pérez', '1990-05-15'),
('María López', '1985-09-22');
