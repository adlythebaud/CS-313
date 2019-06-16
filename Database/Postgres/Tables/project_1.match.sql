CREATE TABLE IF NOT EXISTS project_1.match (
    match_id SERIAL CONSTRAINT match_id_pk PRIMARY KEY,
    user_1_id INT CONSTRAINT match_users_user_1_id_fk REFERENCES project_1.users(user_id),
    user_2_id INT CONSTRAINT match_users_user_2_id_fk REFERENCES project_1.users(user_id),
    user_1_did_like BOOLEAN,
    user_2_did_like BOOLEAN
);