CREATE TABLE IF NOT EXISTS usuario (
seq_usuario INT(6) NOT NULL AUTO_INCREMENT COMMENT 'Identificacao do usuario do site'
,nom_viajante VARCHAR(100) NOT NULL COMMENT 'Nome completo do usuario'
,eml_acesso VARCHAR(50) NOT NULL COMMENT 'Email usado para acessar a plataforma'
,val_senha VARCHAR(60) NOT NULL COMMENT 'Senha segura do usuario - criptografada'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_usuario)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os usuario da plataforma';

CREATE TABLE IF NOT EXISTS viajante (
seq_viajante INT(6) NOT NULL COMMENT 'Identificacao do viajante'
,num_documento VARCHAR(15) NOT NULL COMMENT 'Numero de identificacao do viajante. CPF ou CNPJ'
,num_telefone VARCHAR(15) NOT NULL COMMENT 'Numero de telefone do viajante'
,des_endereco VARCHAR(100) NOT NULL COMMENT 'Endereco completo do viajante'
,tip_genero CHAR(1) DEFAULT 'N' COMMENT 'M - masculino, F - feminino, N - nao informado'
,val_renda FLOAT COMMENT 'Valor da renda familiar'
,tip_continente CHAR(2) NOT NULL COMMENT 'AN - America do Norte, AC - America Central, AS - America do Sul, AF - Africa e AI - Asica'
,cod_pais INT(6) NOT NULL COMMENT 'Identifica do pais em que sera a viagem'
,cod_estado INT(6) NOT NULL COMMENT 'Identifica o estado da viagem'
,cod_cidade INT(6) NOT NULL COMMENT 'Identifica a cidade, segundo o IBGE'
,med_foto BLOB COMMENT 'Foto do viajante'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_viajante)
,FOREIGN KEY (seq_viajante) references usuario(seq_usuario)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os viajante com acesso as viagens';

