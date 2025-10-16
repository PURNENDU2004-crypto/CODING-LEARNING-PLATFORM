<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style link rel="stylesheet" href="style.css"></style>
    <title>CodeLearn - Learn Coding Online</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
        }

        /* Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Hamburger Menu using checkbox */
        #menu-toggle {
            display: none;
        }

        .hamburger-label {
            color: white;
            font-size: 28px;
            cursor: pointer;
            padding: 5px 10px;
            user-select: none;
        }

        .logo {
            color: white;
            font-size: 26px;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar-right {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 5px;
            transition: background 0.3s;
            font-weight: 500;
        }

        .nav-link:hover {
            background: rgba(255,255,255,0.2);
        }

        /* Sidebar Menu */
        .sidebar {
            position: fixed;
            left: -300px;
            top: 0;
            width: 300px;
            height: 100vh;
            background: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: left 0.3s ease;
            z-index: 2000;
            overflow-y: auto;
        }

        #menu-toggle:checked ~ .sidebar {
            left: 0;
        }

        .sidebar-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sidebar-header h2 {
            font-size: 24px;
        }

        .close-label {
            color: white;
            font-size: 30px;
            cursor: pointer;
            user-select: none;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            border-bottom: 1px solid #eee;
        }

        .sidebar-menu a {
            display: block;
            padding: 15px 20px;
            color: #333;
            text-decoration: none;
            transition: background 0.3s;
        }

        .sidebar-menu a:hover {
            background: #f0f0f0;
        }

        .logout-link {
            display: block;
            margin: 20px;
            padding: 12px;
            background: #e74c3c;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            transition: background 0.3s;
        }

        .logout-link:hover {
            background: #c0392b;
        }

        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
            z-index: 1500;
        }

        #menu-toggle:checked ~ .overlay {
            opacity: 1;
            visibility: visible;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        /* Courses Section */
        .courses-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            color: #333;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .course-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .course-icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .course-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
        }

        .course-card p {
            color: #666;
            line-height: 1.6;
        }

        .start-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            transition: transform 0.2s;
        }

        .start-btn:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            .navbar-right {
                gap: 10px;
            }

            .nav-link {
                padding: 6px 12px;
                font-size: 14px;
            }
        }

        /* Footer Styles */
.footer {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 60px 20px 20px;
    margin-top: 80px;
}

.footer-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-about p {
    margin-top: 10px;
    line-height: 1.6;
    opacity: 0.9;
}

.footer-links h4,
.footer-social h4 {
    margin-bottom: 15px;
    font-size: 18px;
    font-weight: 600;
}

.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin: 8px 0;
}

.footer-links a {
    color: white;
    text-decoration: none;
    opacity: 0.9;
    transition: opacity 0.3s;
}

.footer-links a:hover {
    opacity: 1;
    text-decoration: underline;
}

.social-icons a {
    display: inline-block;
    margin-right: 10px;
    font-size: 22px;
    color: white;
    opacity: 0.9;
    transition: transform 0.3s, opacity 0.3s;
}

.social-icons a:hover {
    opacity: 1;
    transform: scale(1.2);
}

.footer-bottom {
    text-align: center;
    margin-top: 40px;
    border-top: 1px solid rgba(255,255,255,0.2);
    padding-top: 20px;
    font-size: 14px;
    opacity: 0.9;
}

    </style>
