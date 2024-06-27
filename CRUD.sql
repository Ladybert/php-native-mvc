-- Create Table Alpatech
CREATE TABLE alpatech (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    kelas INT NOT NULL,
    dtp INT NOT NULL,
    jurusan VARCHAR(255) NOT NULL,
    FOREIGN KEY (kelas) REFERENCES kelas(id),
    FOREIGN KEY (dtp) REFERENCES dtp(id)
);

-- create data Table alpatech
INSERT INTO alpatech (nama, kelas, dtp, jurusan) 
VALUES ('Muhammad Rashad', 1, 1, 'Teknik Jaringan Akses');

-- read all data
SELECT alpatech.id, alpatech.nama, kelas.kelas, dtp.dtp, alpatech.jurusan
FROM alpatech
JOIN kelas ON alpatech.kelas = kelas.id
JOIN dtp ON alpatech.dtp = dtp.id;

-- read data from id
SELECT alpatech.id, alpatech.nama, kelas.kelas, dtp.dtp, alpatech.jurusan
FROM alpatech
JOIN kelas ON alpatech.kelas = kelas.id
JOIN dtp ON alpatech.dtp = dtp.id
WHERE alpatech.id = 1;

-- update data from id
UPDATE alpatech
SET nama = 'Fawzy AL-Baariq', kelas_id = 1, dtp_id = 1, jurusan = 'Sistem Jaringan & Aplikasi'
WHERE id = 1;

--  delete data b y id
DELETE FROM alpatech WHERE id = 1;

-- ------------------------------------------------------------



-- Create Table Kelas
CREATE TABLE kelas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kelas VARCHAR(50) NOT NULL
);

-- Create data tabel Kelas
INSERT INTO kelas (kelas) VALUES ('XII TJAT');

-- read all data
SELECT * FROM kelas;

-- read data from id
SELECT * FROM kelas WHERE id = 1;

-- update data from id
UPDATE kelas SET kelas = 'XII TB' WHERE id = 1;

-- delete data from id
DELETE FROM kelas WHERE id = 1;

-- ----------------------------------------------------------------

-- Create Table Dtp
CREATE TABLE dtp (
    id INT PRIMARY KEY AUTO_INCREMENT,
    dtp VARCHAR(50) NOT NULL
);

-- Create data tabel Kelas
INSERT INTO dtp (dtp) VALUES ('Hustler');

-- read data
SELECT * FROM dtp;

-- read data from id
SELECT * FROM dtp WHERE id = 1;

-- update data from id
UPDATE dtp SET dtp = 'Hacker' WHERE id = 1;

-- delete data from id
DELETE FROM dtp WHERE id = 1;

-- -------------------------------------------------------------

