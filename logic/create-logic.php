<?php
require 'database.php';
require 'functions.php';

$sql = "SELECT * FROM posts";
$query = mysqli_query($conn, $sql);

if(isset($_REQUEST["submit"])){
    $title = $_REQUEST["title"];
    $content = $_REQUEST["content"];

    $sql = "INSERT INTO posts (title,content) VALUES ('$title','$content');";
    mysqli_query($conn, $sql);
    header("location: ../homepage.php?info=added");
    exit();
}

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM posts WHERE id = $id";
    $query = mysqli_query($conn, $sql);
}

if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $sql = "UPDATE posts SET title = '$title', content = '$content' WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: homepage.php");
    exit();
}

if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM posts WHERE id = $id";
    $query = mysqli_query($conn,$sql);

    header("location: homepage.php");
    exit();
}