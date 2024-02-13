<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>View Feedback</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="logo.png" alt="Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="index.html">Add Review</a></li>
          <li><a href="view_feedback.php">View Reviews</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          
        </ul>
      </nav>
    </header>

    <div class="feedback_data">
    <h2>Feedback from Customers</h2>
      <?php include 'display_feedback.php'; ?>
    </div>

    <footer>
      <p>&copy; 2024 Customer Reviews. All rights reserved.</p>
    </footer>
  </body>
</html>
