<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" href="./home.css">
</head>

<body>
    <section class="navbar">
        <div>
            <img class="navbar__logo" src="./assets/logo.png" alt="">
        </div>
        <div>
            <ul class="navbar__links">
                <li>
                    Home
                </li>
                <li>
                    Shop
                </li>
                <li>
                    About
                </li>
                <li>
                    <a href="./stores.xml">Offline Stores</a>
                </li>
            </ul>
        </div>
        <div style="display: flex; gap:10px; align-items:center;">
            <h3 style="color:black;">Hello, </h3>
            <?php
            if (isset($_GET["name"])) {
                $name = $_GET["name"];
                echo "<h3>$name</h3>";
            }
            ?>
            <img class="dp" src="./assets/dp.png" alt="">
        </div>
    </section>
    <section class="hero">
        <div class="hero-main">
            <img src="./assets/hero/hero-main.jpg" alt="hero-main" />
            <p style="
            font-size: 16px;
            color: #fa6400;
            margin-top: 15px;
            letter-spacing: 1px;
            font-weight: bold;
          ">
                What to read next
            </p>
            <p class="hero-main__title">The best books out this month</p>
            <p style="font-size: 20px">New hardback and paperback releases...</p>
        </div>
        <div class="hero__features-list">
            <div class="hero__features-list-title">Features</div>
            <div class="hero_feature-list-card-list">
                <div class="hero__features-list-card">
                    <img src="./assets/hero/hero-list-1.jpg" alt="" />
                    <p>Extract: Abroad in Japan by Chris Broad</p>
                </div>
                <hr />
                <div class="hero__features-list-card">
                    <img src="./assets/hero/hero-list-2.jpg" alt="" />
                    <p>Best romance books for ultimate escapism</p>
                </div>
                <hr />
                <div class="hero__features-list-card">
                    <img src="./assets/hero/hero-list-3.jpg" alt="" />
                    <p>The best books by South Asian authors</p>
                </div>
                <hr />
                <div class="hero__features-list-card">
                    <img src="./assets/hero/hero-list-4.jpg" alt="" />
                    <p>Extract: Inside the Centre by Ray Monk</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>