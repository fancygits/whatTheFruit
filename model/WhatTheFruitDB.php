<?php
class WhatTheFruitDB {
	private $db;

	/**
	 * connect to the database
	 */
	public function __construct() {
		$dsn = 'mysql:host=localhost;dbname=what_the_fruit';
		$username = 'farmer';
		$password = 'gr33nthumb';

		try {
			$this->db = new PDO($dsn, $username, $password);
		} catch (PDOException $e) {
			$db = Null;
		}
	}

	/**
	 * check the connection to the database
	 * 
	 * @return boolean - true if a connection to the database has been established
	 */
	public function isConnected() {
		return ($this->db != Null);
	}

	/**
	 * Get all the fruits from the database and return an array
	 * of all the fruit as Fruit objects
	 * 
	 * @return Fruit[] - array of Fruit from the fruit table
	 */
	public function getFruitBasket() {
	    $query = 'SELECT * FROM fruit ORDER BY name';
	    $statement = $this->db->prepare($query);
	    $statement->execute();
	    $fruits = $statement->fetchAll();
	    $statement->closeCursor();
	    
	    $fruit_basket = array();
	    foreach ($fruits as $fruit) {
	        $fruit_basket[] = new Fruit($fruit);
	    }
	    return $fruit_basket;
	}
	
	/**
	 * Get the top 10 highest rated fruits from the database 
	 * and return an array of all the fruit as Fruit objects
	 *
	 * @return Fruit[] - array of Fruit from the fruit table
	 */
	public function getTop10Fruits() {
	    $query = 'SELECT * FROM fruit ORDER BY rating DESC limit 10';
	    $statement = $this->db->prepare($query);
	    $statement->execute();
	    $fruits = $statement->fetchAll();
	    $statement->closeCursor();
	    
	    $fruit_basket = array();
	    foreach ($fruits as $fruit) {
	        $fruit_basket[] = new Fruit($fruit);
	    }
	    return $fruit_basket;
	}
	
