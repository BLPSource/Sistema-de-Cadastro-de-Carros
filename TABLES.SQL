CREATE TABLE usuario (
	id_usuario SERIAL,
	perfil integer, --(0=user|1=adm) 
	nome varchar(200),
	senha varchar(200),
	CONSTRAINT usuario_pk PRIMARY KEY(id_usuario)

);

CREATE TABLE logs (
	id_logs SERIAL,
	data_logs date DEFAULT ('now'::text)::date, --Data de acesso
	fk_usuario_logs integer REFERENCES usuario (id_usuario), --Acessado por
	CONSTRAINT logs_pk PRIMARY KEY(id_logs)

);

CREATE TABLE marca (
	id_marca SERIAL,
	marca_nome varchar(200),
	data_cadastro_marca date DEFAULT ('now'::text)::date, --Cadastrado em
	fk_usuario_marca integer REFERENCES usuario (id_usuario), --Cadastrado por
	CONSTRAINT marca_pk PRIMARY KEY(id_marca)
);

CREATE TABLE carro (
	id_carro SERIAL, --Id
	modelo varchar(200),
	ano integer,
	foto varchar(200),
	valor integer,
	num_parcelas_max integer, --Número de parcelas
	valor_total integer,
	data_cadastro_carro date DEFAULT ('now'::text)::date, --Cadastrado em
	fk_usuario_carro integer REFERENCES usuario (id_usuario), --Cadastrado por
	fk_marca_carro integer REFERENCES marca (id_marca),
	CONSTRAINT carro_pk PRIMARY KEY(id_carro)
);


INSERT INTO usuario (id_usuario, perfil, nome, senha) VALUES (1, 1, 'admin', '123');
INSERT INTO usuario (id_usuario, perfil, nome, senha) VALUES (2, 0, 'funcionario', '123');

INSERT INTO marca (id_marca, marca_nome, data_cadastro_marca, fk_usuario_marca) VALUES (1, 'Honda', '2013-12-01', 1);
INSERT INTO marca (id_marca, marca_nome, data_cadastro_marca, fk_usuario_marca) VALUES (2, 'Renault', '2013-12-02', 1);
INSERT INTO marca (id_marca, marca_nome, data_cadastro_marca, fk_usuario_marca) VALUES (3, 'Ford', '2013-12-02', 1);


INSERT INTO carro (id_carro, modelo, ano, valor, num_parcelas_max, valor_total, data_cadastro_carro, fk_usuario_carro, fk_marca_carro, foto) VALUES (110, 'Civic', 2014, 90000, 3, 102600, '2013-12-02', 1, 1, 'Honda-Civic-2014.jpg');
INSERT INTO carro (id_carro, modelo, ano, valor, num_parcelas_max, valor_total, data_cadastro_carro, fk_usuario_carro, fk_marca_carro, foto) VALUES (111, 'Logan', 2014, 40000, 12, 58200, '2013-12-02', 1, 2, 'logan2014.jpg');

