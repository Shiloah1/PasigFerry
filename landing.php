<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Landing Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Mobile sidebar navigation -->
  <div class="mobile-sidebar" id="mobileSidebar">
    <div class="close-btn" onclick="toggleSidebar()">✖</div>
    <div class="search-container">
      <input type="text" placeholder="Search..." />
      <button type="submit">🔍</button>
    </div>
    <a href="#">Schedules</a>
    <a href="#section3">Route</a>
    <a href="#">Community</a>
  </div>

  <!-- Main nav -->
  <nav id="navbar">
    <img src="logo1.jpg" alt="Logo" class="logo" />
    <img src="logongprsf.jpg" alt="Logo" class="logo1" />
    <div class="title">Pasig River Ferry Service</div>

    <!-- Nav links and search (visible only on desktop) -->
    <div class="nav-links">
      <div class="search-container">
        <input type="text" placeholder="Search..." />
        <button type="submit">🔍</button>
      </div>
      <a href="#">Schedules</a>
      <a href="#section3">Route</a>
      <a href="#">Community</a>
      
    </div>
    <div class="reg-btn-container">
      <a href="clientlogin.html">
        <button id="regBtn">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 24 24">
            <path d="M12 2c-5.5 0-10 4.5-10 10s4.5 10 10 10 10-4.5 10-10-4.5-10-10-10zm-1 13h-4v-2h4v-2l4 3-4 3v-2z"/>
          </svg>
          Login
        </button>
      </a>
      
      
      <a id="regBtn1" href="register.html" class="button-style">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 24 24">
          <path d="M12 12c2.7 0 4.5-2.2 4.5-4.5S14.7 3 12 3 7.5 5.2 7.5 7.5 9.3 12 12 12zm0 2c-3 0-9 1.5-9 4.5V21h18v-2.5c0-3-6-4.5-9-4.5zm10-4h-2V6h-2v4h-2v2h2v4h2v-4h2V10z"/>
        </svg>
        Register
      </a>

      <button id="toggle-dark" class="toggle" style="margin-left: 15px; padding: 5px 10px; border-radius: 5px;">
        🌙 / ☀️
      </button>
      
      
    </div>
    <!-- Hamburger menu for mobile -->
    <button class="hamburger" id="hamburger" aria-EXPANDED="Menu">&#9776;</button>
  </nav>

  <!-- Page Sections -->
  <section id="section1">
    <div class="overlay"></div>
    <h1 class="landing">Take a ride with us on your journey with PRFS.</h1>
  </section>

  <section id="section5">
    <h1 class="announcement">Announcements</h1>
    <div class="announcement-content">
        <div class="announcement-card">
            <span class="announcement-date">May 7, 2025</span>
            <h3 class="announcement-title">Website Redesign Launch</h3>
            <p class="announcement-text">We're excited to announce the launch of our newly redesigned website! Explore the new features and improved user experience.</p>
            <a href="#" class="announcement-link">Learn more</a>
        </div>
        <div class="announcement-card">
            <span class="announcement-date">May 5, 2025</span>
            <h3 class="announcement-title">New Product Release</h3>
            <p class="announcement-text">Introducing our latest product line with enhanced features and capabilities. Pre-orders available now!</p>
            <a href="#" class="announcement-link">See details</a>
        </div>
        <div class="announcement-card">
            <span class="announcement-date">May 1, 2025</span>
            <h3 class="announcement-title">Upcoming Maintenance</h3>
            <p class="announcement-text">Scheduled maintenance will occur on May 10th. Services will be temporarily unavailable from 2AM to 4AM EST.</p>
            <a href="#" class="announcement-link">Read more</a>
        </div>
    </div>
