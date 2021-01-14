DROP TABLE IF EXISTS users;
CREATE TABLE users
(
    id      bigint       NOT NULL AUTO_INCREMENT,
    email   varchar(190) NOT NULL,
    name    varchar(190) NOT NULL,
    password varchar(190) NOT NULL,

    PRIMARY KEY (id)
);
