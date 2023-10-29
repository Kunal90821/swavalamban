<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="images/logo.png" />
    <title>Swavalamban-The Inventor's Lounge</title>
</head>

<body>
    <div id="preloader"></div>
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>
    <section class="head">
        <header>
            <div class="nav-bar">
                <a href="index.php" class="logo">Swavalamban <h6>- The Inventor's Lounge</h6></a>
                <div class="navigation">
                    <div class="nav-items">
                        <i class="uil uil-times nav-close-btn"></i>
                        <a href="#"><i class="uil uil-home"></i> Home</a>
                        <a href="#about"><i class="uil uil-info-circle"></i> About</a>
                        <a href="#gallery"><i class="uil uil-images"></i> Gallery</a>
                        <div class="dropdown">
                            <a href="#" class="dropbtn"><i class="uil uil-trophy"></i> Achievements<i class="uil uil-angle-down"></i></a>
                            <div class="dropdown-content">
                                <a href="html/current_projects.php" target="blank">Current Projects</a><br />
                                <a href="html/glimpses.php" target="blank">Glimpses</a>
                            </div>
                        </div>
                        <a href="#ourteam"><i class="uil uil-users-alt"></i> Our Team</a>
                        <a href=" https://forms.gle/yFbPKcwmszLEMe2b8" target="blank"><i class=" uil uil-user-plus"></i> Apply</a>
                        <a href="#contact"><i class="uil uil-envelope"></i> Contact</a>
                    </div>
                </div>
                <i class="uil uil-apps nav-menu-btn"></i>
            </div>
            <div class="scroll-indicator-container">
                <div class="scroll-indicator-bar"></div>
            </div>
        </header>
    </section>



    <!-- Frames -->
    <iframe id="home" src="../html/slider.php" width="100%" scrolling="no" onload="resizeIframe(this)" style="border:none;"></iframe>

    <iframe id="about" src="../html/about_us.html" width="100%" scrolling="no" onload="resizeIframe(this)" style="border:none;"></iframe>

    <iframe id="gallery" src="../html/gallery.php" width="100%" scrolling="no" onload="resizeIframe(this)" style="border:none;"></iframe>

    <iframe src="/html/magazine.html" width="100%" scrolling="no" onload="resizeIframe(this)" style="border:none;"></iframe>

    <iframe id="mentors" src="../html/mentor.html" width="100%" scrolling="no" onload="resizeIframe(this)" style="border:none;"></iframe>

    <iframe id="ourteam" src="../html/ourteam.html" width="100%" scrolling="no" onload="resizeIframe(this)" style="border:none;"></iframe>

    <footer>
        <iframe id="contact" src="../html/contact.html" width="100%" scrolling="no" onload="resizeIframe(this)" style="border:none;"></iframe>
    </footer>

    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>
    <script src="./js/nav.js"></script>
    <script>
        function resizeIframe(obj) {
            obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
        }
    </script>
    <script src="./js/progress.js"></script>
</body>

</html>