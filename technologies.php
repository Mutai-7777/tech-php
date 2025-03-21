<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Home</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f0f0f0; }
        .header { background: url('https://i.pinimg.com/736x/f0/d6/13/f0d6138f32abd213be8ab4191073af47.jpg') no-repeat center center/cover; color: white; padding: 40px; text-align: center; font-size: 24px; }
        .look { background: white; padding: 20px; text-align: center; font-size: 18px; }
        .look a { margin: 0 15px; text-decoration: none; color: #1e3a8a; font-weight: bold; }
        .look a:hover { color: red; }
        .content { padding: 40px; text-align: center; }
        .tech-list { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        .tech-item { background: #ffffff; padding: 20px; border-radius: 10px; width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s; }
        .tech-item:hover { transform: scale(1.05); }
        .tech-item h3 { color: #1e3a8a; }
        .footer { background: #1e3a8a; color: white; text-align: center; padding: 15px; margin-top: 40px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Our Technology Hub</h1>
        <nav class="look">
        <a href="test.php">Home</a>
        <a href="technologies.php">Technologies</a>
        <a href="Achievements.php">Achievements</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
    </div>
    <div class="content">
        <h2>Featured Technologies</h2>
        <div class="tech-list">
            <div class='tech-item'>
                <h3>Artificial Intelligence</h3>
                <p>The future of automation and smart decision-making.</p>
            </div>
            <div class='tech-item'>
                <h3>Blockchain</h3>
                <p>Secure and decentralized technology for transactions.</p>
            </div>
            <div class='tech-item'>
                <h3>Cybersecurity</h3>
                <p>Protecting data and systems from cyber threats.</p>
            </div>
            <div class='tech-item'>
                <h3>Cloud Computing</h3>
                <p>Flexible and scalable storage and computing power.</p>
            </div>
            <div class='tech-item'>
                <h3>Internet of Things (IoT)</h3>
                <p>Connecting everyday devices to the internet.</p>
            </div>
            <div class='tech-item'>
                <h3>5G Technology</h3>
                <p>Next-generation high-speed wireless connectivity.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; <?php echo date('Y'); ?> Technology Hub. All Rights Reserved.</p>
    </div>
</body>
</html>
