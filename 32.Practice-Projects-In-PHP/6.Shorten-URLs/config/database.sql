SHOW DATABASES;
USE short_url_db;


CREATE TABLE IF NOT EXISTS short_url_db.tbl_urls_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    inputted_url VARCHAR(300) DEFAULT NULL,
    device_info VARCHAR(300)DEFAULT NULL,
    requested_method VARCHAR(10) DEFAULT NULL,
    requested_path VARCHAR(10) DEFAULT NULL,
    timestamp VARCHAR(20) NOT NULL
);