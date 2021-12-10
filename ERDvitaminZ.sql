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
   picture TEXT,
   password VARCHAR(100),
   PRIMARY KEY (user_id)
);

CREATE TABLE topic (
   topic_id INT NOT NULL AUTO_INCREMENT,
   topic_desc TEXT,
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
INSERT INTO `vitaminz`.`user` (`first_name`, `last_name`, `email`, `password`) VALUES ('Leopold', 'Edge', 'leopold123@gmail.com', 'Leopold');
INSERT INTO `vitaminz`.`user` (`first_name`, `last_name`, `email`, `password`) VALUES ('Wyatt', 'Armitage', 'Wyatt463@gmail.com', 'Wyatt');
INSERT INTO `vitaminz`.`user` (`first_name`, `last_name`, `email`, `password`) VALUES ('Kenzo', 'Carey', 'Kenzo903@gmail.com', 'Kenzo');
INSERT INTO `vitaminz`.`user` (`first_name`, `last_name`, `email`, `password`) VALUES ('Griffin', 'Shea', 'Griffin833@gmail.com', 'Griffin');
INSERT INTO `vitaminz`.`user` (`first_name`, `last_name`, `email`, `password`) VALUES ('Raihan', 'Santiago', 'Raihan930@gmail.com', 'Raihan');
INSERT INTO `vitaminz`.`user` (`first_name`, `last_name`, `email`, `password`) VALUES ('Kiki', 'Zhang', 'Kiki393@gmail.com', 'Kiki');




INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Symptoms of Lacking Vitamin B', '1');
INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Symptoms of Lacking Vitamin A', '2');
INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Symptoms of Lacking Vitamin E', '1');
INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Vitamin D: I think I might have Vitamin D deficiency, What should I do? take supplements or just stay out under the sun?', '3');
INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Vitamin C: What to do with a Vitamin C deficiency?', '5');
INSERT INTO `vitaminz`.`topic` (`topic_desc`, `user_id`) VALUES ('Vitamin A', '8');




INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('Best food sources for vitamin B:      Whole grains (brown rice, barley, millet)     Meat (red meat, poultry, fish)     Eggs and dairy products (milk, cheese)     Legumes (beans, lentils)     Seeds and nuts (sunflower seeds, almonds)     Dark, leafy vegetables (broccoli, spinach, kai lan)     Fruits (citrus fruits, avocados, bananas)  ', '1', '1');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('You can also take a vitamin B12 supplement. It’s usually available as cyanocobalamin — a form which your body can easily convert and use. Its also possible to get a vitamin B12 injection — this is especially useful if your deficiency is caused by absorption issues in your stomach. The form hydroxocobalamin can be given every three months.', '2', '1');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('Symptoms of Lacking Vitamin A comment 1', '2', '2');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('Symptoms of Lacking Vitamin A comment 1', '1', '2');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('You should definitely do both but first start by taking supplements ', '4', '4');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('Some of the best foods for Vitamin C are: Guava, Kiwi, Lemon, Lychee, Strawberry, Papaya, and Broccoli.', '6', '5');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('It is recommended to eat fresh fruits and vegetables daily and take Vitamin C supplements', '7', '5');
INSERT INTO `vitaminz`.`comments` (`comment_desc`, `user_id`, `topic_id`) VALUES ('I have been struggling with skin irritation for the past couple of months. Just found out that it was due to vitamin A deficiency from this website. Been taking supplements ever since finding out about it and I have seen a great difference and relief. Really appreciate this website!', '8', '6');

