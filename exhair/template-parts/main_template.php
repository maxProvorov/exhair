<section class="main">
    <div class="section__wrap b__flex">
        <div class="main__left-side b__flex">
            <div class="left-side__left">
                <div class="insta">
                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/Icon_insta.svg'; ?>"
                            alt="instagram icon"></a>
                    <div class="insta__text">
                        <span>I</span><span>N</span><span>S</span><span>T</span><span>A</span>
                    </div>
                </div>
                <div class="scroll">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/icon_mouse.svg'; ?>"
                        alt="icon mouse">
                    <div class="scroll__line line"></div>
                </div>
            </div>
            <div class="left-side__right">
                <div class="b-1 ">
                    <div class="b-1__line "></div>
                    <div class="b-1__text">
                        <h1>
                            <?php echo get_field('title', 1141); ?>
                        </h1>
                    </div>
                </div>
                <div class="b-2 "><img src="<?php echo get_template_directory_uri() . '/assets/img/exhair.png'; ?>"
                        alt="main text"></div>
                <div class="b-3 "> <span>
                        <?php echo get_field('subtitle', 1141); ?>
                    </span> </div>
                <div class="b-4">
                    <button class="btn">
                        <?php echo get_field('button', 1141); ?>
                    </button>
                    <div class="b-4__line "></div>
                </div>
                <div class="b-5">
                    <span>
                        <?php echo get_field('adress', 1141); ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="main__right-side">
            <div class="main-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/main-img.png'; ?>" alt="main image">
            </div>
        </div>
    </div>
</section>