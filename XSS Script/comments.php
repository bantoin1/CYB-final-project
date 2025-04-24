<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "grocerystore";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!-- comments.php -->
<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Comments</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body { background-color: #f8f9fa; padding-top: 30px; }
    .comment-box { background: #ffffff; border: 1px solid #ddd; border-radius: 10px; padding: 20px; margin-bottom: 20px; }
    .comment-list { margin-top: 40px; }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="mb-4 text-center text-success">Leave a Comment</h2>
    <form method="POST" action="">
      <div class="mb-3">
        <textarea name="comment" class="form-control" rows="4" placeholder="Write your comment here..."></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment'])) {
        $comment = strip_tags($_POST['comment']);
        $stmt = $conn->prepare("INSERT INTO comments (content) VALUES (?)");
        $stmt->bind_param("s", $comment);
        $stmt->execute();
    }
    ?>

    <div class="comment-list mt-5">
      <h4 class="text-secondary">All Comments:</h4>
      <?php
      $result = $conn->query("SELECT content FROM comments ORDER BY id DESC");
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo '<div class="comment-box">';
              echo '<p>' .htmlspecialchars($row['content'], ENT_QUOTES, 'UTF-8')  . '</p>'; //it was vulnerable to Stored XSS
              echo '</div>';
          }
      } else {
          echo '<p>No comments yet.</p>';
      }
      ?>
    </div>
  </div>
</body>
</html>
