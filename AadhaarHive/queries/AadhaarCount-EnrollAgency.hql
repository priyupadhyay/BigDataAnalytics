CREATE DATABASE IF NOT EXISTS aadhaardb;

SELECT unix_timestamp(current_timestamp);

CREATE EXTERNAL TABLE IF NOT EXISTS aadhaardb.aadhaardata(registrar STRING, enroll_agency STRING, state STRING, district STRING, subdistrict STRING, pincode INT, gender STRING, age INT, card_generated INT, card_rejected INT, has_email INT, has_mobile INT) 
ROW FORMAT DELIMITED FIELDS 
TERMINATED BY ',' 
LINES TERMINATED BY '\n'
LOCATION '/AadhaarData';

SELECT enroll_agency, COUNT(*)
FROM aadhaardb.aadhaardata
GROUP BY enroll_agency
ORDER BY enroll_agency;

SELECT unix_timestamp(current_timestamp);


