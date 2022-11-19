<?php

class Notice {
    // Properties
    private $id;
    private $title;
    private $content;
    private $uploadDate;
    private $author;

    public function __construct($id, $title, $content, $uploadDate, $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->uploadDate = $uploadDate;
        $this->author = $author;        
    }

    // Methods

    // Getters
    public function get_id()
    {
        return $this->id;
    }
    public function get_title()
    {
        return $this->title;
    }
    public function get_content()
    {
        return $this->content;
    }
    public function get_uploadDate()
    {
        return $this->uploadDate;
    }
    public function get_author()
    {
        return $this->author;
    }

    // Setters
    public function set_title($newTitle)
    {
        return $this->title;
    }
    public function set_content($newContent)
    {
        return $this->content;
    }
}

?>