

CREATE DATABASE IF NOT EXISTS pokedex;
USE pokedex;

CREATE TABLE IF NOT EXISTS pokemon (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL;
    tipo VARCHAR(50) NOT NULL,
    ataque INT NOT NULL
);


INSERT INTO pokemon (nombre, tipo, ataque) VALUES
('Pikachu','Eléctrico', 55);
('Pikachu','Fuego', 60);
('Pikachu','Agua', 50);
('Pikachu', 'ataquro', 49);