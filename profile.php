<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
$id = $_SESSION['unique_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.svg" type="image/x-icon">
    <title>Profile | Instagram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navigation">
        <?php
        include("./partials/header-user.php");
        ?>
    </nav>
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="./php/images/<?php echo $row['img'] ?>" alt="User Picture">
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"><?php echo $row['username'] ?></h3>
                    <a href="edit-profile.php">Chỉnh sửa trang cá nhân</a>
                    <i class="fa fa-cog fa-lg"></i>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number">333</span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">1234</span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">36</span> following
                    </li>
                </ul>
                <p class="profile__bio">
                    <span class="profile__full-name">
                        <?php echo $row['fullname'] ?>
                    </span>
                    <!-- Doing whatever and eating Pho Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit. Ducimus suscipit praesentium eveniet quibusdam ipsam omnis fugit. Tempore voluptates ratione recusandae
                    natus illo perspiciatis suscipit, odio consequuntur quasi obcaecati minus! Omnis.
                    <a href="#">serranoarevalo.com</a> -->
                </p>
            </div>
        </header>
        <section class="profile__photos">
            <?php
            include("./php/config.php");
            $query = mySQLi_query($conn, "SELECT * from photos where user_id='$id'");
            while ($row = mySQLi_fetch_array($query)) {
                $id = $row['photo_id'];
            ?>
                <div class="profile__photo">
                    <img src="<?php echo $row['location']; ?>">
                    <div class="profile__photo-overlay">
                        <span class="overlay__item">
                            <i class="fa fa-heart"></i>
                            486
                        </span>
                        <span class="overlay__item">
                            <i class="fa fa-comment"></i>
                            344
                        </span>
                    </div>
                </div>

            <?php
            }
            ?>
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
            <span class="footer__copyright">© 2021 Instagram From Meta</span>
        </div>
    </footer>
</body>

</html>