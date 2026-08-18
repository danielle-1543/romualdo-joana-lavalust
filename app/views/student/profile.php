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
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff0f5;
            color: #35212a;
        }

        /* PAGE */

        .page {
            width: 90%;
            max-width: 1050px;
            margin: 40px auto;
        }

        /* MAIN CARD */

        .profile-card {
            background: #ffffff;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(119, 43, 76, 0.15);
            border: 1px solid #f3cbd9;
        }

        /* PROFILE HEADER */

        .profile-header {
            background: #c94f7c;
            padding: 75px 45px 38px;
            color: white;

            display: flex;
            align-items: center;
            gap: 25px;

            position: relative;
        }

        /* HOME BUTTON */

        .home-button {
            position: absolute;
            top: 18px;
            right: 25px;

            text-decoration: none;
            background: #8f2854;
            color: white;

            padding: 9px 17px;
            border-radius: 9px;

            font-size: 13px;
            font-weight: bold;

            transition: 0.2s ease;
        }

        .home-button:hover {
            background: #701d41;
            transform: translateY(-2px);
        }

        /* AVATAR */

        .avatar {
            width: 100px;
            height: 100px;

            border-radius: 50%;

            background: #ffffff;
            color: #b93667;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 32px;
            font-weight: bold;

            border: 5px solid #f6b8cd;

            box-shadow: 0 5px 15px rgba(70, 20, 40, 0.15);

            flex-shrink: 0;
        }

        /* HEADER TEXT */

        .header-text h1 {
            margin: 0;
            font-size: 30px;
            font-weight: 700;
        }

        .header-text .course {
            margin: 8px 0 4px;
            font-size: 16px;
            font-weight: bold;
        }

        .header-text .school {
            margin: 0;
            font-size: 14px;
            opacity: 0.9;
        }

        /* STUDENT ID */

        .student-id {
            display: inline-block;

            margin-top: 13px;

            background: #8f2854;
            color: white;

            padding: 7px 14px;

            border-radius: 20px;

            font-size: 12px;
            font-weight: bold;
        }

        /* CONTENT */

        .content {
            padding: 38px 45px;
        }

        /* SECTIONS */

        .section {
            margin-bottom: 38px;
        }

        .section-header {
            display: flex;
            align-items: center;

            gap: 12px;

            margin-bottom: 20px;
        }

        .section-line {
            width: 6px;
            height: 28px;

            background: #c94f7c;

            border-radius: 10px;
        }

        .section-header h2 {
            margin: 0;

            color: #7d294b;

            font-size: 20px;
        }

        /* ACADEMIC OVERVIEW */

        .academic-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 16px;

            margin-bottom: 16px;
        }

        .academic-box {
            background: #fff1f6;

            border: 1px solid #efbfd0;

            border-radius: 14px;

            padding: 20px;

            text-align: center;

            transition: 0.2s ease;
        }

        .academic-box:hover {
            border-color: #d86691;

            transform: translateY(-2px);
        }

        .academic-box strong {
            display: block;

            color: #a82e5f;

            font-size: 20px;

            margin-bottom: 7px;
        }

        .academic-box span {
            color: #714c5b;

            font-size: 12px;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 0.5px;
        }

        /* INFORMATION GRID */

        .info-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 14px;
        }

        .info-box {
            background: #ffffff;

            border: 1px solid #ead6dd;

            border-radius: 12px;

            padding: 16px 18px;

            transition: 0.2s ease;
        }

        .info-box:hover {
            border-color: #d86691;

            background: #fff9fb;

            transform: translateY(-2px);
        }

        .label {
            display: block;

            color: #a82e5f;

            font-size: 11px;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 0.6px;

            margin-bottom: 7px;
        }

        .value {
            color: #35212a;

            font-size: 15px;

            font-weight: 500;

            line-height: 1.5;
        }

        /* SKILLS */

        .skills-container {
            background: #fff7fa;

            border: 1px solid #efcbd8;

            border-radius: 14px;

            padding: 20px;
        }

        .skills {
            display: flex;

            flex-wrap: wrap;

            gap: 11px;
        }

        .skill {
            background: #c94f7c;

            color: #ffffff;

            padding: 10px 17px;

            border-radius: 25px;

            font-size: 13px;

            font-weight: bold;

            box-shadow: 0 3px 7px rgba(130, 40, 80, 0.12);

            transition: 0.2s ease;
        }

        .skill:hover {
            background: #a93662;

            transform: translateY(-2px);
        }

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .page {
                width: 94%;
                margin: 20px auto;
            }

            .profile-header {
                padding: 75px 25px 30px;

                flex-direction: column;

                text-align: center;
            }

            .home-button {
                top: 15px;
                right: 18px;
            }

            .avatar {
                width: 85px;
                height: 85px;

                font-size: 27px;
            }

            .header-text h1 {
                font-size: 24px;
            }

            .header-text .course {
                font-size: 14px;
            }

            .header-text .school {
                font-size: 13px;
            }

            .content {
                padding: 30px 22px;
            }

            .academic-grid {
                grid-template-columns: 1fr;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .section-header h2 {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="profile-card">

        <!-- PROFILE HEADER -->

        <div class="profile-header">

            <!-- HOME BUTTON -->

            <a href="<?= site_url('student'); ?>" class="home-button">
                ← Home
            </a>


            <!-- AVATAR -->

            <div class="avatar">
                JD
            </div>


            <!-- HEADER INFORMATION -->

            <div class="header-text">

                <h1>
                    <?= $name ?>
                </h1>

                <p class="course">
                    <?= $course ?> · <?= $year ?>
                </p>

                <p class="school">
                    <?= $college ?> · <?= $campus ?>
                </p>

                <span class="student-id">
                    STUDENT ID: <?= $student_id ?>
                </span>

            </div>

        </div>


        <!-- CONTENT -->

        <div class="content">


            <!-- ACADEMIC INFORMATION -->

            <div class="section">

                <div class="section-header">

                    <div class="section-line"></div>

                    <h2>
                        Academic Information
                    </h2>

                </div>


                <div class="academic-grid">

                    <div class="academic-box">

                        <strong>
                            <?= $course_code ?>
                        </strong>

                        <span>
                            Program
                        </span>

                    </div>


                    <div class="academic-box">

                        <strong>
                            <?= $year ?>
                        </strong>

                        <span>
                            Year Level
                        </span>

                    </div>


                    <div class="academic-box">

                        <strong>
                            <?= $section ?>
                        </strong>

                        <span>
                            Section
                        </span>

                    </div>

                </div>


                <div class="info-grid">

                    <div class="info-box">

                        <span class="label">
                            School
                        </span>

                        <span class="value">
                            <?= $school ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Campus
                        </span>

                        <span class="value">
                            <?= $campus ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Academic Year
                        </span>

                        <span class="value">
                            <?= $academic_year ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Semester
                        </span>

                        <span class="value">
                            <?= $semester ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Status
                        </span>

                        <span class="value">
                            <?= $status ?>
                        </span>

                    </div>

                </div>

            </div>


            <!-- PERSONAL INFORMATION -->

            <div class="section">

                <div class="section-header">

                    <div class="section-line"></div>

                    <h2>
                        Personal Information
                    </h2>

                </div>


                <div class="info-grid">

                    <div class="info-box">

                        <span class="label">
                            First Name
                        </span>

                        <span class="value">
                            <?= $first_name ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Last Name
                        </span>

                        <span class="value">
                            <?= $last_name ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Gender
                        </span>

                        <span class="value">
                            <?= $gender ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Birthdate
                        </span>

                        <span class="value">
                            <?= $birthdate ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Age
                        </span>

                        <span class="value">
                            <?= $age ?> years old
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Civil Status
                        </span>

                        <span class="value">
                            <?= $civil_status ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Nationality
                        </span>

                        <span class="value">
                            <?= $nationality ?>
                        </span>

                    </div>

                </div>

            </div>


            <!-- CONTACT INFORMATION -->

            <div class="section">

                <div class="section-header">

                    <div class="section-line"></div>

                    <h2>
                        Contact Information
                    </h2>

                </div>


                <div class="info-grid">

                    <div class="info-box">

                        <span class="label">
                            Email Address
                        </span>

                        <span class="value">
                            <?= $email ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Phone Number
                        </span>

                        <span class="value">
                            <?= $phone ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Address
                        </span>

                        <span class="value">
                            <?= $address ?>
                        </span>

                    </div>

                </div>

            </div>


            <!-- EMERGENCY CONTACT -->

            <div class="section">

                <div class="section-header">

                    <div class="section-line"></div>

                    <h2>
                        Emergency Contact
                    </h2>

                </div>


                <div class="info-grid">

                    <div class="info-box">

                        <span class="label">
                            Contact Name
                        </span>

                        <span class="value">
                            <?= $emergency_name ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Relationship
                        </span>

                        <span class="value">
                            <?= $emergency_relationship ?>
                        </span>

                    </div>


                    <div class="info-box">

                        <span class="label">
                            Phone Number
                        </span>

                        <span class="value">
                            <?= $emergency_phone ?>
                        </span>

                    </div>

                </div>

            </div>


            <!-- SKILLS -->

            <div class="section">

                <div class="section-header">

                    <div class="section-line"></div>

                    <h2>
                        Skills
                    </h2>

                </div>


                <div class="skills-container">

                    <div class="skills">

                        <?php foreach ($skills as $skill): ?>

                            <span class="skill">
                                <?= $skill ?>
                            </span>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>


        </div>

    </div>

</div>

</body>
</html>