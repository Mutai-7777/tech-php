<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Home</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f0f0f0; }
        .header { background: #1e3a8a; color: white; padding: 20px; text-align: center; font-size: 24px; }
        .content { padding: 40px; text-align: center; }
        .contents { padding: 40px; text-align: center; }
        .auth-section { display: flex; justify-content: center; gap: 20px; align-items: center; flex-wrap: wrap; margin-top: 20px; }
        .auth-container { width: 350px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center; }
        .auth-container img { width: 100px; height: 100px; margin-bottom: 10px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #1e3a8a; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; width: 100%; }
        button:hover { background: #163b70; }
        .look { background: white; padding: 20px; text-align: center; font-size: 18px; }
        .look a { margin: 0 15px; text-decoration: none; color: #1e3a8a; font-weight: bold; }
        .look a:hover { color: red; }
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
            <b>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="technologies.php">Technologies</a>
        <a href="Achievements.php">Achievements</a>
        <a href="contact.php">Contact</a>
</b>
    </nav>
    </div>
    <div class="contents">
        <h2>Join Our Community</h2>
        <p>Explore the latest in technology, connect with like-minded enthusiasts, and stay updated with the trends.</p>
        <div class="auth-section">
            <div class="auth-container">
                <img src="https://i.pinimg.com/736x/bc/a0/5a/bca05a91e1d44035cd89deb2bccbe4a3.jpg" alt="Register Icon">
                <h3>Create an Account</h3>
                <p>Register to access exclusive content and join discussions.</p>
                <form action="register.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Register</button>
                </form>
            </div>
            <div class="auth-container">
                <img src="https://i.pinimg.com/474x/2c/a6/92/2ca692c4ead5cf7db8f943ee314473d4.jpg" alt="Login Icon">
                <h3>Member Login</h3>
                <p>Already have an account? Log in to continue.</p>
                <form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
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
