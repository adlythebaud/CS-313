CREATE VIEW project_1.interfaces_users AS
SELECT user_id,
       first_name,
       last_name,
       username,
       profile_picture_id,
       email_address,
       spotify_user_id,
       spotify_uri,
       preview_song_id,
       artist_1_id,
       artist_2_id,
       artist_3_id,
       track_1_id,
       track_2_id,
       track_3_id,
       birth_date,
       gender,
       seeking_gender
FROM project_1.users;