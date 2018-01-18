CREATE DATABASE IF NOT EXISTS aadhaardb;

SELECT unix_timestamp(current_timestamp);

CREATE EXTERNAL TABLE IF NOT EXISTS aadhaardb.aadhaardata(registrar STRING, enroll_agency STRING, state STRING, district STRING, subdistrict STRING, pincode INT, gender STRING, age INT, card_generated INT, card_rejected INT, has_email INT, has_mobile INT) 
ROW FORMAT DELIMITED FIELDS 
TERMINATED BY ',' 
LINES TERMINATED BY '\n'
LOCATION '/AadhaarData';

SELECT state, COUNT(*) AS c
FROM aadhaardb.aadhaardata 
WHERE gender="M" 
GROUP BY state 
ORDER BY c DESC LIMIT 10;

SELECT unix_timestamp(current_timestamp);



