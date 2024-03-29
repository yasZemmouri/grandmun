<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$h1 = 'Frequently Asked Questions (FAQ)';
$h2 = '';
//Title
include_once "../includes/functions.php";
$title = generateTitle($h1, $h2);
//<HEAD>
include '../includes/head.php';
?> <!-- End Head -->

<body>
<?php include '../includes/navbar.php'; ?><!-- End Header -->
    <main id="faq">
        <!-- ======= FAQ ======= -->
        <section id="questions">
            <div class='container-xl'>
                <h1><?php echo $h1;?></h1>
                <h2>What do I wear? </h2>
                <p>In MUN, we like to look sharp, which is why here at GRANDMUN, we impose a dress code that you should
                    go by when on D-Day. For men : a <strong>business-type suit</strong>, preferably with a tie. For
                    women : anything from a formal suit to a <strong>formal dress or skirt topped with a
                        blazer</strong>. Please make sure you come looking presentable, while wearing something you're
                    comfortable with.</p>
                <h2>Should I bring my own lunch? </h2>
                <p>No, we don't insist on delegates bringing their own lunch on the day of the conference. There are
                    Boulangeries-Patisseries in Rue Royale, five minutes away from Notre-Dame du Grandchamp. You'll have
                    time to purchase something in one of them at lunch-time. For the Troisièmes joining us, you'll be
                    able to do the exact same thing, while being accompanied by your teacher.</p>
                <h2>Why do I need to pay to attend GRANDMUN ?</h2>
                <p>We understand why you ask yourselves this question. The GRANDMUN board has decided to impose a
                    <strong>financial participation</strong> of 12€ per delegate in order to help <strong>raise funds
                        for the Senegal project</strong>. The Senegal project is a <strong>charity</strong> put in place
                    by NDG, aiming to fly a few students to Senegal in the summer of 2023 to <strong>build a
                        library</strong> in the city of Pikine <!--what's Pikine-->. For more information about the
                    project and the reason we humbly impose a fee to your attendance, please refer to the <strong><a
                            href="senegal.php">explanatory video</a></strong> on the present website.
                    <!-- Link to the explanatory video about payements  -->
                </p>
                <h2>How to conduct efficient and useful research?</h2>
                <!-- this paragraph is too long -->
                <!-- add links for the research -->
                <p>Research can be a daunting task: there's so much information out there, in articles, websites, books.
                    What we recommend is carefully reading over the <strong>research reports</strong> the GRANDMUN board
                    has carefully uploaded for you on the present website; they are made to give you a head start into
                    collecting information in order to shape interesting and constructive arguments. To access the
                    research reports, simply click on the <strong>'Committees'</strong> link on the navigation bar,
                    where you will find a submenu for each topic. Within each topic page, you will be able to download a
                    research report. Next, we encourage you to go into deeper research about the different notions that
                    appear in the research reports. To do that, you can visit <strong>reputable websites</strong> that
                    specialize in history and geopolitics, but also <strong>crowd contributed websites</strong>, which
                    are also a great source of information if you cross verify the info you find on there. You are also
                    going to find very useful points on <strong>government websites</strong>, it be on your assigned
                    country's government website, on your rival's, or on your ally's. Visiting government owned websites
                    will show you first hand how the administration you are representing approaches the problems you
                    will debating about, which will help you speak on behalf of your country and not from your own
                    stance. <strong>Articles in paper newspapers</strong> are a valuable source of information as well.
                    Make sure to take a look into your parents' newspaper, it be daily French News (which also focuses
                    on pressing world issues) or papers who focus on a more globalized view of geopolitics. The subjects
                    we chose for this conference are present day issues that tend to change everyday; chances are you're
                    always going to find something interesting to read about. Last but not least, don't hesitate to
                    watch <strong>documentaries and videos from certified historians and politicians</strong>: sometimes
                    hearing an expert talk makes our understanding of a complicated issue a quicker process. </p>
                <p><strong>Have a blast researching!</strong></p>
                <h2>How do get to speaking in GRANDMUN if I'm new to MUN ?</h2>
                <p>We know that, among other things, public speaking is one of the hardest skills to acquire; but you
                    have to start somewhere ! Taking the mic during your first MUN conference is definitely an
                    accomplishment in itself. But how do you go about doing it?</p>
                <p>
                    <strong>The first tip </strong>we have for first timers is to <strong>start small</strong>. By that
                    we mean talking for very short periods of time; for instance : <strong>asking a Point of Information
                        (aka a question)</strong> when the Chair and the delegate who has the floor allow it. You can
                    take your time preparing it while the delegate who has the floor is delivering their speech. After
                    your first ever POI, you'll notice questions and speeches will seem much easier than they did
                    before. Gradually, you should take opportunities to speak in front of your committee: the more you
                    do it, the more it'll feel like a natural thing to do.
                </p>
                <p><strong>Remember: </strong>we are all here to have a good time and a productive debate. Don't let
                    experienced delegates intimidate you, because </strong>everyone's opinion matters!</strong></p>
            </div>
        </section>
    </main><!-- End Main -->
    <?php include '../includes/footer.php'; ?><!-- End Footer -->
    <!-- Vendor js file -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Main js File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>