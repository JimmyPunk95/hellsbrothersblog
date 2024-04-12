/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Jair
 * Created: 15/07/2020
 */
CREATE DATABASE brothers;

USE brothers;
CREATE TABLE miembros(
	id INT NOT NULL AUTO_INCREMENT UNIQUE,
	nombre VARCHAR(30) NOT NULL,
	apellido VARCHAR(30) NOT NULL,
	plataforma VARCHAR(20) NOT NULL,
	nickname VARCHAR(25) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
        ciudad VARCHAR(30) NOT NULL,
	pais VARCHAR(20) NOT NULL,
	estado VARCHAR(40) NOT NULL,
	fechaNac DATE NOT NULL,
	fechaReg DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE presentacion(
        id INT NOT NULL AUTO_INCREMENT UNIQUE,
        miembro_id INT NOT NULL UNIQUE,
        presentacion TEXT CHARACTER SET utf8 NULL,
        fecha DATETIME NOT NULL,
        activa TINYINT NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(miembro_id)
            REFERENCES miembros(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
);

CREATE TABLE registro(
        id INT NOT NULL AUTO_INCREMENT UNIQUE,
        nombre INT NOT NULL,
        plataforma VARCHAR(20) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        fecha DATETIME NOT NULL,
        PRIMARY KEY(id)
);

