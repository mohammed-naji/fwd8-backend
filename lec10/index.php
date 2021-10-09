<?php 

$conn = mysqli_connect('localhost', 'root', '', 'fwd8');

// if($conn) {
//     echo "Doneeeee";
// }

// CRUD

// C => Create
// INSERT INTO table_name () VALUES ()
$title = "Post Title";
// $sql = 'INSERT INTO posts (title, content, image, user, category) VALUES ("' . $title . '")';
$sql = "INSERT INTO posts (title, content, image, user, category) VALUES ('$title', 'lorem..', 'img.png', 'Mohammed', 'Sport')";
mysqli_query($conn, $sql);


// Read => SELECT
// $sql = "SELECT * FROM table_name";

// Delete 
// $sql = "DELETE FROM table_name WHERE id=1";

// Update 
$sql = "UPDATE table_name SET title='New Title' WHERE id=1";