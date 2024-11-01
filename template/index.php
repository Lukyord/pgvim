<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main main">
    <section id="index-hero" class="sc">
        <div class="main-text a-center">
            <h1 class="title size-h2 c-blue animate fadeIn" data-wow-delay="5s">
                PRINCESS <br class="hidden-device-md">
                GALYANI VADHANA <br class="hidden-device-md">
                INSTITUTE OF MUSIC
            </h1>
            <p class="description c-gold size-sub2 weight-light animate fadeIn" data-wow-delay="5.5s">
                Princess Galyani Vadhana Institute of Music, Thailand, is a unique conservatory
                <br class="show-md">of music with a contemporary approach to classical music.
            </p>
        </div>

        <div class="upcoming-event animate fadeIn">
            <?php
            $staff_title = "UPCOMING EVENT";

            include($root . "include/element-staff.php");
            ?>

            <div class="marquee-wrapper animate fadeIn">
                <div class="marquee" data-js="liMarquee">
                    <?php
                    $events_arr = [
                        [
                            "link" => "#event-link1",
                            "image" => "./assets/img/design/event1.jpg",
                            "date" => "28 SEP 2024",
                            "event-name" => "Open House 2024",
                        ],
                        [
                            "link" => "#event-link2",
                            "image" => "./assets/img/design/event2.jpg",
                            "date" => "28 SEP 2024",
                            "event-name" => "Open House 2024",
                        ],
                        [
                            "link" => "#event-link3",
                            "image" => "./assets/img/design/event3.jpg",
                            "date" => "28 SEP 2024",
                            "event-name" => "Open House 2024",
                        ],
                        [
                            "link" => "#event-link4",
                            "image" => "./assets/img/design/event4.jpg",
                            "date" => "28 SEP 2024",
                            "event-name" => "Open House 2024",
                        ],
                    ];

                    foreach ($events_arr as $index => $event) {
                        $var_num = ($index % 4) + 1;
                    ?>
                        <div class="marquee-item">
                            <div class="circle-hover image">
                                <a href="<?php echo $event["link"] ?>" class="link-overlay">&nbsp;</a>
                                <div class="blurred-media">
                                    <img src="<?php echo $event["image"] ?>" alt="Event Image <?php echo $index + 1 ?>" loading="lazy" draggable="false">
                                </div>
                                <div class="detail hidden-device-md">
                                    <p class="date size-sub c-blue"><?php echo $event["date"] ?></p>
                                    <p class="event-name size-h5 c-blue"><?php echo $event["event-name"] ?></p>
                                </div>
                            </div>
                            <div class="decoration">
                                <div class="illustration var-<?php echo $var_num; ?>">
                                    <img src="./assets/img/design/illustration<?php echo $var_num; ?>.svg" alt="Illustration">
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="marquee-item">
                        <div class="circle-hover image active">
                            <a href="#all-event" class="link-overlay">&nbsp;</a>
                        </div>
                        <div class="decoration">
                            <div class="illustration var-5">
                                <img src="./assets/img/design/illustration5.svg" alt="Illustration">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="index-announcement" class="sc">
        <div class="wrapper animate fadeIn">
            <p class="section-description size-sub c-white">ANNOUNCEMENT</p>

            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $announcement_arr = [
                        [
                            "image" => "./assets/img/design/index-announcement-image1.jpg",
                            "image_m" => "./assets/img/design/index-announcement-image1-m.jpg",
                            "title" => "STUDENT LIFE",
                            "description" => "We want you to connect and stay connected with an active <br>student life - whether you are joining us on campus",
                            "link" => "#student-life",
                            "cta" => "READ MORE",
                        ],
                        [
                            "image" => "./assets/img/design/index-announcement-image1.jpg",
                            "image_m" => "./assets/img/design/index-announcement-image1-m.jpg",
                            "title" => "STUDENT LIFE",
                            "description" => "We want you to connect and stay connected with an active <br>student life - whether you are joining us on campus",
                            "link" => "#student-life",
                            "cta" => "READ MORE",
                        ],
                        [
                            "image" => "./assets/img/design/index-announcement-image1.jpg",
                            "image_m" => "./assets/img/design/index-announcement-image1-m.jpg",
                            "title" => "STUDENT LIFE",
                            "description" => "We want you to connect and stay connected with an active <br>student life - whether you are joining us on campus",
                            "link" => "#student-life",
                            "cta" => "READ MORE",
                        ],
                    ];

                    foreach ($announcement_arr as $index => $announcement) {
                    ?>
                        <div class="swiper-slide">
                            <div class="wrapper">
                                <div class="image">
                                    <?php
                                    $cover = $announcement["image"];
                                    $cover_m = $announcement["image_m"];
                                    ?>
                                    <picture class="object blurred-media">
                                        <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                        <img
                                            src="<?php echo $cover; ?>"
                                            alt="Announcement Image"
                                            class="cover"
                                            loading="lazy"
                                            draggable="false">
                                    </picture>
                                </div>

                                <div class="content">
                                    <h2 class="title size-h1 c-white"><?php echo $announcement["title"] ?></h2>
                                    <p class="description c-white margin-top-30 margin-bottom-30">
                                        <?php echo $announcement["description"] ?>
                                    </p>
                                    <?php
                                    $staff = [
                                        "link" => $announcement["link"],
                                        "cta" => $announcement["cta"],
                                    ];

                                    include($root . "include/element-staff-small.php");
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>