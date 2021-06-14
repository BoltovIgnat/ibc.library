-- CREATE TABLE `ibc_author`
-- (
--     `ID` int(11) NOT NULL AUTO_INCREMENT,
--     `FIRST_NAME` varchar(30) COLLATE utf8_unicode_ci NULL,
--     `LAST_NAME` varchar(30) COLLATE utf8_unicode_ci NULL,
--     `SECOND_NAME` varchar(50) COLLATE utf8_unicode_ci NULL,
--     `CITY` varchar(30) COLLATE utf8_unicode_ci NULL,
--     PRIMARY KEY (`ID`)
-- )
--     ENGINE = InnoDB
--     DEFAULT CHARSET = utf8
--     COLLATE = utf8_unicode_ci;
--
-- CREATE TABLE `ibc_book`
-- (
--     `ID` int(11) NOT NULL AUTO_INCREMENT,
--     `TITLE` varchar(30) COLLATE utf8_unicode_ci NULL,
--     `YEAR` timestamp(30) COLLATE utf8_unicode_ci NULL,
--     `COPIES_CNT` varchar(50) COLLATE utf8_unicode_ci NULL,
--     `CITY` varchar(30) COLLATE utf8_unicode_ci NULL,
--     PRIMARY KEY (`ID`)
-- )
--     ENGINE = InnoDB
--     DEFAULT CHARSET = utf8
--     COLLATE = utf8_unicode_ci;
--
-- CREATE TABLE `ibc_publisher`
-- (
--     `ID` int(11) NOT NULL AUTO_INCREMENT,
--     `TITLE` varchar(30) COLLATE utf8_unicode_ci NULL,
--     `CITY` varchar(30) COLLATE utf8_unicode_ci NULL,
--     `AUTHOR_PROFIT` int(11) COLLATE utf8_unicode_ci NULL,
--     PRIMARY KEY (`ID`)
-- )
--     ENGINE = InnoDB
--     DEFAULT CHARSET = utf8
--     COLLATE = utf8_unicode_ci;