create table logIn(
    id int primary key auto_increment,
    username varchar(50) not null,
    password varchar(50) not null,
);

create table register(
     id int primary key auto_increment,
     username varchar(50) not null,
     email varchar(50) not null,
      password varchar(50) not null,
      role varchar(50) not null,
);