<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>

<?php
include './partials/check-time.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Instagram</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="JS/script.js" defer></script>
</head>

<body ondragstart="return false;" ondrop="return false;">
    <?php
    include './partials/header-home.php';
    ?>

    <main class="main-container">
        <section class="content-container">
            <div class="content">
                <div class="stories">
                    <button class="stories__left-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="var(--primary)" d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z">
                            </path>
                        </svg>
                    </button>
                    <div class="stories__content">
                        <button class="story story--has-story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                        <defs>
                                            <linearGradient y2="0" x2="1" y1="1" x1="0" id="--story-gradient">
                                                <stop offset="0" stop-color="#f09433" />
                                                <stop offset="0.25" stop-color="#e6683c" />
                                                <stop offset="0.5" stop-color="#dc2743" />
                                                <stop offset="0.75" stop-color="#cc2366" />
                                                <stop offset="1" stop-color="#bc1888" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick1</span>
                        </button>
                        <button class="story story--has-story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick2</span>
                        </button>
                        <button class="story story--has-story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick3</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick4</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick5</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick6</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick7</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick8</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick9</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick10</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick11</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick12</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick13</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick14</span>
                        </button>
                        <button class="story">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    <img src="assets/default-user.png" alt="User Picture">
                                </div>
                            </div>
                            <span class="story__user">usernick15</span>
                        </button>
                    </div>
                    <button class="stories__right-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="var(--primary)" d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z">
                            </path>
                        </svg>
                    </button>
                </div>

                <?php
                include("./php/config.php");
                $query = mySQLi_query($conn, "SELECT * from post LEFT JOIN users on users.unique_id = post.user_id order by post_id DESC");
                while ($row = mySQLi_fetch_array($query)) {
                    $posted_by = $row['username'];
                    $location = $row['post_image'];
                    $content = $row['content'];
                    $post_id = $row['post_id'];
                    $time = $row['created'];

                ?>
                    <article class="post">
                        <div class="post__header">
                            <div class="post__profile">
                                <a href="#" target="_blank" class="post__avatar">
                                    <img src="./php/images/<?php echo $row['img'] ?>" alt="User Picture">
                                </a>
                                <a href="#" target="_blank" class="post__user"><?php echo $posted_by ?></a>
                            </div>

                            <button class="post__more-options">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6.5" cy="11.5" r="1.5" fill="var(--text-dark)" />
                                    <circle cx="12" cy="11.5" r="1.5" fill="var(--text-dark)" />
                                    <circle cx="17.5" cy="11.5" r="1.5" fill="var(--text-dark)" />
                                </svg>
                            </button>
                        </div>

                        <div class="post__content">
                            <div class="post__medias">
                                <img src="<?php echo $location ?>">
                            </div>
                        </div>

                        <div class="post__footer">
                            <div class="post__buttons">
                                <button class="post__button">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.4995 21.2609C11.1062 21.2609 10.7307 21.1362 10.4133 20.9001C8.2588 19.3012 3.10938 15.3239 1.81755 12.9143C0.127895 9.76543 1.14258 5.72131 4.07489 3.89968C5.02253 3.31177 6.09533 3 7.18601 3C8.81755 3 10.3508 3.66808 11.4995 4.85726C12.6483 3.66808 14.1815 3 15.8131 3C16.9038 3 17.9766 3.31177 18.9242 3.89968C21.8565 5.72131 22.8712 9.76543 21.186 12.9143C19.8942 15.3239 14.7448 19.3012 12.5902 20.9001C12.2684 21.1362 11.8929 21.2609 11.4995 21.2609ZM7.18601 4.33616C6.34565 4.33616 5.5187 4.57667 4.78562 5.03096C2.43888 6.49183 1.63428 9.74316 2.99763 12.2819C4.19558 14.5177 9.58639 18.6242 11.209 19.8267C11.3789 19.9514 11.6158 19.9514 11.7856 19.8267C13.4082 18.6197 18.799 14.5133 19.997 12.2819C21.3603 9.74316 20.5557 6.48738 18.209 5.03096C17.4804 4.57667 16.6534 4.33616 15.8131 4.33616C14.3425 4.33616 12.9657 5.04878 12.0359 6.28696L11.4995 7.00848L10.9631 6.28696C10.0334 5.04878 8.6611 4.33616 7.18601 4.33616Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.6" />
                                    </svg>
                                </button>
                                <button class="post__button">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2959 20.8165L20.2351 16.8602C20.1743 16.6385 20.2047 16.3994 20.309 16.1907C21.2351 14.3342 21.5438 12.117 20.9742 9.80402C20.2003 6.67374 17.757 4.16081 14.6354 3.33042C13.7833 3.10869 12.9442 3 12.1312 3C6.29665 3 1.74035 8.47365 3.31418 14.5647C4.04458 17.3819 7.05314 20.2992 9.88344 20.9861C10.6486 21.173 11.4008 21.26 12.1312 21.26C13.7006 21.26 15.1701 20.8557 16.4614 20.1601C16.6049 20.0818 16.7657 20.0383 16.9222 20.0383C17.0005 20.0383 17.0787 20.047 17.157 20.0688L21.009 21.0991C21.0307 21.1035 21.0525 21.1078 21.0699 21.1078C21.2177 21.1078 21.3351 20.9687 21.2959 20.8165ZM19.0178 17.1863L19.6178 19.4253L17.4831 18.8558C17.3005 18.8079 17.1135 18.7819 16.9222 18.7819C16.557 18.7819 16.1875 18.8775 15.8571 19.0558C14.6963 19.6818 13.4441 19.9992 12.1312 19.9992C11.4834 19.9992 10.8269 19.9166 10.1791 19.7601C7.78354 19.1775 5.14453 16.6037 4.53586 14.2473C3.90111 11.7865 4.40109 9.26057 5.90536 7.31719C7.40964 5.3738 9.6791 4.26081 12.1312 4.26081C12.8529 4.26081 13.5876 4.35646 14.3137 4.5521C16.9961 5.26511 19.0786 7.39544 19.7525 10.1084C20.2264 12.0213 20.0308 13.9299 19.183 15.6298C18.9395 16.1168 18.8787 16.6689 19.0178 17.1863Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.7" />
                                    </svg>
                                </button>
                                <button class="post__button">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.8555 3.44542C22.6978 3.16703 22.3962 3 22.0714 3L2.91369 3.01392C2.52859 3.01392 2.19453 3.25055 2.05997 3.60781C1.96254 3.86764 1.98574 4.14603 2.11565 4.37338C2.16669 4.45689 2.23165 4.53577 2.31052 4.60537L9.69243 10.9712L11.4927 20.5338C11.5623 20.9096 11.8499 21.188 12.2304 21.2483C12.6062 21.3086 12.9774 21.1323 13.1723 20.8029L22.8509 4.35018C23.0179 4.06715 23.0179 3.72381 22.8555 3.44542ZM4.21748 4.39194H19.8164L10.4255 9.75089L4.21748 4.39194ZM12.6248 18.9841L11.1122 10.948L20.5171 5.58436L12.6248 18.9841Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.3" />
                                    </svg>
                                </button>

                                <div class="post__indicators"></div>

                                <button class="post__button post__button--align-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.875 2H4.125C3.50625 2 3 2.44939 3 3.00481V22.4648C3 23.0202 3.36563 23.1616 3.82125 22.7728L11.5444 16.1986C11.7244 16.0471 12.0225 16.0471 12.2025 16.1936L20.1731 22.7879C20.6287 23.1666 21 23.0202 21 22.4648V3.00481C21 2.44939 20.4994 2 19.875 2ZM19.3125 20.0209L13.3444 15.0827C12.9281 14.7394 12.405 14.5677 11.8763 14.5677C11.3363 14.5677 10.8019 14.7444 10.3856 15.0979L4.6875 19.9502V3.51479H19.3125V20.0209Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.7" />
                                    </svg>
                                </button>
                            </div>

                            <div class="post__infos">
                                <div class="post__likes">
                                    <a href="#" class="post__likes-avatar">
                                        <img src="./php/images/<?php echo $row['img'] ?>" alt="User Picture">
                                    </a>

                                    <span>Liked by <a class="post__name--underline" href="#">user123</a> and <a href="#">73
                                            others</a></span>
                                </div>

                                <div class="post__description">
                                    <span>
                                        <a class="post__name--underline" href="https://github.com/leocosta1" target="_blank"><?php echo $posted_by ?></a>
                                        <?php echo $row['content']; ?>
                                    </span>
                                </div>

                                <span class="post__date-time"><?php echo $time = time_stamp($time); ?></span>
                            </div>
                        </div>
                    </article>
                <?php
                }
                ?>
            </div>
            </div>

            <section class="side-menu">

                <!--  -->
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <!--  -->

                <div class="side-menu__user-profile">
                    <a href="https://github.com/Qa160601" target="_blank" class="side-menu__user-avatar">
                        <img src="./php/images/<?php echo $row['img'] ?>" alt="User Picture">
                    </a>
                    <div class="side-menu__user-info">
                        <a href="https://github.com/Qa160601" target="_blank"><?php echo $row['username'] ?></a>
                        <span><?php echo $row['fullname'] ?></span>
                    </div>
                    <button class="side-menu__user-button"><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>">Chuyển</a></button>
                </div>

                <div class="side-menu__suggestions-section">
                    <div class="side-menu__suggestions-header">
                        <h2>Gợi ý cho bạn</h2>
                        <button>Xem tất cả</button>
                    </div>
                    <div class="side-menu__suggestions-content">
                        <div class="side-menu__suggestion">
                            <a href="#" class="side-menu__suggestion-avatar">
                                <img src="assets/default-user.png" alt="User Picture">
                            </a>
                            <div class="side-menu__suggestion-info">
                                <a href="#">usernick16</a>
                                <span>Followed by user1, user2 and 9 others</span>
                            </div>
                            <button class="side-menu__suggestion-button">Theo dõi</button>
                        </div>
                        <div class="side-menu__suggestion">
                            <a href="#" class="side-menu__suggestion-avatar">
                                <img src="assets/default-user.png" alt="User Picture">
                            </a>
                            <div class="side-menu__suggestion-info">
                                <a href="#">usernick17</a>
                                <span>Followed by user1, user2 and 3 others</span>
                            </div>
                            <button class="side-menu__suggestion-button">Theo dõi</button>
                        </div>
                        <div class="side-menu__suggestion">
                            <a href="#" class="side-menu__suggestion-avatar">
                                <img src="assets/default-user.png" alt="User Picture">
                            </a>
                            <div class="side-menu__suggestion-info">
                                <a href="#">usernick18</a>
                                <span>Followed by user1 and 9 others</span>
                            </div>
                            <button class="side-menu__suggestion-button">Theo dõi</button>
                        </div>
                        <div class="side-menu__suggestion">
                            <a href="#" class="side-menu__suggestion-avatar">
                                <img src="assets/default-user.png" alt="User Picture">
                            </a>
                            <div class="side-menu__suggestion-info">
                                <a href="#">usernick19</a>
                                <span>Followed by user1 and 3 others</span>
                            </div>
                            <button class="side-menu__suggestion-button">Theo dõi</button>
                        </div>
                        <div class="side-menu__suggestion">
                            <a href="#" class="side-menu__suggestion-avatar">
                                <img src="assets/default-user.png" alt="User Picture">
                            </a>
                            <div class="side-menu__suggestion-info">
                                <a href="#">usernick20</a>
                                <span>Followed by user1 and 6 others</span>
                            </div>
                            <button class="side-menu__suggestion-button">Theo dõi</button>
                        </div>
                    </div>
                </div>

                <div class="side-menu__footer">
                    <div class="side-menu__footer-links">
                        <ul class="side-menu__footer-list">
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">About</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Help</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Press</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">API</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Jobs</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Privacy</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Terms</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Locations</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Top Accounts</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Hashtag</a>
                            </li>
                            <li class="side-menu__footer-item">
                                <a class="side-menu__footer-link" href="#">Language</a>
                            </li>
                        </ul>
                    </div>

                    <span class="side-menu__footer-copyright">&copy; 2021 instagram from Meta</span>
                </div>
            </section>
        </section>
    </main>

    <nav class="navbar">
        <a href="./feed.php" class="navbar__button">
            <svg color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                <path d="M45.5 48H30.1c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2.1-4.6-4.6-4.6s-4.6 2.1-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.6-.6 2.1 0l21.5 21.5c.3.3.4.7.4 1.1v23.5c.1.8-.6 1.5-1.4 1.5z">
                </path>
            </svg>
        </a>
        <a href="#" class="navbar__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.669 21.6543C21.8625 21.4622 21.863 21.1494 21.6703 20.9566L17.3049 16.5913C18.7912 14.9327 19.7017 12.7525 19.7017 10.3508C19.7017 5.18819 15.5135 1 10.3508 1C5.18819 1 1 5.18819 1 10.3508C1 15.5135 5.18819 19.7017 10.3508 19.7017C12.7624 19.7017 14.9475 18.7813 16.606 17.2852L20.9739 21.653C21.1657 21.8449 21.4765 21.8454 21.669 21.6543ZM1.9843 10.3508C1.9843 5.7394 5.7394 1.9843 10.3508 1.9843C14.9623 1.9843 18.7174 5.7394 18.7174 10.3508C18.7174 14.9623 14.9623 18.7174 10.3508 18.7174C5.7394 18.7174 1.9843 14.9623 1.9843 10.3508Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        <a href="#" class="navbar__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 2.8H7C5.23269 2.8 3.8 4.23269 3.8 6V17C3.8 18.7673 5.23269 20.2 7 20.2H18C19.7673 20.2 21.2 18.7673 21.2 17V6C21.2 4.23269 19.7673 2.8 18 2.8ZM7 1C4.23858 1 2 3.23858 2 6V17C2 19.7614 4.23858 22 7 22H18C20.7614 22 23 19.7614 23 17V6C23 3.23858 20.7614 1 18 1H7Z" fill="var(--text-dark)" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 7.99995H3V6.19995H22V7.99995Z" fill="var(--text-dark)" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 6.99989L6 1.99989L7.57349 1.12573L11.5735 6.12573L10 6.99989Z" fill="var(--text-dark)" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 6.99989L12.5 1.99989L14.0735 1.12573L18.0735 6.12573L16.5 6.99989Z" fill="var(--text-dark)" />
                <path d="M15.75 13.0671C16.0833 13.2595 16.0833 13.7407 15.75 13.9331L10.5 16.9642C10.1667 17.1566 9.75 16.9161 9.75 16.5312L9.75 10.469C9.75 10.0841 10.1667 9.84354 10.5 10.036L15.75 13.0671Z" fill="var(--text-dark)" />
            </svg>
        </a>
        <a href="#" class="navbar__button">
            <svg color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                </path>
            </svg>
        </a>
        <button class="navbar__button profile-button">
            <div class="profile-button__border"></div>
            <div class="profile-button__picture">
                <img src="assets/default-user.png" alt="User Picture">
            </div>
        </button>
    </nav>
</body>

</html>