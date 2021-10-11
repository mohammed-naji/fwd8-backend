<?php
// Connection
$conn = mysqli_connect('localhost', 'root', '', 'fwd8');

// if($conn) {
//     echo 'Success';
// }

// CRUD Application

// C => Create => Insert
// INSERT INTO table_name () VALUES ()

// $ahmed = "INSERT INTO posts (title, content, image) VALUES ('Post Title', 'Post Content', 'post.jpg')";
// if(mysqli_query($conn, $ahmed)) {
//     echo "Record Added Successfully :)";
// }

// D => DELETE
// DELETE FROM table_name
// $sql = "DELETE FROM posts WHERE id = 5";
// mysqli_query($conn, $sql);

// U => UPDATE
// UPDATE table_name SET col=val
// $sql = "UPDATE posts SET title='New New Title' WHERE id = 7";
// mysqli_query($conn, $sql);


// R => Read
// SELECT * FROM table_name
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
// var_dump($result);
while($post = mysqli_fetch_assoc($result)) {
    echo "<h2>".$post['title']."</h2>";
    echo "<p>".$post['content']."</p>";
    // var_dump($post);
    echo "<hr>";
}