</head>
<body>
    <!-- Checkbox for menu toggle -->
    <input type="checkbox" id="menu-toggle">

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-left">
            <label for="menu-toggle" class="hamburger-label">☰</label>
            <a href="#" class="logo">💻 CodeLearn</a>
        </div>
        <div class="navbar-right">
            <a href="home.php" class="nav-link">Home</a>
            <a href="#" class="nav-link">Problems</a>
            <a href="registerPage.php" class="nav-link">Register</a>
            <a href="loginPage.php" class="nav-link">Login</a>
            <a href="logout.php" class="nav-link">Logout</a>
        </div>
    </nav>

    <!-- Sidebar Menu -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Menu</h2>
            <label for="menu-toggle" class="close-label">×</label>
        </div>
        <ul class="sidebar-menu">
            <li><a href="sidebar/profile.php"><img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"  alt="Home" width="20" height="20">  Profile</a></li>
            <li><a href="home.php"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="Home" width="20" height="20"> Home</a></li>
            <li><a href="home.php"><img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Home" width="20" height="20"> All Courses</a></li>
            <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828859.png" alt="Home" width="20" height="20"> My Learning</a></li>
            <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/747/747310.png" alt="Home" width="20" height="20">  Progress</a></li>
            <li><a href="sidebar/achievement.php"><img src="https://cdn-icons-png.flaticon.com/512/616/616408.png"  alt="Home" width="20" height="20">  Achievements</a></li>
            <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2099/2099058.png" alt="Home" width="20" height="20">  Settings</a></li>
            <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2462/2462719.png"   alt="Home" width="20" height="20">  Community</a></li>
            <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="Home" width="20" height="20">  Blog</a></li>
            <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828970.png" alt="Home" width="20" height="20">  Help & Support</a></li>
            <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/159/159832.png"  alt="Home" width="20" height="20">  Contact Us</a></li>
        </ul>
        <a href="#" class="logout-link"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828427.png"  alt="Home" width="20" height="20"></a>
    </div>

    <!-- Overlay -->
    <label for="menu-toggle" class="overlay"></label>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to CodeLearn India</h1>
        <p>Master coding skills with India's best online learning platform</p>
    </section>

    <!-- Courses Section -->
    <section class="courses-section">
        <h2 class="section-title">Popular Coding Subjects in India</h2>
        <div class="courses-grid">
            <!-- Machine Learning -->
            <div class="course-card">
                <div class="course-icon"><img src="https://cdn-icons-png.flaticon.com/512/10321/10321476.png" alt="MACHINNE LEARNING PIC" height="120px" width="120px"> </div>
                <h3>Machine Learning & AI</h3>
                <p>Learn ML algorithms and build intelligent applications.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- Python -->
            <div class="course-card">
                <div class="course-icon"><img src="https://static.vecteezy.com/system/resources/previews/012/697/295/non_2x/3d-python-programming-language-logo-free-png.png" alt="python logo" height="100px" width="100px" ></div>
                <h3>Python Programming</h3>
                <p>Learn Python from basics to advanced. Perfect for beginners and data science enthusiasts.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- Java -->
            <div class="course-card">
                <div class="course-icon"><img src="https://www.logo.wine/a/logo/Java_(programming_language)/Java_(programming_language)-Logo.wine.svg" alt="Java" height="150px" width="150px"></div>
                <h3>Java Development</h3>
                <p>Master Java programming and build enterprise-level applications.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- JavaScript -->
            <div class="course-card">
                <div class="course-icon"><img src="https://1000logos.net/wp-content/uploads/2020/09/JavaScript-Logo.png" alt="Java" height="100px" width="160px"></div>
                <h3>JavaScript & Web Dev</h3>
                <p>Create interactive websites and modern web applications with JavaScript.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- C++ -->
            <div class="course-card">
                <div class="course-icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/1822px-ISO_C%2B%2B_Logo.svg.png" alt="Java" height="100px" width="100px"></div>
                <h3>C++ Programming</h3>
                <p>Learn competitive programming and system-level programming with C++.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- Data Structures -->
            <div class="course-card">
                <div class="course-icon"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFhbme_47gnB4U6Czsv-yVcT6N_ujjaWMcxQ&s" alt="Java" height="100px" width="100px"></div>
                <h3>Data Structures & Algorithms</h3>
                <p>Master DSA for coding interviews and competitive programming.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- Web Development -->
            <div class="course-card">
                <div class="course-icon"><img src="https://cdn-icons-png.flaticon.com/512/6674/6674591.png" alt="Java" height="100px" width="100px"></div>
                <h3>Full Stack Web Development</h3>
                <p>Become a full-stack developer with HTML, CSS, JavaScript, and backend.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- React -->
            <div class="course-card">
                <div class="course-icon"><img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png" alt="Java" height="100px" width="100px"></div>
                <h3>React JS</h3>
                <p>Build modern single-page applications with React library.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- Node.js -->
            <div class="course-card">
                <div class="course-icon"><img src="https://cdn-icons-png.flaticon.com/512/5968/5968322.png" alt="Java" height="100px" width="100px"></div>
                <h3>Node.js & Backend</h3>
                <p>Create scalable backend applications with Node.js and Express.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- Android -->
            <div class="course-card">
                <div class="course-icon"><img src="https://developer.android.com/static/images/brand/android-head_3D.png" alt="Java" height="90px" width="130px"></div>
                <h3>Android Development</h3>
                <p>Build mobile apps for Android using Java and Kotlin.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- SQL -->
            <div class="course-card">
                <div class="course-icon"><img src="https://static.vecteezy.com/system/resources/previews/043/987/991/non_2x/sql-3d-icon-png.png" alt="Java" height="100px" width="100px"></div>
                <h3>SQL & Databases</h3>
                <p>Master database management and SQL queries for data handling.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>

            <!-- Git & GitHub -->
            <div class="course-card">
                <div class="course-icon"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Java" height="100px" width="100px"></div>
                <h3>Git & GitHub</h3>
                <p>Learn version control and collaborate on projects with Git.</p>
                <a href="#" class="start-btn">Start Learning</a>
            </div>
        </div>
    </section>

        <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <h3>💻 CodeLearn</h3>
                <p>India’s most trusted platform to learn coding online.  
                Join thousands of learners mastering programming and building their dream careers.</p>
            </div>

            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-social">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/565/565547.png" alt="" height="20px" width="20px"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png"alt="" height="20px" width="20px"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png"alt="" height="20px" width="20px"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2920/2920319.png"alt="" height="20px" width="20px"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2920/2920323.png"alt="" height="20px" width="20px"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 CodeLearn India. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>