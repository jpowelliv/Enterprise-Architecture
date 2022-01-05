CREATE DATABASE programming;

USE programming;
CREATE TABLE tiobe
(
  id int auto_increment PRIMARY KEY,
  rank int,
  last_year int,
  lang varchar(50)
);

CREATE TABLE users 
(
    id int primary key auto_increment, 
    username varchar(255), 
    password varchar(255) 
);

-- insert a row into the users table for the administrator AKA super user (su):
-- username = su
-- password = letmein
INSERT INTO users (username, password) VALUES ('su', '$2y$10$fRPuK2vUutyvlRHcAjpjS.kR.Ebs5hIdCTkaMhO/sdgGs8l7sdeYe');

INSERT into tiobe (rank, last_year, lang) VALUES(1,2,'C');
INSERT into tiobe (rank, last_year, lang) VALUES(2,1,'Java');
INSERT into tiobe (rank, last_year, lang) VALUES(3,3,'Python');
INSERT into tiobe (rank, last_year, lang) VALUES(4,4,'C++');
INSERT into tiobe (rank, last_year, lang) VALUES(5,5,'C#');
INSERT into tiobe (rank, last_year, lang) VALUES(6,6,'Visual Basic');
INSERT into tiobe (rank, last_year, lang) VALUES(7,7,'JavaScript');
INSERT into tiobe (rank, last_year, lang) VALUES(8,8,'PHP');
INSERT into tiobe (rank, last_year, lang) VALUES(9,9,'SQL');
INSERT into tiobe (rank, last_year, lang) VALUES(10,12,'Assembly language');
INSERT into tiobe (rank, last_year, lang) VALUES(11,13,'R');
INSERT into tiobe (rank, last_year, lang) VALUES(12,26,'Groovy');
INSERT into tiobe (rank, last_year, lang) VALUES(13,11,'Go');
INSERT into tiobe (rank, last_year, lang) VALUES(14,15,'Ruby');
INSERT into tiobe (rank, last_year, lang) VALUES(15,10,'Swift');
INSERT into tiobe (rank, last_year, lang) VALUES(16,16,'MATLAB');
INSERT into tiobe (rank, last_year, lang) VALUES(17,18,'Delphi/Object Pascal');
INSERT into tiobe (rank, last_year, lang) VALUES(18,22,'Classic Visual Basic');
INSERT into tiobe (rank, last_year, lang) VALUES(19,19,'Perl');
INSERT into tiobe (rank, last_year, lang) VALUES(20,20,'Objective-C');
INSERT into tiobe (rank, last_year, lang) VALUES(21,null,'Scratch');
INSERT into tiobe (rank, last_year, lang) VALUES(22,null,'SAS');
INSERT into tiobe (rank, last_year, lang) VALUES(23,null,'Fortran');
INSERT into tiobe (rank, last_year, lang) VALUES(24,null,'D');
INSERT into tiobe (rank, last_year, lang) VALUES(25,null,'COBOL');
INSERT into tiobe (rank, last_year, lang) VALUES(26,null,'Transact-SQL');
INSERT into tiobe (rank, last_year, lang) VALUES(27,null,'Prolog');
INSERT into tiobe (rank, last_year, lang) VALUES(28,null,'PL/SQL');
INSERT into tiobe (rank, last_year, lang) VALUES(29,null,'Julia');
INSERT into tiobe (rank, last_year, lang) VALUES(30,null,'Rust');
INSERT into tiobe (rank, last_year, lang) VALUES(31,null,'Ada');
INSERT into tiobe (rank, last_year, lang) VALUES(32,null,'Dart');
INSERT into tiobe (rank, last_year, lang) VALUES(33,null,'(Visual) FoxPro');
INSERT into tiobe (rank, last_year, lang) VALUES(34,null,'ABAP');
INSERT into tiobe (rank, last_year, lang) VALUES(35,null,'Lisp');
INSERT into tiobe (rank, last_year, lang) VALUES(36,null,'Scala');
INSERT into tiobe (rank, last_year, lang) VALUES(37,null,'Lua');
INSERT into tiobe (rank, last_year, lang) VALUES(38,null,'Logo');
INSERT into tiobe (rank, last_year, lang) VALUES(39,null,'Kotlin');
INSERT into tiobe (rank, last_year, lang) VALUES(40,null,'TypeScript');
INSERT into tiobe (rank, last_year, lang) VALUES(41,null,'VHDL');
INSERT into tiobe (rank, last_year, lang) VALUES(42,null,'Bash');
INSERT into tiobe (rank, last_year, lang) VALUES(43,null,'LabVIEW');
INSERT into tiobe (rank, last_year, lang) VALUES(44,null,'Haskell');
INSERT into tiobe (rank, last_year, lang) VALUES(45,null,'VBScript');
INSERT into tiobe (rank, last_year, lang) VALUES(46,null,'Ladder Logic');
INSERT into tiobe (rank, last_year, lang) VALUES(47,null,'Apex');
INSERT into tiobe (rank, last_year, lang) VALUES(48,null,'Elixir');
INSERT into tiobe (rank, last_year, lang) VALUES(49,null,'Alice');
INSERT into tiobe (rank, last_year, lang) VALUES(50,null,'PowerShell');
