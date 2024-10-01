CREATE DATABASE manage_system_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE manage_system_db;


CREATE TABLE users(
    id_user INT NOT NULL AUTO_INCREMENT,
    rol_user VARCHAR(150),
    fullname_user VARCHAR(200),
    lastname_user VARCHAR(200),
    email_user VARCHAR(200),
    password_user VARCHAR(200),
    date_created_user TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id_user)
);

INSERT INTO users(rol_user, fullname_user, lastname_user, email_user, password_user) VALUES
('administrador', 'admin', 'admin', 'admin@gmail.com', '$2b$12$ZBhwI3/WkiAQUfS9z6MAueKqaSWueDe2JTT1PVJ7YHMh8TVrGuURe');