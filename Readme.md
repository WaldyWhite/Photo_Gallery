### Photo Gallery

### Requires installation of Composer package manager

<img src='app\img\96b62c18e8edf6bc45f328123c5c4a4b.png'>

#### DB-mySQL

    DROP TABLE IF EXISTS `users`;
    CREATE TABLE `users`  (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
    `email` varchar(255) CHARACTER SET utf8mb4  NOT NULL,
     `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
        `created_at` datetime(0) NULL DEFAULT NULL,
    `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
     PRIMARY KEY (`id`) USING BTREE,
    UNIQUE INDEX `email_unique`(`email`) USING BTREE
    ) ENGINE = InnoDB CHARACTER SET = utf8mb4 ROW_FORMAT = Dynamic;
