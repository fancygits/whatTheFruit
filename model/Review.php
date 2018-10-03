<?php
class Review {
    private $reviewID;
    private $fruitID;
    private $name;
    private $date;
    private $rating;
    private $review;
    
    /**
     * Constructs a new Review object
     */
    public function __construct() {
        $this->reviewID = NULL;
        $this->name = NULL;
        $this->date = NULL;
        $this->rating = NULL;
        $this->review = NULL;
        
        $args = func_get_args();
        if (count($args) >= 1) {
            foreach ($args[0] as $property => $value) {
                switch ($property) {
                    case "reviewID":
                        $this->reviewID = $value;
                        break;
                    case "name":
                        $this->name = $value;
                        break;
                    case "date":
                        $this->date = $value;
                        break;
                    case "rating":
                        $this->rating = $value;
                        break;
                    case "review":
                        $this->review = $value;
                        break;
                }
            }
        }
    }
    
    /*--------------------------------------------------------------
     * get methods
     *------------------------------------------------------------*/
    public function getID() {
        return $this->reviewID;
    }
    
    public function getFruitID() {
        return $this->fruitID;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function getRating() {
        return $this->rating;
    }
    
    public function getReview() {
        return $this->review;
    }
    
    /*--------------------------------------------------------------
     * set methods
     *------------------------------------------------------------*/
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }
    
    public function setRating($rating) {
        $this->rating = $rating;
    }
    
    public function setReview($review) {
        $this->review = $review;
    }
    
    /*
     * isset methods
     */
    // True if name is not NULL and not empty string
    public function issetName() {
        return $this->name != NULL;
    }
    
    // True if date is not NULL and not empty string
    public function issetDate() {
        return $this->date != NULL;
    }
    
    // True if rating is not NULL and not empty value
    public function issetRating() {
        return $this->rating != NULL;
    }
    
    // True if review is not NULL and not empty string
    public function issetReview() {
        return $this->review != NULL;
    }
}
?>