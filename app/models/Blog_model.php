<?php
class Blog_model
{
    private $blog = [
    [
        "penulis" => "Guru RPL",
        "judul" => "Belajar php MVC",
        "Tulisan" => "Models"
    ],
    [
        "penulis" => "Guru RPL",
        "judul" => "Belajar php MVC",
        "Tulisan" => "view"
    ],
    [
        "penulis" => "Guru RPL",
        "judul" => "Belajar php MVC",
        "Tulisan" => "controllers"
    ]
    ];
    public function getAllBlog()
    {
        return $this->blog;
    }
}
?>