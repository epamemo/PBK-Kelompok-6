CREATE DATABASE PBK;

USE PBK;

CREATE TABLE 'user'(
	'id_user' int
(11) UNSIGNED AUTO_INCREMENT,
    'nama' varchar
(40) NOT NULL,
    'level' int
(1) NOT NULL,
    'E_mail' varchar
(49) NOT NULL,
    'Pwd' varchar
(30) NOT NULL,
    PRIMARY KEY
('id_user')
)

CREATE TABLE 'bahasa'(
    'id_bahasa' int
(11) UNSIGNED AUTO_INCREMENT,
    'bahasa' varchar
(40),
    PRIMARY KEY
('id_bahasa')
)

CREATE TABLE 'materi'(
	'id_materi' int
(11) UNSIGNED AUTO_INCREMENT,
    'Judul' varchar
(60) NOT NULL,
    'Tipe' varchar
(40) NOT NULL,
    PRIMARY KEY
('id_materi')
)

CREATE TABLE 'kuis'(
	'id_kuis' int
(11) UNSIGNED AUTO_INCREMENT,
    'soal' text
(255) NOT NULL,
    PRIMARY KEY
('id_kuis') 
)

CREATE TABLE 'video'(
    'id_video' int
(11) UNSIGNED AUTO_INCREMENT,  
    'judul_video' varchar
(255) NOT NuLL,
    'url' varchar
(255) NOT NULL,
    PRIMARY KEY
('id Video')
)

CREATE DATABASE PBK;

USE PBK;

CREATE TABLE 'user'(
	'id_user' int
(11) UNSIGNED AUTO_INCREMENT,
    'nama' varchar
(40) NOT NULL,
    'level' int
(1) NOT NULL,
    'E_mail' varchar
(49) NOT NULL,
    'Pwd' varchar
(30) NOT NULL,
    PRIMARY KEY
('id_user')
)

CREATE TABLE 'bahasa'(
    'id_bahasa' int
(11) UNSIGNED AUTO_INCREMENT,
    'bahasa' varchar
(40),
    PRIMARY KEY
('id_bahasa')
)

CREATE TABLE 'materi'(
	'id_materi' int
(11) UNSIGNED AUTO_INCREMENT,
    'Judul' varchar
(60) NOT NULL,
    'Tipe' varchar
(40) NOT NULL,
    PRIMARY KEY
('id_materi')
)

CREATE TABLE 'kuis'(
	'id_kuis' int
(11) UNSIGNED AUTO_INCREMENT,
    'soal' text
(255) NOT NULL,
    PRIMARY KEY
('id_kuis') 
)

CREATE TABLE 'video'(
    'id_video' int
(11) UNSIGNED AUTO_INCREMENT,  
    'judul_video' varchar
(255) NOT NuLL,
    'url' varchar
(255) NOT NULL,
    PRIMARY KEY
('id Video')
)

