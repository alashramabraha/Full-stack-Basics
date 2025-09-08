<?php

$error = "";

if ($_POST) {

    if (!$_POST['email']) {
        $error .= "An email is required.<br>";
    }

    if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $error .= "Enter a valid email.<br>";
    }

    if (!$_POST['subject']) {
        $error .= "Subject is required.<br>";
    }

    if (!$_POST['message']) {
        $error .= "Message is required.<br>";
    }

    if ($error != "") {
        $error = "<div class='alert alert-danger' role='alert'><strong>There were errors in your form:</strong><br>" .
            $error . "</div>";
    } else {
        if ($error != "") {
    $error = "<div class='alert alert-danger' role='alert'><strong>There were errors in your form:</strong><br>" .
        $error . "</div>";
} else {
    // Collect form data
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "you@example.com"; // 👈 your receiving email

    // Optional: Format the email body
    $body = "From: $email\n\nMessage:\n$message";

    // Send email
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $error = "<div class='alert alert-success' role='alert'>Form submitted and email sent successfully!</div>";
    } else {
        $error = "<div class='alert alert-danger' role='alert'>Failed to send email. Try again later.</div>";
    }
}

}

?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <div class="container mt-5">
    <h1>Hello, world!</h1>

    <div id="error" class="mt-3"><?php echo $error; ?></div>

    <form id="myForm" method="post">
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" class="form-control" id="email">
      </div>

      <div class="form-group">
        <label>Subject</label>
        <input type="text" name="subject" placeholder="Subject" class="form-control" id="subject">
      </div>

      <div class="form-group">
        <label>Your message</label>
        <textarea class="form-control" id="message" name="message" rows="5"></textarea>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Load full jQuery (NOT slim) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script>
    $(document).ready(function () {
      $("#myForm").submit(function (e) {
        e.preventDefault(); // Stop form from submitting

        let error = "";

        if ($("#subject").val().trim() === "") {
          error += "The subject field is required.<br>";
        }

        if ($("#message").val().trim() === "") {
          error += "The message field is required.<br>";
        }

        if (error !== "") {
          $("#error").html(
            "<div class='alert alert-danger' role='alert'><strong>There were errors in your form:</strong><br>" +
            error + "</div>"
          );
        } else {
          $("#error").html(
            "<div class='alert alert-success' role='alert'>Form submitted successfully!</div>"
          );
        }
      });
    });
  </script> 

</body>

</html>
