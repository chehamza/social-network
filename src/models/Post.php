<?php

class Post extends PostRepository{
    private $id;
    private $title;
    private $content;
    private $authorId;
    

    public function __construct($title, $content, $authorId, $id=null ) {
        $this->id = $id;
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthorId($authorId);
        
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthorId() {
        return $this->authorId;
    }


    // Setters
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setAuthorId($authorId) {
        $this->authorId = $authorId;
    }

}


