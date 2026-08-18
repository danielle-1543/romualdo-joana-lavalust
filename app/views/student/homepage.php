<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Home</title> 
 
    <style> 
        * {
            box-sizing: border-box;
        }

        body { 
            font-family: Arial, sans-serif; 
            background: #fdf6f8; 
            margin: 0; 
            padding: 0; 
            color: #333;
        } 
 
        .container { 
            width: 80%; 
            max-width: 700px; 
            margin: 100px auto; 
            background: #ffffff; 
            padding: 50px 40px; 
            text-align: center; 
            border-radius: 16px; 
            box-shadow: 0 8px 25px rgba(170, 100, 120, 0.12);
            border-top: 5px solid #d98fa5;
        } 
 
        h1 { 
            color: #3d3437;
            margin-bottom: 12px;
        } 
 
        p { 
            color: #777; 
            font-size: 16px;
            margin-bottom: 30px;
        } 

        .nav {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }
 
        .button,
        .nav a { 
            display: inline-block; 
            padding: 11px 22px; 
            background: #c97891; 
            color: white; 
            text-decoration: none; 
            border-radius: 8px;
            font-size: 14px;
            transition: 0.2s ease;
        } 
 
        .nav a:hover { 
            background: #ad5f78;
            transform: translateY(-2px);
        }

        .nav a.profile {
            background: #f1d6df;
            color: #8f4d62;
        }

        .nav a.profile:hover {
            background: #e8c1ce;
        }

        .welcome-icon {
            width: 55px;
            height: 55px;
            margin: 0 auto 20px;
            background: #f1d6df;
            color: #a65c74;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
    </style> 
</head> 
 
<body> 
 
<div class="container"> 

    <div class="welcome-icon">♡</div>
 
    <h1>Welcome to the Student Home Page</h1> 
 
    <p>This is the student homepage.</p> 
 
    <div class="nav">
        <a href="<?= site_url('student/profile'); ?>" class="profile">Student Profile</a>
    </div>
     
</div> 
 
</body> 
</html>