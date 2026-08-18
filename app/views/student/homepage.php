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
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff0f5;
            color: #3a2630;
        }

        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .welcome-card {
            width: 100%;
            max-width: 850px;
            min-height: 500px;

            background: #ffffff;
            border-radius: 28px;

            box-shadow: 0 15px 45px rgba(126, 45, 78, 0.15);

            border: 1px solid #f1ccd9;

            overflow: hidden;

            display: flex;
            flex-direction: column;
        }

        /* TOP PINK AREA */

        .pink-header {
            height: 150px;
            background: #c94f7c;

            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle-one {
            position: absolute;
            width: 120px;
            height: 120px;

            background: rgba(255, 255, 255, 0.08);

            border-radius: 50%;

            left: 8%;
            top: -45px;
        }

        .circle-two {
            position: absolute;
            width: 170px;
            height: 170px;

            background: rgba(255, 255, 255, 0.07);

            border-radius: 50%;

            right: 5%;
            top: 55px;
        }

        .heart {
            width: 75px;
            height: 75px;

            background: white;
            color: #c94f7c;

            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 32px;

            box-shadow: 0 8px 20px rgba(80, 20, 45, 0.15);

            z-index: 2;
        }

        /* CONTENT */

        .content {
            flex: 1;

            padding: 50px 40px;

            text-align: center;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .content h1 {
            margin: 0;

            color: #762646;

            font-size: 34px;
            font-weight: 700;
        }

        .content h1 span {
            color: #c94f7c;
        }

        .content p {
            max-width: 570px;

            margin: 18px auto 30px;

            color: #735d66;

            font-size: 16px;

            line-height: 1.7;
        }

        /* BUTTON */

        .profile-button {
            display: inline-block;

            padding: 13px 30px;

            background: #8f2854;

            color: white;

            text-decoration: none;

            border-radius: 10px;

            font-size: 14px;

            font-weight: bold;

            box-shadow: 0 6px 15px rgba(100, 30, 60, 0.18);

            transition: 0.2s ease;
        }

        .profile-button:hover {
            background: #701d41;

            transform: translateY(-2px);

            box-shadow: 0 8px 18px rgba(100, 30, 60, 0.25);
        }

        /* SMALL DECORATIONS */

        .decorations {
            display: flex;
            gap: 10px;

            margin-top: 35px;
        }

        .dot {
            width: 9px;
            height: 9px;

            background: #e8a5bb;

            border-radius: 50%;
        }

        .dot:nth-child(2) {
            background: #c94f7c;
        }

        .dot:nth-child(3) {
            background: #f2c8d6;
        }

        /* FOOTER */

        .footer {
            padding: 17px;

            text-align: center;

            border-top: 1px solid #f0dce3;

            color: #987984;

            font-size: 12px;

            background: #fffafd;
        }

        /* MOBILE */

        @media (max-width: 600px) {

            .page {
                padding: 18px;
            }

            .welcome-card {
                min-height: 470px;
                border-radius: 22px;
            }

            .pink-header {
                height: 125px;
            }

            .heart {
                width: 65px;
                height: 65px;
                font-size: 27px;
            }

            .content {
                padding: 40px 25px;
            }

            .content h1 {
                font-size: 27px;
            }

            .content p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="welcome-card">

        <!-- PINK HEADER -->

        <div class="pink-header">

            <div class="circle-one"></div>
            <div class="circle-two"></div>

            <div class="heart">
                ♡
            </div>

        </div>


        <!-- WELCOME CONTENT -->

        <div class="content">

            <h1>
                Welcome to the <span>Student Portal</span>
            </h1>

            <p>
                Your space to view student information,
                academic details, and personal profile.
            </p>

            <a
                href="<?= site_url('student/profile'); ?>"
                class="profile-button"
            >
                View Student Profile →
            </a>


            <!-- DECORATIVE DOTS -->

            <div class="decorations">

                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>

            </div>

        </div>


        <!-- FOOTER -->

        <div class="footer">
            Student Portal
        </div>

    </div>

</div>

</body>
</html>