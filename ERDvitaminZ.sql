CREATE DATABASE vitaminZ;
USE vitaminZ;
--SET FOREIGN_KEY_CHECKS=0; // Disable FK check
--SET FOREIGN_KEY_CHECKS=1; // Enable FK check
DROP TABLE comments;
DROP TABLE topic;
DROP TABLE user;

CREATE TABLE user (
   user_id INT NOT NULL AUTO_INCREMENT,
   first_name VARCHAR(50) NOT NULL,
   last_name VARCHAR(50) NOT NULL,
   email VARCHAR(70),
   password VARCHAR(100),
   PRIMARY KEY (user_id)
);

CREATE TABLE topic (
   topic_id INT NOT NULL AUTO_INCREMENT,
   topic_desc VARCHAR(100),
   date_created TIMESTAMP DEFAULT current_timestamp,
   user_id int,
   PRIMARY KEY (topic_id),
   FOREIGN KEY (user_id) REFERENCES user(user_id) ON DELETE CASCADE
);

CREATE TABLE comments (
   comment_id INT NOT NULL AUTO_INCREMENT,
   comment_desc TEXT,
   date_created TIMESTAMP DEFAULT current_timestamp,
   date_modified DATE,
   user_id int,
   topic_id int,
   PRIMARY KEY (comment_id),
   FOREIGN KEY (user_id) 
		REFERENCES user(user_id)
		 ON DELETE CASCADE,
   FOREIGN KEY (topic_id) 
		REFERENCES topic(topic_id) 
        ON DELETE CASCADE
);

INSERT INTO `vitaminz`.`user` (`first_name`, `last_name`, `email`, `password`) VALUES ('John', 'Smith', 'jsmith@gmail.com', 'password1');
INSERT INTO `vitaminz`.`user` (`first_name`, `last_name`, `email`, `password`) VALUES ('Olivia', 'Brown', 'obrown@gmail.com', 'password2');

INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Symptoms of Lacking Vitamin B', '1');
INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Symptoms of Lacking Vitamin A', '2');
INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Symptoms of Lacking Vitamin E', '1');

INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('Best food sources for vitamin B:      Whole grains (brown rice, barley, millet)     Meat (red meat, poultry, fish)     Eggs and dairy products (milk, cheese)     Legumes (beans, lentils)     Seeds and nuts (sunflower seeds, almonds)     Dark, leafy vegetables (broccoli, spinach, kai lan)     Fruits (citrus fruits, avocados, bananas)  ', '1', '1');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('You can also take a vitamin B12 supplement. It’s usually available as cyanocobalamin — a form which your body can easily convert and use. It\'s also possible to get a vitamin B12 injection — this is especially useful if your deficiency is caused by absorption issues in your stomach. The form hydroxocobalamin can be given every three months.', '2', '1');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('Symptoms of Lacking Vitamin A comment 1', '2', '2');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('Symptoms of Lacking Vitamin A comment 1', '1', '2');
