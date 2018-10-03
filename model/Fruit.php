<?php
class Fruit {
    private $fruitID;
    private $name;
    private $color;
    private $rating;
    private $mediumImage;
    private $largeImage;

    /**
     * constructor
     *
     * Optional argument: associative array with initial property value pairs
     */
    public function __construct() {
        $this->fruitID= NULL;
        $this->name = NULL;
        $this->color = NULL;
        $this->rating = NULL;
        $this->mediumImage = NULL;
        $this->largeImage = NULL;
        
        $args = func_get_args();
        if (count($args) >= 1) {
            foreach ($args[0] as $property => $value) {
                switch ($property) {
                    case "fruitID":
                        $this->fruitID = $value;
                        break;
                    case "name":
                        $this->name = $value;
                        break;
                    case "color":
                        $this->color = $value;
                        break;
                    case "rating":
                        $this->rating = $value;
                        break;
                    case "mediumImage":
                        if ($value == NULL) {
                            $this->mediumImage = 'default_fruit_medium.png';
                        }
                        else {
                            if (!file_exists('model/images/' . $value)) {
                                $this->mediumImage = 'default_fruit_medium.png';
                            }
                            $this->mediumImage = $value;
                        }
                        break;
                    case "largeImage":
                        if ($value == NULL) {
                            $this->largeImage = 'default_fruit_large.png';
                        }
                        else {
                            if (!file_exists('model/images/' . $value)) {
                                $this->largeImage = 'default_fruit_large.png';
                            }
                            $this->largeImage = $value;
                        }
                        break;
                }
            }
        }
    }
    
    /*--------------------------------------------------------------
     * get methods
     *------------------------------------------------------------*/
    public function getID() {
        return $this->fruitID;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function getRating() {
        return $this->rating;
    }
    
    public function getImage($size) {
        if ($size == 'large') {
            return "model/images/" . $this->largeImage;
        } else {
            return "model/images/" . $this->mediumImage;
        }
    }

    /*--------------------------------------------------------------
     * set methods
     *------------------------------------------------------------*/
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function setRating($rating) {
        $this->rating = $rating;
    }
    
    public function setImage($image) {
        $this->mediumImage = $image;
    }
    
    /*
     * isset methods
     */
    // True if name is not NULL and not empty string
    public function issetName() {
        return $this->name != NULL;
    }
    
    // True if color is not NULL and not empty string
    public function issetColor() {
        return $this->color != NULL;
    }
    
    // True if rating is not NULL and not empty value
    public function issetRating() {
        return $this->rating != NULL;
    }

    // True if image is not NULL and not empty string
    public function issetImage() {
        return $this->mediumImage != NULL;
    }
}
?>