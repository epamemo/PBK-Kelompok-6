CREATe DATABASE PBK;
CREATE TABLE "User"
(
	id INT(11)
	UNSIGNED AUTO_INCREMENT;
	Nama VARCHAR
	(40) NOT NULL;
	Level INT
	(1) NOT NULL;
	E_mail VARCHAR
	(40) NOT NULL;
	Pwd VARCHAR
	(30) NOT NULL;
	PRIMARY KEY
	(id);
)
	CREATE TABLE Admin
	(
		id INT(11)
		UNSIGNED AUTO_INCREMENT;
	Nama VARCHAR
		(40) NOT NULL;
	E_mail VARCHAR
		(40) NOT NULL;
	Pwd VARCHAR
		(30) NOT NULL;
	PRIMARY KEY
		(id);
)

		CREATE TABLE Bahasa
		(
			id_Bahasa INT(11)
			UNSIGNED AUTO_INCREMENT;
	Bahasa VARCHAR
			(40) NOT NULL;
	PRIMARY KEY
			(id_Pelajaran);
)
			CREATE TABLE Materi
			(
				id_Materi INT(11)
				UNSIGNED AUTO_INCREMENT;
	Judul VARCHAR
				(40) NOT NULL;
	Tipe VARCHAR
				(40) NOT NULL;  
	PRIMARY KEY
				(id_Materi);
)
				CREATE TABLE Kuis
				(
					id_Materi INT(11) NOT NUll;
					Soal TEXT
					(255) NOT NULL;
)
					CREATE TABLE Video
					(
						id_video INT(11)
						UNSIGNED AUTO_INCREMENT;
	judul_video VARCHAR
						(255) NOT NULL;
	url VARCHAR
						(255) NOT NULL;
	PRIMARY KEY
						(id_video);
)
						CREATE TABLE History
						(
							id_user INT(11) NOT NULL;
							id_materi INT
							(11) NOT NULL;
)

