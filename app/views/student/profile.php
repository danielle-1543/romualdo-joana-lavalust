<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fdf6f8;
            margin: 0;
            padding: 0;
            color: #3d3437;
        }

        .container {
            width: 85%;
            max-width: 750px;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(170, 100, 120, 0.12);
            border-top: 5px solid #d98fa5;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 15px;
            background: #f1d6df;
            color: #a65c74;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        h1 {
            margin: 0;
            color: #3d3437;
            font-size: 28px;
        }

        .subtitle {
            color: #999;
            margin-top: 8px;
            font-size: 14px;
        }

        .info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 25px;
        }

        .info-box {
            background: #fdf8fa;
            padding: 16px 18px;
            border-radius: 10px;
            border-left: 3px solid #d98fa5;
        }

        .label {
            display: block;
            font-size: 12px;
            color: #a65c74;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }

        .value {
            font-size: 16px;
            color: #444;
        }

        .navigation {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .navigation a {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s ease;
        }

        .home {
            background: #c97891;
            color: white;
        }

        .home:hover {
            background: #ad5f78;
        }

        .profile {
            background: #f1d6df;
            color: #8f4d62;
        }

        .profile:hover {
            background: #e8c1ce;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
                padding: 25px;
            }

            .info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="profile-header">
        <div class="profile-icon">♡</div>

        <h1>Student Profile</h1>
        <p class="subtitle">Personal and academic information</p>
    </div>

    <div class="info">

        <div class="info-box">
            <span class="label">Student ID</span>
            <span class="value"><?= $student_id ?></span>
        </div>

        <div class="info-box">
            <span class="label">Student Name</span>
            <span class="value"><?= $name ?></span>
        </div>

        <div class="info-box">
            <span class="label">Course</span>
            <span class="value"><?= $course ?></span>
        </div>

        <div class="info-box">
            <span class="label">Year Level</span>
            <span class="value"><?= $year ?></span>
        </div>

        <div class="info-box">
            <span class="label">Section</span>
            <span class="value"><?= $section ?></span>
        </div>

        <div class="info-box">
            <span class="label">Email</span>
            <span class="value"><?= $email ?></span>
        </div>

    </div>

    <div class="navigation">
        <a href="<?= site_url('student'); ?>" class="home">Home</a>

    </div>

</div>

</body>
</html>