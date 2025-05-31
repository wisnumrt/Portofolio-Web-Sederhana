<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapsoro Wisnu Murti</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

</head>
<body>
    <?php
        $logo = "Wisnu";
        $nav_links = array(
            array("Home", "#Home"),
            array("About Me", "#About"),
            array("Resume", "#Resume"),
            array("Contact", "#Contact")
        );
        $name = "Wisnu Murti";
        $occupation = "Data Enthusiast";
        $img_src = "./assets/wisnupic.png";
        $download_cv_link = "./assets/CV.pdf";
        $linkedin_link = "https://www.linkedin.com/in/wisnmrt";
        $instagram_link = "https://www.instagram.com/wismrt_?igsh=dTVsMGcwaDhwdWNp";
        $about_text = "I am an undergraduate student currently studying at the Department of Informatics, UPN Veteran East Java. In my educational journey, I am passionate about improving my knowledge and skills in the field of technology and hope to contribute to the development of the field of information technology in the future. I have a great interest in learning data, database management and UI/UX designer and interested in developing these skills. I have experience in teamwork, public relations and leadership in campus activities.";
        $email = "wisnumurti982@gmail.com";
    ?>

    <nav>
        <div class="container nav-container">
            <a href="" class="logo"><?php echo $logo; ?></a>
            <ul class="nav-link">
                <?php foreach ($nav_links as $link): ?>
                    <li><a href="<?php echo $link[1]; ?>"><?php echo $link[0]; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <header id="Home">
        <div class="container header-container">
            <div class="header-left">
                <img src="<?php echo $img_src; ?>" alt="">
            </div>
            <div class="header-right">
                <p><b>Hello I'm</b></p>
                <h1><?php echo $name; ?></h1>
                <h2><?php echo $occupation; ?></h2>
                <div class="header-action">
                    <a href="<?php echo $download_cv_link; ?>" class="btn" download="CV.pdf">Download CV</a>
                    <a href="#Contact" class="btn btn-blue">More Info</a>
                </div>
                <div class="header-social">
                    <a href="<?php echo $linkedin_link; ?>"><img src="./assets/linkedin.png" class="icon1"></a>
                    <a href="<?php echo $instagram_link; ?>"><img src="./assets/instagram.png" class="icon2"></a>
                </div>
            </div>
        </div>
    </header>

    <section id="About">
        <p class="heading-p">Get To Know More</p>
        <h1 class="heading">About Me</h1>
        <div class="container about-container">
            <div class="about-left">
                <img src="./assets/batik3.png" alt="">
            </div>
            <div class="about-right">
                <div class="basic-edu">
                    <div class="edu-box">
                        <p>
                            <?php echo $about_text; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        $education_data = array(
            array(
                "period" => "(2016 - 2019)",
                "school" => "SMPN 1 Sugio",
                "degree" => "Junior High School Diploma"
            ),
            array(
                "period" => "(2019 - 2022)",
                "school" => "SMAN 1 Kedungpring",
                "degree" => "High School Diploma in MIPA"
            ),
            array(
                "period" => "(2022 - Now)",
                "school" => "UPN 'Veteran' Jawa Timur",
                "degree" => "Undergraduate Informatics Student"
            )
        );

        $experience_data = array(
            array(
                "period" => "(2023)",
                "experience" => "Smaked Dream Expo Ikasmaked",
                "division" => "Public Relations Division"
            ),
            array(
                "period" => "(2023)",
                "experience" => "Building Character Day HIMATIFA",
                "division" => "Event Division"
            ),
            array(
                "period" => "(2023)",
                "experience" => "Abdi Desa HIMATIFA",
                "division" => "Event Division"
            )
        );
    ?>
    
    <section id="Resume">
        <a href="#Resume" class="arrow"><img src="./assets/arrow.png" class="icon1"></a>
        <p class="heading-p">Explore My</p>
        <h1 class="heading">Resume</h1>
        <div class="container resume-container">
            <div class="resume-box">
                <h2>Education</h2>
                <div class="resume">
                    <table>
                        <tr>
                            <th>Period</th>
                            <th>Education</th>
                        </tr>
                        <?php foreach ($education_data as $edu): ?>
                            <tr>
                                <td><?php echo $edu['period']; ?></td>
                                <td>
                                    <h4><?php echo $edu['school']; ?></h4>
                                    <p><i><?php echo $edu['degree']; ?></i></p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <button class="toggle-table btn btn-blue">Education</button>
                </div>
            </div>
            <div class="resume-box">
                <h2>Experience</h2>
                <div class="resume">
                    <table>
                        <tr>
                            <th>Period</th>
                            <th>Experience</th>
                        </tr>
                        <?php foreach ($experience_data as $exp): ?>
                            <tr>
                                <td><?php echo $exp['period']; ?></td>
                                <td>
                                    <h4><?php echo $exp['experience']; ?></h4>
                                    <p><i><?php echo $exp['division']; ?></i></p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <button class="toggle-table btn btn-blue">Experience</button>
                </div>
            </div>
        </div>
    </section>

    <section id="Contact"> 
        <a href="#Contact" class="arrow"><img src="./assets/arrow.png" class="icon1"></a>
        <p class="heading-p">Get in Touch</p>
        <h1 class="heading">Contact Me</h1>
        <div class="contact-container container">
            <div class="email">
                <img src="./assets/emailpic.png" class="icon1">
                <a href="mailto:<?php echo $email; ?>"><h5><?php echo $email; ?></h5></a>
            </div>
            <div class="linkedin">
                <img src="./assets/linkedin.png" class="icon1">
                <a href="<?php echo $linkedin_link; ?>"><h5>Linkedin</h5></a>
            </div>
        </div>
    </section>

    <footer>
        <ul class="nav-link">
            <?php foreach ($nav_links as $link): ?>
                <li><a href="<?php echo $link[1]; ?>"><?php echo $link[0]; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <p>&copy; Copyright Your Wisnu Murti</p>
    </footer>
    
    <script src="main.js"></script>
</body>
</html>
