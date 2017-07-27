#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Franchise
#------------------------------------------------------------

CREATE TABLE Franchise(
        id_client   int (11) Auto_increment  NOT NULL ,
        Identifiant Varchar (50) ,
        Mdp         Varchar (50) ,
        Mail        Varchar (50) ,
        Nom         Varchar (50) ,
        Adresse     Varchar (100) ,
        Ville       Varchar (50) ,
        CP          Varchar (5) ,
        Tel         Varchar (10) ,
        PRIMARY KEY (id_client )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: solution
#------------------------------------------------------------

CREATE TABLE solution(
        id_sol       int (11) Auto_increment  NOT NULL ,
        Nom_sol      Varchar (50) ,
        prix_sol     Float ,
        prix_sol_log Float ,
        PRIMARY KEY (id_sol )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Logiciel
#------------------------------------------------------------

CREATE TABLE Logiciel(
        id_logiciel   int (11) Auto_increment  NOT NULL ,
        Nom_logi      Varchar (100) ,
        type_logi     Varchar (50) ,
        prix_logi     Float ,
        abon_logi     Bool ,
        id_categories Int ,
        PRIMARY KEY (id_logiciel )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Categories
#------------------------------------------------------------

CREATE TABLE Categories(
        id_categories int (11) Auto_increment  NOT NULL ,
        nom_cat       Varchar (50) ,
        PRIMARY KEY (id_categories )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Admin
#------------------------------------------------------------

CREATE TABLE Admin(
        Id_admin          int (11) Auto_increment  NOT NULL ,
        identifiant_admin Varchar (50) ,
        Mdp               Varchar (50) ,
        Mail_admin        Varchar (100) ,
        PRIMARY KEY (Id_admin )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: message
#------------------------------------------------------------

CREATE TABLE message(
        id_mess    int (11) Auto_increment  NOT NULL ,
        sujet_mess Varchar (150) ,
        text_mess  Text ,
        id_client  Int ,
        Id_admin   Int ,
        PRIMARY KEY (id_mess )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Panier
#------------------------------------------------------------

CREATE TABLE Panier(
        id_panier  int (11) Auto_increment  NOT NULL ,
        quantite   Int ,
        prix_total Float ,
        id_sol     Int ,
        PRIMARY KEY (id_panier )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appartient a
#------------------------------------------------------------

CREATE TABLE appartient_a(
        id_sol      Int NOT NULL ,
        id_logiciel Int NOT NULL ,
        PRIMARY KEY (id_sol ,id_logiciel )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: valider
#------------------------------------------------------------

CREATE TABLE valider(
        id_client Int NOT NULL ,
        id_panier Int NOT NULL ,
        PRIMARY KEY (id_client ,id_panier )
)ENGINE=InnoDB;

ALTER TABLE Logiciel ADD CONSTRAINT FK_Logiciel_id_categories FOREIGN KEY (id_categories) REFERENCES Categories(id_categories);
ALTER TABLE message ADD CONSTRAINT FK_message_id_client FOREIGN KEY (id_client) REFERENCES Franchise(id_client);
ALTER TABLE message ADD CONSTRAINT FK_message_Id_admin FOREIGN KEY (Id_admin) REFERENCES Admin(Id_admin);
ALTER TABLE Panier ADD CONSTRAINT FK_Panier_id_sol FOREIGN KEY (id_sol) REFERENCES solution(id_sol);
ALTER TABLE appartient_a ADD CONSTRAINT FK_appartient_a_id_sol FOREIGN KEY (id_sol) REFERENCES solution(id_sol);
ALTER TABLE appartient_a ADD CONSTRAINT FK_appartient_a_id_logiciel FOREIGN KEY (id_logiciel) REFERENCES Logiciel(id_logiciel);
ALTER TABLE valider ADD CONSTRAINT FK_valider_id_client FOREIGN KEY (id_client) REFERENCES Franchise(id_client);
ALTER TABLE valider ADD CONSTRAINT FK_valider_id_panier FOREIGN KEY (id_panier) REFERENCES Panier(id_panier);
