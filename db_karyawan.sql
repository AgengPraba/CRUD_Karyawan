DROP DATABASE IF EXISTS db_karyawan;
CREATE DATABASE db_karyawan;
USE db_karyawan;

CREATE TABLE karyawan (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    j_kel CHAR(1),
    tgl_lahir DATE
);

INSERT INTO karyawan (nama,j_kel,tgl_lahir) VALUES ('Nasi Goreng', 'L', '2024-03-15');