<?php
session_start();
$message = "";
$message_type = "";
if (isset($_SESSION['message'])) {
$message = $_SESSION['message'];
$message_type = $_SESSION['message_type'];
unset($_SESSION['message']);
unset($_SESSION['message_type']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mini Feedback System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="header">
<h1>Mini Feedback System</h1>
<p>

</p>
</div>

<?php if ($message != ""): ?>
<div class="message <?= htmlspecialchars($message_type) ?>">
<?= htmlspecialchars($message) ?>
</div>
<?php endif; ?>

<div class="card">
<h2>Optional Login</h2>
<?php if (isset($_SESSION['user_id'])): ?>
<p>
Welcome,
<strong>
<?= htmlspecialchars($_SESSION['username']) ?>
</strong>
</p>
<a href="logout.php" class="logout">
Logout
</a>
<?php else: ?>
<p class="optional">
Login is optional. You can still submit feedback
without logging in.
</p>
<form action="login.php" method="POST">
<label>Username</label>
<input
type="text"
name="username"
placeholder="Enter username"
>
<label>Password</label>
<input
type="password"
name="password"
placeholder="Enter password"
>
<button type="submit">
Login
</button>
</form>
<?php endif; ?>
</div>
<!-- FEEDBACK SECTION-->
<div class="card">
<h2>Send Your Feedback</h2>
<form action="submit.php" method="POST">
<label>Name</label>
<input
type="text"
name="name"
placeholder="Enter your name"
required
>
<label>Feedback</label>
<textarea
name="feedback"
rows="5"
placeholder="Write your feedback..."
required
></textarea>
<button type="submit">
Submit Feedback
</button>
</form>
</div>
<div class="footer">
Mini Web Application Activity<br>
Error Handling • Feedback Messages • Optional Login
</div>
</div>
</body>
</html>
