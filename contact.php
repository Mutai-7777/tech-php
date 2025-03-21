<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f0f0f0; }
        .header { background: url('https://i.pinimg.com/736x/42/c6/61/42c661dbdd3b302c19344be474615550.jpg') no-repeat center center/cover; color: white; padding: 40px; text-align: center; font-size: 24px; }
        .look { background: white; padding: 20px; text-align: center; font-size: 18px; }
        .look a { margin: 0 15px; text-decoration: none; color: #1e3a8a; font-weight: bold; }
        .look a:hover { color: red; }
        .container { max-width: 600px; margin: 40px auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center; }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #1e3a8a; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #163b70; }
        .footer { background: #1e3a8a; color: white; text-align: center; padding: 15px; margin-top: 40px; font-size: 14px; }
    </style>
</head>
<body>

    <div class="header">
        <h1>Contact Us</h1>
        <nav class="look">
        <a href="test.php">Home</a>
        <a href="technologies.php">Technologies</a>
        <a href="Achievements.php">Achievements</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
    </div>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Have questions or feedback? Reach out to us.</p>
        <form action="submit_contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
   
</body>
</html>
