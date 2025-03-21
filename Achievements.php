<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Achievements</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f0f0f0; }
        .header { background: url('https://i.pinimg.com/736x/04/1d/74/041d740b3281021f6a46fc4dcbc036fb.jpg') no-repeat center center/cover; color: white; padding: 40px; text-align: center; font-size: 24px; }
        .look { background: white; padding: 20px; text-align: center; font-size: 18px; }
        .look a { margin: 0 15px; text-decoration: none; color: #1e3a8a; font-weight: bold; }
        .look a:hover { color: red; }
        .content { padding: 40px; text-align: center; max-width: 900px; margin: auto; }
        .achievements-container { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; }
        .achievement-card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; }
        .achievement-card img { width: 80px; height: 80px; margin-bottom: 10px; }
        .achievement-card h3 { color: #1e3a8a; }
        .footer { background: #1e3a8a; color: white; text-align: center; padding: 15px; margin-top: 40px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Our Achievements</h1>
        <nav class="look">
            <b>
            <a href="test.php">Home</a>
        <a href="technologies.php">Technologies</a>
        <a href="Achievements.php">Achievements</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
            </b>
        </nav>
    </div>
    <div class="content">
        <h2>What We Have Accomplished</h2>
        <p>We take pride in our milestones and achievements in the field of technology. Here are some of our key accomplishments.</p>
        <div class="achievements-container">
            <div class="achievement-card">
                <img src="https://i.pinimg.com/474x/9a/f0/f8/9af0f872159b9e655427db7c476102ba.jpg" alt="Award Icon">
                <h3>Industry Award</h3>
                <p>Recognized as a leading innovator in the tech industry.</p>
            </div>
            <div class="achievement-card">
                <img src="https://i.pinimg.com/474x/f2/aa/d2/f2aad210054f5568ffb0e64c6ecbd5ef.jpg" alt="Milestone Icon">
                <h3>10K+ Users</h3>
                <p>We have successfully built a growing community of tech enthusiasts.</p>
            </div>
            <div class="achievement-card">
                <img src="https://i.pinimg.com/736x/03/18/21/0318214f9d27203d71672a5c8d504ad5.jpg" alt="Partnership Icon">
                <h3>Strategic Partnerships</h3>
                <p>Collaborated with top technology firms to drive innovation.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; <?php echo date('Y'); ?> Technology Hub. All Rights Reserved.</p>
    </div>
</body>
</html>