CREATE TABLE IF NOT EXISTS idioma (
seq_idioma INT(2) NOT NULL AUTO_INCREMENT COMMENT 'Sequencial que identifica o idioma'
,des_idioma VARCHAR(100) NOT NULL COMMENT 'Descricao do idioma. Ex: Russo, Indi'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY (seq_idioma)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os idiomas disponiveis aos viajantes';

CREATE TABLE IF NOT EXISTS viajante_idioma (
seq_viajante INT(6) NOT NULL COMMENT 'Idenficacao do viajante'
,seq_idioma INT(2) NOT NULL COMMENT 'Identificacao do idioma'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_viajante, seq_idioma)
,FOREIGN KEY (seq_viajante) references viajante(seq_viajante)
,FOREIGN KEY (seq_idioma) references idioma(seq_idioma)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os idiomas de um viajante';

CREATE TABLE IF NOT EXISTS viajante_avaliacao (
seq_viagem INT(6) NOT NULL COMMENT 'Identifcacao da viagem a ser avalidada'
,seq_avaliador INT(6) NOT NULL COMMENT 'Identificacao do viajante avaliador'
,val_humor TINYINT NOT NULL DEFAULT 0 COMMENT 'Quanto essa pessoa e bem humorada'
,val_parceria TINYINT NOT NULL DEFAULT 0 COMMENT 'Quanto essa pessoa contribui para o bem-estar de todos'
,txt_observacao TEXT COMMENT 'Outras informacoes relevantes sobre o viajante nessa viagem'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_viagem, seq_avaliador)
,FOREIGN KEY (seq_avaliador) references viajante(seq_viajante)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Avalia um viajante em uma viagem';

CREATE TABLE IF NOT EXISTS viagem (
seq_viagem INT(6) NOT NULL AUTO_INCREMENT COMMENT 'Identificacao da viagem'
,seq_organizador INT(6) NOT NULL COMMENT 'Identificacao do organizador que e tb um viajante'
,val_orcamento FLOAT COMMENT 'Valor previsto para a viagem'
,dat_checkin DATETIME COMMENT 'Data de inicio da viagem'
,dat_checkout DATETIME COMMENT 'Data de termino da viagem'
,num_minimo INT(2) COMMENT 'Numero minimo de participantes'
,num_maximo INT(2) COMMENT 'Numero maximo de participantes'
,txt_parceiro TEXT COMMENT 'Qual o perfil do parceiro ideal para essa viagem'
,txt_informacoes TEXT COMMENT 'Que outras informacoes, atracoes ou dicas para essa viagem'
,med_foto BLOB NOT NULL COMMENT 'Foto que caracterize a viagem'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_viagem)
,FOREIGN KEY (seq_organizador) references viajante(seq_viajante)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona as viagens';

CREATE TABLE IF NOT EXISTS viagem_itinerario (
seq_viagem INT(6) NOT NULL COMMENT 'Identifcacao da viagem'
,tip_continente CHAR(2) NOT NULL COMMENT 'AN - America do Norte, AC - America Central, AS - America do Sul, AF - Africa e AI - Asica'
,cod_pais INT(6) NOT NULL COMMENT 'Identifica do pais em que sera a viagem'
,cod_estado INT(6) NOT NULL COMMENT 'Identifica o estado da viagem'
,cod_cidade INT(6) NOT NULL COMMENT 'Identifica a cidade, segundo o IBGE'
,url_hotel varchar(255) COMMENT 'URL do hotel referencia no destino'
,txt_itinerario TEXT COMMENT 'Informacoes relevantes para a ida ou a volta como cidades ate o destino final'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_viagem)
,FOREIGN KEY (seq_viagem) references viagem(seq_viagem)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona as informacoes sobre o destino final da viagem';

CREATE TABLE IF NOT EXISTS transporte (
seq_transporte INT(2) NOT NULL COMMENT 'Identifcacao tipo de transporte'
,des_transporte VARCHAR(100) NOT NULL COMMENT 'Descricao do transporte. Ex: Onibus, bicicleta'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_transporte)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona as formas de deslocamento usadas na viagem';

CREATE TABLE IF NOT EXISTS viagem_transporte (
seq_viagem INT(6) NOT NULL COMMENT 'Identifcacao da viagem'
,seq_transporte INT(2) NOT NULL COMMENT 'Identificacao do transporte utilizado. Ex: Carro, trem'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_viagem, seq_transporte)
,FOREIGN KEY (seq_viagem) references viagem(seq_viagem)
,FOREIGN KEY (seq_transporte) references transporte(seq_transporte)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os transportes utilizados em uma viagem';

CREATE TABLE IF NOT EXISTS perfil (
seq_perfil INT(2) NOT NULL COMMENT 'Identifcacao perfil da viagem'
,des_perfil VARCHAR(100) NOT NULL COMMENT 'Descricao do perfil. Ex: Kids, religiosa'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_perfil)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os perfis (tipos) de viagem';

CREATE TABLE IF NOT EXISTS viagem_perfil (
seq_viagem INT(6) NOT NULL COMMENT 'Identifcacao da viagem'
,seq_perfil INT(2) NOT NULL COMMENT 'Identificacao do perfil. Ex: Kids, cult'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_viagem, seq_perfil)
,FOREIGN KEY (seq_viagem) references viagem(seq_viagem)
,FOREIGN KEY (seq_perfil) references perfil(seq_perfil)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Relaciona os perfis de uma viagem';

CREATE TABLE IF NOT EXISTS viagem_avaliacao (
seq_viagem INT(6) NOT NULL COMMENT 'Identifcacao da viagem'
,seq_avaliador INT(6) NOT NULL COMMENT 'Identificacao do viajante avaliador'
,val_hospedagem TINYINT NOT NULL DEFAULT 0 COMMENT 'Quao confortavel eram as hospedagens'
,val_transporte TINYINT NOT NULL DEFAULT 0 COMMENT 'Quao pontual, seguro e confortavel eram os transportes'
,val_seguranca TINYINT NOT NULL DEFAULT 0 COMMENT 'Quao seguro eram os locais, as atracoes e as hospedagens'
,val_viajante TINYINT NOT NULL DEFAULT 0 COMMENT 'Quao bom foi estar com as pessoas do grupo'
,val_itinerario TINYINT NOT NULL DEFAULT 0 COMMENT 'Quao interessante foi o itinerario'
,val_atracao TINYINT NOT NULL DEFAULT 0 COMMENT 'Quao divertidas foram as atracoes'
,txt_observacao TEXT COMMENT 'Outras informacoes relevantes sobre a viagem'
,dat_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data em que o registro foi cadastrado'
,dat_inativo DATETIME NOT NULL DEFAULT '0000-00-00' COMMENT 'Data em que o registro foi desativado'
,PRIMARY KEY(seq_viagem, seq_avaliador)
,FOREIGN KEY (seq_viagem) references viagem(seq_viagem)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Avalia uma viagem';