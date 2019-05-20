CREATE SCHEMA IF NOT EXISTS project_1;

CREATE TABLE IF NOT EXISTS project_1.users (
    user_id SERIAL CONSTRAINT users_pk PRIMARY KEY,
    username VARCHAR(20),
    password VARCHAR(200),
    password_salt VARCHAR(50),
    email_address VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS project_1.email (
    email_id SERIAL CONSTRAINT email_pk PRIMARY KEY,
    message_text TEXT,
    user_id INT CONSTRAINT email_users_user_id_fk REFERENCES project_1.users(user_id),
    requested_send_time TIMESTAMP,
    actual_send_time TIMESTAMP
);

CREATE TABLE IF NOT EXISTS project_1.recipients (
    recipient_id SERIAL CONSTRAINT recipient_pk PRIMARY KEY,
    user_id INT CONSTRAINT recipients_users_user_id_fk REFERENCES project_1.users(user_id),
    email_id INT CONSTRAINT recipients_email_email_id_fk REFERENCES project_1.email(email_id),
    is_main_recipient BOOLEAN,
    is_cc_recipient BOOLEAN,
    is_bcc_recipient BOOLEAN
);

CREATE TABLE IF NOT EXISTS project_1.email_log (
    email_log_id SERIAL CONSTRAINT email_log_pk PRIMARY KEY,
    email_id INT CONSTRAINT email_log_email_email_id_fk REFERENCES project_1.email(email_id),
    actual_send_time TIMESTAMP
);