</section>

  <section id="section2">
    <div class="image-carousel">
      <img src="guada Image.webp" alt="About Us Image" />
      <img src="LSTA.jpg" alt="About Us Image" />
      <img src="SSTA.jpg" alt="About Us Image" />
      <img src="SJSTA.jpg" alt="About Us Image" />
      <img src="VSTA.webp" alt="About Us Image" />
      <img src="BOAT.jpg" alt="About Us Image" />
      <img src="BRIDGE.jpg" alt="About Us Image" />
      <img src="BOAT1.jpg" alt="About Us Image" />
      <img src="ESCOL.jpg" alt="About Us Image" />
    </div>

    <div class="info-cards">
      <div class="info-card">
        <h2>Efficient Transportation</h2>
        <div class="divider"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget felis eget nulla luctus fringilla.</p>
      </div>
      <div class="info-card">
        <h2>Eco-Friendly Journey</h2>
        <div class="divider"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae arcu nec neque viverra vehicula.</p>
      </div>
      <div class="info-card">
        <h2>Modern Ferries</h2>
        <div class="divider"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut turpis ac justo consequat convallis.</p>
      </div>
    </div>

  </section>

  <section id="section3">
    <div class="schedule-container">
      <h1>Downstream Schedule: Pinagbuhatan-to-Escolta</h1>
      <table class="schedule-table">
        <thead>
          <tr>
            <th>Pinagbuhatan</th>
          <th>Kalawaan</th>
          <th>San Joaquin</th>
          <th>Guadalupe</th>
          <th>Hulo</th>
          <th>Valenzuela</th>
          <th>Lambingan</th>
          <th>Sta. Ana</th>
          <th>PUP Pureza</th>
          <th>Quinta</th>
          <th>Lawton</th>
          <th>Escolta</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>7:00 AM</td>
            <td>7:10 AM</td>
            <td>7:15 AM</td>
            <td>7:30 AM</td>
            <td>7:35 AM</td>
            <td>7:40 AM</td>
            <td>7:50 AM</td>
            <td>7:55 AM</td>
            <td>8:07 AM</td>
            <td>8:20 AM</td>
            <td>8:22 AM</td>
            <td>8:27 AM</td>

          </tr>
          <tr>
            <td>7:30 AM</td>
            <td>7:40 AM</td>
            <td>7:45 AM</td>
            <td>8:00 AM</td>
            <td>8:05 AM</td>
            <td>8:10 AM</td>
            <td>8:20 AM</td>
            <td>8:25 AM</td>
            <td>8:58 AM</td>
            <td>9:08 AM</td>
            <td>9:10 AM</td>
            <td>9:17 AM</td>
          </tr>
          <tr>
            <td>8:30 AM</td>
            <td>8:40 AM</td>
            <td>8:45 AM</td>
            <td>9:30 AM</td>
            <td>9:35 AM</td>
            <td>9:40 AM</td>
            <td>9:43 AM</td>
            <td>9:46 AM</td>
            <td>9:59 AM</td>
            <td>10:09 AM</td>
            <td>10:11 AM</td>
            <td>10:16 AM</td>
          </tr>
          <tr>
            <td>9:30 AM</td>
            <td>9:40 AM</td>
            <td>9:45 AM</td>
            <td>10:30 AM</td>
            <td>10:35 AM</td>
            <td>10:40 AM</td>
            <td>10:50 AM</td>
            <td>10:55 AM</td>
            <td>11:08 AM</td>
            <td>11:15 AM</td>
            <td>11:17 AM</td>
            <td>11:22 AM</td>
          </tr>
          <tr>
            <td>11:00 AM</td>
            <td>11:10 AM</td>
            <td>11:15 AM</td>
            <td>11:30 AM</td>
            <td>11:35 AM</td>
            <td>11:40 AM</td>
            <td>11:50 AM</td>
            <td>11:55 AM</td>
            <td>12:08 PM</td>
            <td>12:15 PM</td>
            <td>12:17 PM</td>
            <td>12:20 PM</td>
          </tr>
          <tr>
            <td>12:30 PM</td>
            <td>12:40 PM</td>
            <td>12:45 PM</td>
            <td>1:00 PM</td>
            <td>1:05 PM</td>
            <td>1:10 PM</td>
            <td>1:20 PM</td>
            <td>1:25 PM</td>
            <td>1:38 PM</td>
            <td>1:45 PM</td>
            <td>1:47 PM</td>
            <td>1:52 PM</td>
          </tr>
          <tr>
            <td>2:00 PM</td>
            <td>2:10 PM</td>
            <td>2:15 PM</td>
            <td>2:30 PM</td>
            <td>2:35 PM</td>
            <td>2:40 PM</td>
            <td>2:44 PM</td>
            <td>2:48 PM</td>
            <td>3:01 PM</td>
            <td>3:08 PM</td>
            <td>3:10 PM</td>
            <td>3:15 PM</td>
          </tr>
          <tr>
            <td>4:00 PM</td>
            <td>4:15 PM</td>
            <td>4:20 PM</td>
            <td>4:30 PM</td>
            <td>4:35 PM</td>
            <td>4:40 PM</td>
            <td>4:45 PM</td>
            <td>4:50 PM</td>
            <td>5:02 PM</td>
            <td>5:12 PM</td>
            <td>5:14 PM</td>
            <td>5:20 PM</td>
          </tr>
          
        </tbody>
      </table>
    </div>
    <div class="schedule-container2">
      <h1>Upstream Schedule: Escolta-to-Kalawaan</h1>
      <table class="schedule-table2">
        <thead>
          <tr>
            <th>Escolta</th>
            <th>Lawton</th>
            <th>Quinta</th>
            <th>PUP Pureza</th>
            <th>Sta. Ana</th>
            <th>Lambingan</th>
            <th>Valenzuela</th>
            <th>Hulo</th>
            <th>Guadalupe</th>
            <th>San Joaquin</th>
            <th>Kalawaan</th>           
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8:15 AM</td>
            <td>8:20 AM</td>
            <td>8:22 AM</td>
            <td>8:35 AM</td>
            <td>8:39 AM</td>
            <td>9:00 AM</td>
            <td>9:10 AM</td>
            <td>9:15 AM</td>
            <td>9:20 AM</td>
            <td>9:35 AM</td>
            <td>9:30 AM</td>
          </tr>
          <tr>
            <td>9:00 AM</td>
            <td>9:05 AM</td>
            <td>9:07 AM</td>
            <td>9:26 AM</td>
            <td>9:39 AM</td>
            <td>9:42 AM</td>
            <td>9:50 AM</td>
            <td>9:56 AM</td>
            <td>10:00 AM</td>
            <td>10:15 AM</td>
            <td>10:20 AM</td>
          </tr>
          <tr>
            <td>10:00 AM</td>
            <td>10:05 AM</td>
            <td>10:07 AM</td>
            <td>10:22 AM</td>
            <td>10:31 AM</td>
            <td>10:34 AM</td>
            <td>10:42 AM</td>
            <td>10:48 AM</td>
            <td>10:52 AM</td>
            <td>11:07 AM</td>
            <td>11:12 AM</td>
          </tr>
          <tr>
            <td>11:00 AM</td>
            <td>11:05 AM</td>
            <td>11:07 AM</td>
            <td>11:26 AM</td>
            <td>11:35 AM</td>
            <td>11:38 AM</td>
            <td>11:46 AM</td>
            <td>11:49 AM</td>
            <td>11:55 AM</td>
            <td>12:10 PM</td>
            <td>12:15 PM</td>
          </tr>
          <tr>
            <td>12:00 PM</td>
            <td>12:05 PM</td>
            <td>12:07 PM</td>
            <td>12:30 PM</td>
            <td>12:40 PM</td>
            <td>12:44 PM</td>
            <td>12:52 PM</td>
            <td>12:56 PM</td>
            <td>1:00 PM</td>
            <td>1:15 PM</td>
            <td>1:20 PM</td>
          </tr>
          <tr>
            <td>1:00 PM</td>
            <td>1:05 PM</td>
            <td>1:07 PM</td>
            <td>1:30 PM</td>
            <td>1:39 PM</td>
            <td>1:43 PM</td>
            <td>1:50 PM</td>
            <td>1:56 PM</td>
            <td>2:00 PM</td>
            <td>2:15 PM</td>
            <td>2:20 PM</td>
          </tr>
          <tr>
            <td>2:00 PM</td>
            <td>2:05 PM</td>
            <td>2:07 PM</td>
            <td>2:23 PM</td>
            <td>2:35 PM</td>
            <td>2:36 PM</td>
            <td>2:43 PM</td>
            <td>2:47 PM</td>
            <td>2:52 PM</td>
            <td>3:07 PM</td>
            <td>3:15 PM</td>
          </tr>
          <tr>
            <td>3:00 PM</td>
            <td>3:05 PM</td>
            <td>3:07 PM</td>
            <td>3:26 PM</td>
            <td>3:31 PM</td>
            <td>3:34 PM</td>
            <td>3:41 PM</td>
            <td>3:45 PM</td>
            <td>3:52 PM</td>
            <td>4:07 PM</td>
            <td>4:12 PM</td>
          </tr>
          <tr>
            <td>4:00 PM</td>
            <td>4:05 PM</td>
            <td>4:07 PM</td>
            <td>4:26 PM</td>
            <td>4:37 PM</td>
            <td>4:41 PM</td>
            <td>4:48 PM</td>
            <td>4:55 PM</td>
            <td>5:00 PM</td>
            <td>5:15 PM</td>
            <td>5:20 PM</td>
          </tr>
          <tr>
            <td>5:00 PM</td>
            <td>5:05 PM</td>
            <td>5:07 PM</td>
            <td>5:30 PM</td>
            <td>5:41 PM</td>
            <td>5:44 PM</td>
            <td>5:53 PM</td>
            <td>5:56 PM</td>
            <td>6:00 PM</td>
            <td>6:15 PM</td>
            <td>6:20 PM</td>
          </tr>
          <tr>
            <td>5:30 PM</td>
            <td>5:35 PM</td>
            <td>5:37 PM</td>
            <td>5:50 PM</td>
            <td>6:01 PM</td>
            <td>6:04 PM</td>
            <td>6:09 PM</td>
            <td>6:14 PM</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
          </tr>          
        </tbody>
      </table>
    </div>
  </section>

  <section4>
    <h1 class="s4title"> PRFS Routes </h1>
    <img src="route.png" alt="Section 3 Image" />
  </section4>


  <footer>
    &copy;  Pasig River Ferry Service Website. All rights reserved 2025.
  </footer>

  <script>
    // Toggle sidebar function
    function toggleSidebar() {
      document.getElementById("mobileSidebar").classList.toggle("active");
    }
  
    // Ensure button works even without inline onclick
    const hamburgerBtn = document.getElementById("hamburger");
    if (hamburgerBtn) {
      hamburgerBtn.addEventListener("click", toggleSidebar);
    }
  
    // Navbar and reg Button Scroll Logic
    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");
    const regBtn = document.getElementById("regBtn");
    const regBtn1 = document.getElementById("regBtn1");
  
    window.addEventListener('scroll', function () {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
      if (scrollTop > lastScrollTop) {
        // Scrolling down
        navbar.style.top = "-70px";
        regBtn.style.opacity = "0";
        regBtn.style.transform = "translateY(100px)";
        regBtn1.style.opacity = "0";
        regBtn1.style.transform = "translateY(100px)";
      } else {
        // Scrolling up
        navbar.style.top = "0";
        regBtn.style.opacity = "1";
        regBtn.style.transform = "translateY(0)";
        regBtn1.style.opacity = "1";
        regBtn1.style.transform = "translateY(0)";
      }
  
      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
  
    // Image Carousel swipe logic
    const carousel = document.querySelector('.image-carousel');
    let isMouseDown = false;
    let startX;
    let scrollLeft;
  
    carousel.addEventListener('mousedown', (e) => {
      isMouseDown = true;
      startX = e.pageX - carousel.offsetLeft;
      scrollLeft = carousel.scrollLeft;
    });
  
    carousel.addEventListener('mouseleave', () => {
      isMouseDown = false;
    });
  
    carousel.addEventListener('mouseup', () => {
      isMouseDown = false;
    });
  
    carousel.addEventListener('mousemove', (e) => {
      if (!isMouseDown) return;
      e.preventDefault();
      const x = e.pageX - carousel.offsetLeft;
      const walk = (x - startX) * 1; // Adjust scroll speed (higher multiplier for faster scroll)
      carousel.scrollLeft = scrollLeft - walk;
    });

    const toggleBtn = document.getElementById("toggle-dark");
  toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
    localStorage.setItem("theme", document.body.classList.contains("dark-mode") ? "dark" : "light");
  });

  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-mode");
  }
  </script>
  
</body>
</html>
