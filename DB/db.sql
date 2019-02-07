DROP DATABASE study;
CREATE DATABASE study;

CREATE TABLE superuser(
    id int AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    userpass VARCHAR(255),
    PRIMARY KEY (id)
);

create table courses(
id int AUTO_INCREMENT PRIMARY KEY, coursename varchar(255)
);

CREATE TABLE subcourse(
    cid int,
    titleId int,
    author_name VARCHAR(255),
    Title VARCHAR(255),
    PRIMARY KEY (cid, titleId)
);

CREATE TABLE article_name(
    id int,
    article text,
    img_url VARCHAR(255),
    PRIMARY KEY (id)
);

INSERT INTO superuser(name, email, userpass) value('test', 'rajbharrupesh2', '12345678');
