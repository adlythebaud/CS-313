CREATE TABLE IF NOT EXISTS project_1.chat (
    chat_id SERIAL CONSTRAINT chat_id_pk PRIMARY KEY,
    match_id INT CONSTRAINT chat_match_match_id_fk REFERENCES project_1.match(match_id)
);