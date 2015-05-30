CREATE DATABASE IF NOT EXISTS `kuriex`;

GRANT ALL ON `kuriex`.* TO `kuriex`@`localhost`;
SET PASSWORD FOR 'kuriex'@'localhost' = PASSWORD('kuriex');

USE kuriex;

DROP TABLE IF EXISTS kurier, dostawca, kurier_katprawajazdy,
    dostawca_katprawajazdy, filia, obszar, rejon;
