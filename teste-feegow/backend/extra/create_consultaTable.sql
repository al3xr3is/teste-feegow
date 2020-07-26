USE feegow;

CREATE TABLE IF NOT EXISTS consultas (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    specialty_id VARCHAR(100) NOT NULL,
    professional_id VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    cpf VARCHAR(100) NOT NULL,
    source_id VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    date_time DATETIME DEFAULT NOW()
);