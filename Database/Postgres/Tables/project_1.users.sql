CREATE TABLE IF NOT EXISTS project_1.users (
    user_id SERIAL CONSTRAINT users_pk PRIMARY KEY,
    first_name VARCHAR(20),
    last_name VARCHAR(30),
    username VARCHAR(20),
    password VARCHAR(20),
    profile_picture_id VARCHAR(20),
    email_address VARCHAR(30),
    spotify_user_id VARCHAR(50),
    spotify_uri VARCHAR(100),
    preview_song_id VARCHAR(50),
    artist_1_id VARCHAR(50),
    artist_2_id VARCHAR(50),
    artist_3_id VARCHAR(50),
    track_1_id VARCHAR(50),
    track_2_id VARCHAR(50),
    track_3_id VARCHAR(50)
);









