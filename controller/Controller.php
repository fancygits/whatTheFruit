<?php
include_once 'model/WhatTheFruitDB.php';
include_once 'model/Fruit.php';
include_once 'model/Review.php';
include_once 'smarty/libs/Smarty.class.php'; // delete smarty/libs/ if it doesn't work

class Controller {
    private $action;
    private $view;
    private $fruit_db;
    private $error_msg;
    
    /**
     * setup the controller
     */
    public function __construct() {
        $this->fruit_db = new WhatTheFruitDB();
        if ($this->fruit_db->isConnected()) {
            $this->action = '';
            $this->error_msg = '';
        }
        else {
            $this->action = 'error';
            $this->error_msg = 'unable to connect to the database';
        }
        $this->view = new Smarty();
    }
    
    /**
     * determine which action to take
     */
    public function invoke() {
        
        // get the action to be processed
        $this->getAction();
        
        switch ($this->action) {
            case 'show_home_page':
                $this->view->display('home.tpl');
                break;
            case 'view_reviews':
                $this->showReviewsPage();
                break;
            case 'add_review':
                $this->processNewReview();
                break;
            case 'edit_fruit_form':
                $this->showEditFruitForm();
                break;
            case 'update_fruit':
                $this->updateFruit();
                break;
            case 'delete_fruit':
                $this->deleteFruit();
                break;
            case 'add_fruit_form':
                $this->view->display('addfruit.tpl');
                break;
            case 'add_fruit':
                $this->addFruit();
                break;
            case 'show_fruitbasket_page':
                $this->showFruitBasketPage();
                break;
            case 'show_top_10_fruits_page':
                $this->showTop10FruitsPage();
                break;
            case 'show_contact_page':
                $this->showContactPage();
                break;
            case 'process_contact_form':
                $this->processContactPage();
                break;
            case 'show_credits_page':
                $this->view->display('credits.tpl');
                break;
            default:
                $this->view->assign('error_msg', $this->error_msg);
                $this->view->display('error.tpl');
                break;
        }
    }
    
    /*--------------------------------------------------------------
     *
     * Process requested page
     *
     *------------------------------------------------------------*/
   
    private function showReviewsPage() {
        $fruit_id = filter_input(INPUT_POST, 'fruit_id', FILTER_SANITIZE_STRING);
        $fruit = $this->fruit_db->getFruit($fruit_id);
        
        $this->view->assign('fruitID', $fruit->getID());
        $this->view->assign('fruitName', $fruit->getName());
        $this->view->assign('color', $fruit->getColor());
        $this->view->assign('averageRating', $fruit->getRating());
        $this->view->assign('image', $fruit->getImage('large'));
        
        $fruitReviews = $this->fruit_db->getReviews($fruit_id);
        $this->view->assign('fruitReviews', $fruitReviews);
        $this->view->display('fruitreviews.tpl');
    }
    
    private function processNewReview() {
        $fruit_id = filter_input(INPUT_POST, 'fruitID', FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_STRING);
        $review = filter_input(INPUT_POST, 'review', FILTER_SANITIZE_STRING);
        $fruitName = $this->fruit_db->getFruit($fruit_id)->getName();
        $this->fruit_db->addReview($fruit_id, $name, $rating, $review);
        
        $this->view->assign('fruitID', $fruit_id);
        $this->view->assign('name', $name);
        $this->view->assign('rating', $rating);
        $this->view->assign('review', $review);
        $this->view->assign('fruitName', $fruitName);
        $this->view->display('reviewsubmission.tpl');
    }
    
    private function showEditFruitForm() {
        $fruit_id = filter_input(INPUT_POST, 'fruit_id', FILTER_SANITIZE_STRING);
        
        $fruit = $this->fruit_db->getFruit($fruit_id);
        
        $this->view->assign('fruitID', $fruit->getID());
        $this->view->assign('name', $fruit->getName());
        $this->view->assign('color', $fruit->getColor());
        $this->view->assign('rating', $fruit->getRating());
        $this->view->assign('image', $fruit->getImage('large'));
        $this->view->display('editfruit.tpl');
    }
    
    private function updateFruit() {
        $fruit_id = filter_input(INPUT_POST, 'fruitID', FILTER_SANITIZE_STRING);
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
        $color = trim(filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING));
        
        $this->fruit_db->updateFruit($fruit_id, $name, $color);
        
        $this->showFruitBasketPage();
    }
    
    private function deleteFruit() {
        $fruit_id = filter_input(INPUT_POST, 'fruit_id', FILTER_SANITIZE_STRING);
        $this->fruit_db->deleteFruit($fruit_id);
        $this->showFruitBasketPage();
    }
    
    private function addFruit() {
        $fruitName = trim(filter_input(INPUT_POST, 'fruitName', FILTER_SANITIZE_STRING));
        $color = trim(filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING));
        $image = NULL;
        $newFruit = $this->fruit_db->addFruit($fruitName, $color, $image);
        if ($newFruit == true) {
            $this->view->assign('fruitID', $color);
            $this->view->assign('fruitName', $fruitName);
            $this->view->assign('color', $color);
            $this->view->display('confirmaddfruit.tpl');
            return true;
        } else {
            $this->view->assign('error_msg', 'That fruit is already in the fruit basket');
            $this->view->display('error.tpl');
            return false;
        }
    }
    
    private function showFruitBasketPage() {
        $fruit_basket = $this->fruit_db->getFruitBasket();
        $this->view->assign('fruit_basket', $fruit_basket);
        $this->view->display('fruitbasket.tpl');
    }
    
    private function showTop10FruitsPage() {
        $fruit_basket = $this->fruit_db->getTop10Fruits();
        $this->view->assign('fruit_basket', $fruit_basket);
        $this->view->display('top10.tpl');
    }
    
    private function showContactPage() {
        $this->view->display('contact.tpl');
    }
    
    private function processContactPage() {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $messageDate = filter_input(INPUT_POST, 'messageDate', FILTER_SANITIZE_STRING);
        $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
        
        $this->fruit_db->addMessage($name, $email, $phone, $messageDate, $comments);
        
        $this->view->assign('name', $name);
        $this->view->assign('email', $email);
        $this->view->assign('phone', $phone);
        $this->view->assign('messageDate', $messageDate);
        $this->view->assign('comments', $comments);
        $this->view->display('confirmcontact.tpl');
    }
    
    
    /*--------------------------------------------------------------
     *
     * Utility Functions
     *
     *------------------------------------------------------------*/
    private function getAction() {
        if ($this->action === '') {
            $this->action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if ($this->action === NULL) {
                $this->action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                if ($this->action === NULL) {
                    $this->action = 'show_home_page';
                }
            }
        }
    }
}

?>