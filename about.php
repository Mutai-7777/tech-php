<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f0f0f0; }
        .header { background: url('https://i.pinimg.com/736x/5b/f2/3a/5bf23a2d0b01a76a471a1c99da81bc7f.jpg') no-repeat center center/cover; color: white; padding: 40px; text-align: center; font-size: 24px; }
        .look { background: white; padding: 20px; text-align: center; font-size: 18px; }
        .look a { margin: 0 15px; text-decoration: none; color: #1e3a8a; font-weight: bold; }
        .look a:hover { color: red; }
        .content { padding: 40px; text-align: center; max-width: 800px; margin: auto; }
        .about-section { background: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .about-section h2 { color: #1e3a8a; }
        .footer { background: #1e3a8a; color: white; text-align: center; padding: 15px; margin-top: 40px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>About Us</h1>
        <nav class="look">
        <a href="test.php">Home</a>
        <a href="technologies.php">Technologies</a>
        <a href="Achievements.php">Achievements</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
    </div>
    <div class="content">
        <div class="about-section">
            <h2>Who We Are</h2>
            <p>Welcome to Technology Hub, your go-to source for the latest trends, innovations, and insights in the world of technology.</p>
        </div>
        <br>
        <div class="about-section">
            <h2>Our Mission</h2>
            <p>We strive to provide high-quality content that educates, informs, and inspires technology enthusiasts, developers, and professionals.</p>
        </div>
        <br>
        <div class="about-section">
            <h2>Why Choose Us?</h2>
            <p>With a passion for technology and a commitment to delivering valuable insights, we bring you well-researched articles, tutorials, and news on emerging tech.</p>
        </div>
    </div>
    <div class="footer">
        <p>&copy; <?php echo date('Y'); ?> Technology Hub. All Rights Reserved.</p>
    </div>
</body>
</html>
