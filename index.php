<!DOCTYPE html>
<html lang="en">

<head>
    <title>Grandmun - index</title>
    <!--===== Meta =====-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Experience the diplomatic work of UN delegates and improve your communication skills at GRANDMUN - the first official Model United Nations conference hosted by Lycée Notre-Dame du Grandchamp. This student-led, non-profit conference takes place annually in Versailles, offering a memorable day of debating and a chance to broaden your horizons.">
    <!--===== Favicons =====-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon-32.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon-120.png">
    <!--===== Fonts =====-->
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!--===== Style =====-->
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="assets/css/mycss.css" rel="stylesheet">
    <!-- countdown2 dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--<script src="jquery.min.js">
    </script>--><!--<script src="jquery-ui/jquery-ui.js"></script>-->
    <script src="assets/vendor/TweenMax.min.js"></script>
    <script src="assets/vendor/TimelineMax.min.js"></script>
</head>

<body>
<?php include 'includes/navbar.php'; ?><!-- End Header -->
    <!---------------- Hero Section ------------------->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="info d-flex align-items-center">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2><span>GRANDMUN</span></h2>
                    <!-- <h3 id="countdown">
                        <span id="days">00</span> : <span id="hours">00</span> : <span id="minutes">00</span> : <span
                            id="seconds">00</span>
                    </h3> -->
                    <?php
                        // $now = time();
                        // $deadline = strtotime("2023-04-14 08:00:00");
                        if($deadline > $now){
                            //converting unix timestamp in secods to millisoconds Time()
                            echo '<script>var deadline = ' . $deadline * 1000 . '</script>';
                            echo '
                            <script src="assets/js/countdown.js"></script>
                            <div class="wrap">
                        <div class="countdown clearfix">
                            <!-- DIAS -->
                            <div class="bloc-time days" data-init-value="7">
                                <h4 class="count-title">Days</h4>
                                <div class="figure days days-1">
                                    <span class="top">-</span>
                                    <span class="top-back">
                                        <span>-</span>
                                    </span>
                                    <span class="bottom">-</span>
                                    <span class="bottom-back">
                                        <span>-</span>
                                    </span>
                                </div>
                                <div class="figure days days-2">
                                    <span class="top">-</span>
                                    <span class="top-back">
                                        <span>-</span>
                                    </span>
                                    <span class="bottom">-</span>
                                    <span class="bottom-back">
                                        <span>-</span>
                                    </span>
                                </div>
                            </div>
                            <!-- HORAS -->
                            <div class="bloc-time hours" data-init-value="23">
                                <span class="count-title">Hours</span>
                                <div class="figure hours hours-1">
                                    <span class="top">-</span>
                                    <span class="top-back">
                                        <span>-</span>
                                    </span>
                                    <span class="bottom">-</span>
                                    <span class="bottom-back">
                                        <span>-</span>
                                    </span>
                                </div>
                                <div class="figure hours hours-2">
                                    <span class="top">-</span>
                                    <span class="top-back">
                                        <span>-</span>
                                    </span>
                                    <span class="bottom">-</span>
                                    <span class="bottom-back">
                                        <span>-</span>
                                    </span>
                                </div>
                            </div>
                            <!-- MINUTOS -->
                            <div class="bloc-time min" data-init-value="0">
                                <span class="count-title">Minutes</span>
                                <div class="figure min min-1">
                                    <span class="top">-</span>
                                    <span class="top-back">
                                        <span>-</span>
                                    </span>
                                    <span class="bottom">-</span>
                                    <span class="bottom-back">
                                        <span>-</span>
                                    </span>
                                </div>
                                <div class="figure min min-2">
                                    <span class="top">-</span>
                                    <span class="top-back">
                                        <span>-</span>
                                    </span>
                                    <span class="bottom">-</span>
                                    <span class="bottom-back">
                                        <span>-</span>
                                    </span>
                                </div>
                            </div>
                            <!-- SEGUNDOS -->
                            <div class="bloc-time sec" data-init-value="0">
                                <span class="count-title">Seconds</span>
                                <div class="figure sec sec-1">
                                    <span class="top">-</span>
                                    <span class="top-back">
                                        <span>-</span>
                                    </span>
                                    <span class="bottom">-</span>
                                    <span class="bottom-back">
                                        <span>-</span>
                                    </span>
                                </div>
                                <div class="figure sec sec-2">
                                    <span class="top">-</span>
                                    <span class="top-back">
                                        <span>-</span>
                                    </span>
                                    <span class="bottom">-</span>
                                    <span class="bottom-back">
                                        <span>-</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                                <p><a href="apply.php" class="all-btn-link btn-apply">Apply</a></p>';
                        }
                    ?>
                    
                    
                </div>
            </div>
        </div>
    </section>
    <main>
        <!-- ======= Invitation ======= -->
        <section id="invitation">
            <div class='container-xl'>
                <div class="invitation-container">
                    <h2>Coexisting in Harmony : Navigating a Multifaceted World</h2>
                    <h3>We are delighted to announce that Notre Dame du Grandchamp's MUN club will be hosting a
                        conference on the <span>14th of April 2023, from 8am to 6pm.</span> </h3>
                    <p> Participants in selected committees at the 1st Session of Grandchamp Model United Nations
                        (GRANDMUN) will debate the following topics: </p>
                    <ul>
                        <li><strong>Countering unemployment caused by automation (ECOSOC)</strong></li>
                        <li><strong>The militarization of artificial intelligence (Special Conference 1)</strong> </li>
                        <li><strong>Confirming the sovereignty of former Soviet states (Special Conference 2)</strong>
                        </li>
                        <li><strong>Resolving issues of statelessness by addressing discriminatory practices
                                (HRC)</strong></li>
                    </ul>
                </div>
                <div class="lycee-logo">
                    <img src="assets/img/Logo%20NDDG%20V%20rvb%2072%20dpi%20(1).png"
                        alt="Notre-Dame du Grandchamp Logo">
                </div>
            </div>
        </section>
        <!-- ======= Who we are ======= -->
        <section id='we'>
            <div class='container-xl'>
                <h2>Who We Are?</h2>
                <p>GRANDMUN is the <strong>first ever official Model United Nations conference</strong> hosted by the
                    <strong><a href="https://www.nd-grandchamp.fr/" target="_blank"
                            title="Visit Lycée Notre-Dame website"> Lycée Notre-Dame du Grandchamp</a></strong>. From
                    the very beginning of this project to now, our board of directors, Secretary Generals, and student
                    officers have been hard at work to provide you with a memorable day of debating. GRANDMUN is a
                    <strong>student-led, non-profit conference</strong>, hosted annually in Versailles. As per the MUN
                    (Model United Nations) format, this conference is a simulation of the proceedings within the United
                    Nations, giving students the opportunity to experience the diplomatic work of UN delegates,
                    ameliorate their communication skills, and broaden their horizons.</p>
                <p>Anyone interested in joining is welcome to participate given they are between <strong>14 and 19 years
                        old</strong>, and <strong>speak English fluently</strong>.</p>
            </div>
        </section>
        <!-- ======= Guest ======= -->
        <section id="guest">
            <div class='container-xl'>
                <h2>Guest Speakers</h2>
                <h3>Ambassador Carmelo Inguanez</h3>
                <p>After graduating from the universities of Malta, Oxford, and Bruxelles, His Excellency Mr. Inguanez
                    started what was to become a busy and successful career as a diplomat for Malta. In the United
                    Nations Organization, H. E. Mr. Inguanez worked for the UN Organization for Food and Agriculture
                    from 2011 and was named permanent representative of the Maltese Republic at the UN in 2016. H. E.
                    was appointed ambassador to Russia (2009-2011), to Italy (2011-2013), to Tunisia (2013-2016) and to
                    France (since december of 2019). Mr. Inguanez also played a role in the integration of Malta into
                    the European Union, by holding the position of Coordinator of foreign relations with the EU during
                    negotiations Malta’s entry in the union.</p>
                <p>We have had the immense honor to be able to interview His Excellency Mr. Carmelo Inguanez at the
                    Maltese Embassy in Paris within the framework of GRANDMUN 2023. This inspiring interview will be
                    broadcasted during the conference on April 14th.</p>
                <p>We would like to thank H.E. Mr. Inguanez for welcoming Amaury Michaux (videographer and
                    photographer), James Rebiscoul (delegate of the USA in SPC2) and Marine (Co-Secretary General) at
                    the Malta Embassy for this insightful talk. The GRANDMUN board will forever be grateful for this
                    amazing opportunity.</p>
                <h3>His Excellency Mister Diégo Colas</h3>
                <p>H. E. Mr. Diégo Colas has dedicated his whole career to representing France abroad and taking care of
                    foreign affairs within the French government. After working in European Affairs for the Foreign
                    Minister’s Cabinet, H. E. Mr. Colas was appointed advisor at the French Embassy in London
                    (2004-2008) and at the French Embassy in Algeria (2008-2012). Then, from 2016 to 2019, Mr. Colas
                    held the position of judicial affairs at the Ministry for Foreign Affairs, before being named
                    Ambassador to Georgia, in August of 2019.</p>
                <p>Mr. Colas studied at Georgetown University, Science Po Paris and at the Ecole Nationale de
                    l’Administration (ENA). He was also a French Air Force Reserves officer, earlier on in his career.
                </p>
                <p>There is no way the GRANDMUN board could thank His Excellency Mr. Colas for accepting our invitation
                    to come and speak at our event about the sovereignty of former Soviet states. His many years of
                    experience in international relations and his interest for Eastern European countries will surely
                    make for an enlightening speech.</p>
            </div>
        </section>
        <!-- ======= SPC1 ======= -->
        <!-- ======= Committees ======= -->
        <section id="committees">
            <div class='container-xl'>
                <h2>Committees</h2>
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url(assets/img/pexels-kindel-media-9028921.webp);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <a href="spc1php">
                                            <h3 class="card-title"> Special Conference 1 </h3>
                                        </a>
                                        <p>Artificial Intelligence (AI) has the potential to improve the health and
                                            well-being of individuals, communities, and states. However, certain uses of
                                            AI could also undermine international peace and security by, raising
                                            concerns about safety and security of the technology, accelerating the pace
                                            of armed conflicts, or loosening human control over the means of war. How
                                            can we, as delegates, mitigate the potential catastrophic effects of these
                                            state-of-the-art weapons?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url(assets/img/fountain-of-friendship-of-peoples-1630446_1920.webp);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <a href="spc2php">
                                            <h3 class="card-title"> Special Conference 2</h3>
                                        </a>
                                        <p>The Soviet Union was dissolved more than 30 years ago. In its wake, the Union
                                            of Soviet Socialist Republics (USSR), produced 15 sovereign states. These
                                            states included: Armenia, Azerbaijan, Belarus, Estonia, Georgia, Kazakhstan,
                                            Kyrgyzstan, Latvia, Lithuania, Moldova, Russia, Tajikistan, Turkmenistan,
                                            Ukraine, and Uzbekistan. Each of these countries is now self-governed and is
                                            internationally recognized as a sovereign nation. However, recently events
                                            have transpired that potentially threaten peace in the region, and the right
                                            to autonomy of former Soviet republics. Is a peaceful solution between
                                            conflicting former Soviet States conceivable?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/AI_blog.webp);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <a href="ecosocphp">
                                            <h3 class="card-title"> Economic and Social Council </h3>
                                        </a>
                                        <p>With the rapid technological advancement of recent years, computers are
                                            increasingly encroaching on domains that were previously considered
                                            exclusively human. The astonishing progress in such areas as artificial
                                            intelligence (AI), robotics, 3D printing and genetics has enabled computers
                                            to perform the tasks of architects, medical doctors, music composers and
                                            even a 16th century Dutch master of painting. This is furthermore made
                                            unsettling by recently unveiled world population trends. Latest UN DESA data
                                            show that, by 2050, our population is expected to reach 9.8 billion people,
                                            over 6 billion of whom will be of working age. Meanwhile, we are already
                                            struggling with finding decent employment for 71 million young people
                                            worldwide.</p>
                                        <p> It is easy to see why new technologies are increasingly viewed as a major
                                            threat to labour markets. Some estimates even claim that a staggering 80 per
                                            cent of jobs run the risk of being automated in the coming decades.</p>
                                        <p> Nearly every day brings news of remarkable feats achieved by computers or
                                            robots, and with them a gnawing question: Will machines edge us out of brain
                                            jobs?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url(assets/img/pexels-ahmed-akacha-6691665.webp);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <a href="hrcphp">
                                            <h3 class="card-title">HRC</h3>
                                        </a>
                                        <p>The issue of statelessness is usually portrayed as an "invisible problem" in
                                            today's world, since most of the people take membership of a State for
                                            granted. More than 10 million individuals in all regions of the world are
                                            stateless, which means that they are not considered as nationals by any
                                            state under the operation of its law. Most of the time, and so as to
                                            temporarily cease the chaotic procedures and vanish proof of those groups,
                                            stateless persons are being registered as persons of "unknown nationality"
                                            or "non-citizens". This phenomenon comprises violation of one fundamental
                                            right protected under the Universal Declaration of Human Rights which
                                            affirms that "everyone has the right to a nationality". As a result,
                                            stateless people are dealing with issues such as lack of education,
                                            healthcare and employment, amenities that all nationalities provide on a
                                            daily basis. Will these people ever manage to find a place in this world?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                </div>
            </div>
        </section>
        <!-- <section id="spc1">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url(assets/img/AI-in-higher-education.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h2>Special Conference 1</h2>
                        <p>Artificial Intelligence (AI) has the potential to improve the health and well-being of
                            individuals, communities, and states. However, certain uses of AI could also undermine
                            international peace and security by, raising concerns about safety and security of the
                            technology, accelerating the pace of armed conflicts, or loosening human control over the
                            means of war. How can we, as delegates, mitigate the potential catastrophic effects of these
                            state-of-the-art weapons?</p>
                    </div>
                </div>
            </div>
        </section>--><!--End SPC1 Section-->
        <!-- ======= SPC2 ======= -->
        <!--<section id="spc2">
            <div class='container-xl'>
                <h2>Special Conference 2</h2>
                <p>The Soviet Union was dissolved more than 30 years ago. In its wake, the Union of Soviet Socialist
                    Republics (USSR), produced 15 sovereign states. These states included: Armenia, Azerbaijan, Belarus,
                    Estonia, Georgia, Kazakhstan, Kyrgyzstan, Latvia, Lithuania, Moldova, Russia, Tajikistan,
                    Turkmenistan, Ukraine, and Uzbekistan. Each of these countries is now self-governed and is
                    internationally recognized as a sovereign nation. However, recently events have transpired that
                    potentially threaten peace in the region, and the right to autonomy of former Soviet republics. Is a
                    peaceful solution between conflicting former Soviet States conceivable? </p>
            </div>
        </section>--><!--End SPC2 Section-->
        <!-- ======= ESC ======= -->
        <!--<section id="ecosoc">
            <div class='container-xl'>
                <h2>Economic and Social Council</h2>
                <p>With the rapid technological advancement of recent years, computers are increasingly encroaching on
                    domains that were previously considered exclusively human. The astonishing progress in such areas as
                    artificial intelligence (AI), robotics, 3D printing and genetics has enabled computers to perform
                    the tasks of architects, medical doctors, music composers and even a 16th century Dutch master of
                    painting. This is furthermore made unsettling by recently unveiled world population trends. Latest
                    UN DESA data show that, by 2050, our population is expected to reach 9.8 billion people, over 6
                    billion of whom will be of working age. Meanwhile, we are already struggling with finding decent
                    employment for 71 million young people worldwide. It is easy to see why new technologies are
                    increasingly viewed as a major threat to labour markets. Some estimates even claim that a staggering
                    80 per cent of jobs run the risk of being automated in the coming decades. Nearly every day brings
                    news of remarkable feats achieved by computers or robots, and with them a gnawing question: Will
                    machines edge us out of brain jobs?</p>
            </div>
        </section>End ECS Section -->
    </main><!-- End Main -->
    <?php include 'includes/footer.php'; ?><!-- End Footer -->
    <!-- Vendor js file -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Main js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>