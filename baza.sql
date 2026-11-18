-- Tabela do ćwiczenia. Importujemy w phpMyAdmin (zakładka Import)
-- do bazy utworzonej wcześniej na hostingu.

CREATE TABLE IF NOT EXISTS uczniowie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO uczniowie (imie) VALUES ('Jan Testowy');
