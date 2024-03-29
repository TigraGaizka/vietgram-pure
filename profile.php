<?php
    include "connection.php";
    $result = mysqli_query($connection,"select * from profile");
    $data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore.html" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.php" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="images/black-lotus.png" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username">
                        <?php 
                            echo $data["username"];
                        ?>
                    </h3>
                    <a href="edit-profile.php">Edit profile</a>
                    <i class="fa fa-cog fa-lg"></i>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number">6</span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">666</span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">154</span> following
                    </li>
                </ul>
                <p class="profile__bio">
                    <span class="profile__full-name">
                        <?php 
                            echo $data["name"];
                        ?>
                    </span>
                    <?php 
                        echo $data["bio"];
                    ?>
                    <a href="#">
                        <?php 
                            echo $data["website"];
                        ?>
                    </a>
                </p>
            </div>
        </header>
        <section class="profile__photos">
            <div class="profile__photo">
                <img src="images/meme5.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                            629
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                            120
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/meme10.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                            786
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                            197
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/meme9.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                            457
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                            91
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/meme4.png" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                            560
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                            104
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/meme6.png" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                            707
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                            183
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/meme11.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                            611
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                            104
                    </span>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>

</body>

</html>