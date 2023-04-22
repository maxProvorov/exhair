<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>


<body>
    <?php wp_body_open(); ?>
    <header>
        <div class="header">
            <div class="section__wrap b__flex">
                <div class="header__left-side b__flex">
                    <div class="header__logo">
                        <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?>"
                                alt="logo"></a>
                    </div>
                    <nav class="header__menu">
                        <ul class="b__flex">
                            <li>
                                <a href="#">
                                    <?php echo get_field('first_menu', 1141); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php echo get_field('second_menu', 1141); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php echo get_field('third_menu', 1141); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php echo get_field('fourth_menu', 1141); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php echo get_field('fifth_menu', 1141); ?>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__right-side b__flex">
                    <div class="header__tel">
                        <a href="tel:+995 551 001 741" class="b__flex">
                            <div class="tel__svg"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.4168 11.6768C14.1523 12.0855 14.8883 12.4944 15.6238 12.9031C15.9403 13.0789 16.0792 13.4519 15.9546 13.7921C15.3218 15.5209 13.4684 16.4335 11.7245 15.797C8.1535 14.4936 5.50656 11.8465 4.20302 8.27555C3.56651 6.53166 4.47909 4.67823 6.20792 4.04542C6.54811 3.92078 6.9211 4.05965 7.09732 4.37625C7.50565 5.11178 7.91448 5.84775 8.32322 6.58324C8.51482 6.9283 8.46979 7.33787 8.20753 7.63252C7.86409 8.019 7.52071 8.40539 7.17726 8.79146C7.91037 10.5767 9.42325 12.0896 11.2085 12.8227C11.5946 12.4793 11.981 12.1359 12.3675 11.7925C12.6625 11.5302 13.0718 11.4852 13.4167 11.6768L13.4168 11.6768Z"
                                        fill="white" />
                                </svg>
                            </div>

                            <div>
                                <?php echo get_field('phone', 1141); ?>
                            </div>
                        </a>
                    </div>
                    <div class="header__lang"><a href="#"><span>RU</span></a></div>
                </div>
            </div>
        </div>
    </header>