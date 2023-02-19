CREATE TABLE utilisateur(
    id_utilisateur int primary key auto_increment not null,
    nom_utilisateur varchar (50) not null, 
    prenom_utilisateur varchar (58) not null,
    email_utilisateur varchar (58) not null,
    mot_de_passe_utilisateur varchar (100) not null,
    id_role int not null default '0'
)ENGINE=InnoDB;
CREATE TABLE photo(
    id_photo int primary key auto_increment not null, date_photo datetime not null,
    titre_photo varchar (50) not null,
    url_photo varchar (100) not null,
    id_utilisateur int not null
)ENGINE=InnoDB;
CREATE TABLE mot_cle(
    id_mot_cle int primary key auto_increment not null, 
    mot_cle varchar (50) not null
)ENGINE=InnoDB;
CREATE TABLE section(
    id_section int primary key auto_increment not null, 
    nom_section varchar (50) not null
)ENGINE=InnoDB;
CREATE TABLE role(
    id_role int primary key auto_increment not null, 
    nom_role varchar (50) not null
)ENGINE=InnoDB;
CREATE TABLE rattacher(
    id_mot_cle int not null, 
    id_photo int not null,
    primary key (id_photo, id_mot_cle) 
)ENGINE=InnoDB;
CREATE TABLE appartenir( 
    id_section Int not null, 
    id_photo Int not null,
    primary key(id_photo, id_section) 
)ENGINE=InnoDB;
CREATE TABLE telecharger(
    id_photo int not null,
    id_utilisateur int not null,
    primary key (id_utilisateur, id_photo) 
)ENGINE=InnoDB;


alter table utilisateur
add constraint fk_attribuer_role 
foreign key(id_role)
references role(id_role);

alter table photo
add constraint fk_ajouter_utilisateur 
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);

alter table rattacher
add constraint fk_rattacher_photo 
foreign key (id_photo) 
references photo(id_photo);

alter table rattacher
add constraint fk_rattacher_mot_cle 
foreign key (id_mot_cle) 
references mot_cle(id_mot_cle);

alter table appartenir
add constraint fk_appartenir_photo 
foreign key(id_photo) 
references photo(id_photo);

alter table appartenir
add constraint fk_appartenir_section 
foreign key(id_section)
references section(id_section);

alter table telecharger
add constraint fk_telecharger_utilisateur
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);

alter table telecharger
add constraint fk_telecharger_photo
foreign key(id_photo)
references photo(id_photo);