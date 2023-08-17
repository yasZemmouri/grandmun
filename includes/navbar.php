<header class="d-flex align-items-center">
        <div class="container-xl d-flex align-items-center justify-content-between">
            <a href="/">
                <h1>grandmun</h1>
            </a>
            <!-- what's mobile-nav-toggle class? -->
            <!-- mobile-nav-toggle is for javascript. I give it to nav-show and nav-hide so it allows me to put them both in one eventListner -->
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none  bi bi-x"></i>
            <nav class="navbar">
                   <?php
                    $current_url = $_SERVER['REQUEST_URI'];
                    //a superglobal variable that contains the virtual path of the current script file.
                    $script_name= $_SERVER['SCRIPT_NAME'];
                ?>
                <ul>
             <!-- strpos() string position. returns string position of false if not found -->
                <li><a href="/" <?php if (strpos($script_name, 'index.php') !== false) { echo 'class="active"'; } ?>>Home</a></li>
                <li><a href="faq.php" <?php if (strpos($current_url, 'faq.php') !== false) { echo 'class="active"'; } ?>>FAQ</a></li>
                <li><a href="senegal.php" <?php if (strpos($current_url, 'senegal.php') !== false) { echo 'class="active"'; } ?>>senegal project</a></li>
                <li><a href="guide.php" <?php if (strpos($current_url, 'guide.php') !== false) { echo 'class="active"'; } ?>>delegate guides</a></li>
                <li class="dropdown"><a href="javascript:void(0);"><span>Committees</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="ecosoc.php" <?php if (strpos($current_url, 'ecosoc.php') !== false) { echo 'class="active"'; } ?>>ECOSOC</a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li> -->
                            <li><a href="spc1.php" <?php if (strpos($current_url, 'spc1.php') !== false) { echo 'class="active"'; } ?>>SPC 1</a></li>
                            <li><a href="spc2.php" <?php if (strpos($current_url, 'spc2.php') !== false) { echo 'class="active"'; } ?>>SPC 2</a></li>
                            <li><a href="hrc.php" <?php if (strpos($current_url, 'hrc.php') !== false) { echo 'class="active"'; } ?>>HRC</a></li>
                        </ul>
                    </li>
                    <?php
                        $now = time();
                        $deadline = strtotime("2023-10-14 08:00:00");
                        if($deadline > $now) {
                            if (strpos($current_url, 'apply.php') !== false) { echo '<li><a href="apply.php" class="active">apply</a></li>'; }
                            echo '<li><a href="apply.php">apply</a></li>';}
                    ?>
                    
                </ul>
            </nav>
        </div>
    </header><!-- End Header -->