<?php 
include 'header.php';

$conn = mysqli_connect('localhost', 'root', '', 'fwd8');

if(isset($_POST['send'])) {
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    // Image Upload
    $ex = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $new_name = 'fwd8_'.time().'_'.rand().'.'.$ex;
    move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$new_name);
    // Insert to Database
    $sql = "INSERT INTO posts (title, content, image) VALUES ('$title', '$content', '$new_name')";
    if(mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success'>Record addedd successfully</div>";
        // header("Location: posts.php");
    }

}


?>
<main>
<section class="py-5">
    <div class="container">
    <h1>Manage Your Posts</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title" class="form-control mb-3">
        <textarea name="content" placeholder="Content" class="form-control mb-3" rows="4"></textarea>
        <input type="file" name="image" class="form-control mb-3" />
        <button name="send" class="btn btn-success">Save</button>
    </form>

    <hr>

    <h2>Posts</h2>
    <div class="row">
        
        <?php 

        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);
        while($post = mysqli_fetch_assoc($result)){
        ?>
            <div class="col-md-3 mb-4">
            <div class="card">
            <img src="images/<?= $post['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $post['title'] ?></h5>
                <p class="card-text"><?= $post['content'] ?></p>
            </div>
            </div>
        </div>

        <?php 
        }
        ?>

    </div>
    </div>
</section>
</main>
<?php include 'footer.php' ?>