	/**
	 * retrieve the fruit with the specified id
	 *
	 * @param $fruit_id /id of fruit to be retrieved
	 * @return NULL|Fruit return Null upon failure, return the Fruit object otherwise
	 */
	public function getFruit($fruit_id) {
	    // create the query
	    $query = "SELECT * FROM fruit
				  WHERE fruitId = :fruit_id";
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':fruit_id', $fruit_id);
	    $statement->execute();
	    $fruit_record = $statement->fetch();
	    $statement->closeCursor();
	    // check if query was successful
	    if ($fruit_record == False) {
	        return Null;
	    }
	    $fruit = new Fruit($fruit_record);
	    return $fruit;
	}
	
	/**
	 * retrieve the fruit with the name
	 *
	 * @param $fruitName /name of fruit to be retrieved
	 * @return NULL|Fruit return Null upon failure, return the Fruit object otherwise
	 */
	public function getFruitByName($fruitName) {
	    // create the query
	    $query = "SELECT * FROM fruit
				  WHERE name = :fruitName";
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':fruitName', $fruitName);
	    $statement->execute();
	    $fruit_record = $statement->fetch();
	    $statement->closeCursor();
	    // check if query was successful
	    if ($fruit_record == false) {
	        return NULL;
	    }
	    $fruit = new Fruit($fruit_record);
	    return $fruit;
	}
	
	/**
	 * update the specified fruit record
	 *
	 * @param $fruit_id
	 * @param $name
	 * @param $color
	 * @return boolean True if the update operation was successful, False otherwise
	 */
	public function updateFruit($fruit_id, $name, $color) {
	    $query = "UPDATE fruit
				  SET name = :name,
                      color = :color
				  WHERE fruitId = :fruit_id";
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':name', $name);
	    $statement->bindValue(':color', $color);
	    $statement->bindValue(':fruit_id', $fruit_id);
	    $statement->execute();
	    $row_count = $statement->rowCount();
	    $statement->closeCursor();
	    if ($row_count == 0) {
	        return False;
	    }
	    return True;
	}
	
	/**
	 * Delete the specified fruit record
	 * @param $fruit_id
	 */
	public function deleteFruit($fruit_id) {
	    $query1 = "DELETE FROM fruit WHERE fruitID=".$fruit_id;
	    $statement = $this->db->prepare($query1);
	    $statement->execute();
	    $query2 = "DELETE FROM reviews WHERE fruitID=".$fruit_id;
	    $statement = $this->db->prepare($query2);
	    $statement->execute();
	    $statement->closeCursor();
	}
	
	/**
	 * Adds a fruit to the fruit basket
	 * @param $name - The fruit name
	 * @param $color - Available colors of the Fruit
	 * @param $image - The filename of an image
	 * @return boolean - TRUE if successful
	 */
	public function addFruit($name, $color, $image) {
	    if (($this->getFruitByName($name)) == NULL) {
	        $query = "INSERT INTO fruit(name, color, mediumImage)
	                   VALUES (:name, :color, :image)";
	        $statement = $this->db->prepare($query);
	        $statement->bindValue(':name', $name);
	        $statement->bindValue(':color', $color);
	        $statement->bindValue(':image', $image);
	        $statement->execute();
	        $row_count = $statement->rowCount();
	        $statement->closeCursor();
	        if ($row_count == 0) {
	            return false;
	        }
	        return true;
	    } else {
	       return false;
	    }
	}
	
	
	/**
	 * retrieve all reviews of the fruit
	 *
	 * @return Review[] - array with reviews
	 */
	public function getReviews($fruitID) {
	    $query = "SELECT * FROM reviews
                    WHERE fruitID = $fruitID";
	    $statement = $this->db->prepare($query);
	    $statement->execute();
	    $reviews = $statement->fetchAll();
	    $statement->closeCursor();
	    if ($reviews == False) {
	        return Null;
	    }
	    $fruit_reviews = array();
	    foreach ($reviews as $review) {
	        $fruit_reviews[] = new Review($review);
	    }
	    return $fruit_reviews;
	}
	
	/**
	 * Adds a review to the review database
	 * @param $fruitID
	 * @param $name
	 * @param $rating
	 * @param $review
	 * @return boolean TRUE if successful
	 */
	public function addReview($fruitID, $name, $rating, $review) {
	    $query = "INSERT INTO reviews(fruitID, name, rating, review)
                    VALUES (:fruitID, :name, :rating, :review)";
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':fruitID', $fruitID);
	    $statement->bindValue(':name', $name);
	    $statement->bindValue(':rating', $rating);
	    $statement->bindValue(':review', $review);
	    $statement->execute();
	    $row_count = $statement->rowCount();
	    $statement->closeCursor();
	    $this->changeAverageReview($fruitID);
	    if ($row_count == 0) {
	        return False;
	    }
	    return True;
	}
	
	/**
	 * Calculates the average of all reviews for a particular fruit
	 * and posts it to the database
	 * @param $fruitID - The fruitID for the fruit being reviewed
	 */
	public function changeAverageReview($fruitID) {
	    $reviews = $this->getReviews($fruitID);
	    $totalRatings = 0;
	    $count = 0;
	    foreach ($reviews as $review) {
	        $totalRatings += $review->getRating();
	        $count++;
	    }
	    $averageRating = $totalRatings / $count;
	    
	    $query = "UPDATE fruit
				  SET rating = $averageRating
				  WHERE fruitId = $fruitID";
	    $statement = $this->db->prepare($query);
	    $statement->execute();
	    $row_count = $statement->rowCount();
	    $statement->closeCursor();
	}
	
	/**
	 * Adds a message to the database
	 * @param $name
	 * @param $email
	 * @param $phone
	 * @param $messageDate
	 * @param $comments
	 * @return boolean TRUE if successful
	 */
	public function addMessage($name, $email, $phone, $messageDate, $comments) {
	    $query = "INSERT INTO messages(name, email, phone, messageDate, comments)
                    VALUES (:name, :email, :phone, :messageDate, :comments)";
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':name', $name);
	    $statement->bindValue(':email', $email);
	    $statement->bindValue(':phone', $phone);
	    $statement->bindValue(':messageDate', $messageDate);
	    $statement->bindValue(':comments', $comments);
	    $statement->execute();
	    $row_count = $statement->rowCount();
	    $statement->closeCursor();
	    if ($row_count == 0) {
	        return False;
	    }
	    return True;
	}
}
?>