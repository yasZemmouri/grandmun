<?php
    // To use $deadline and $now 
    include 'config.php';   
    // Navbar Links Variables
    $navbarLinks = array(
        "Home" => "index.php",
        "faq"=> "faq.php",
        "senegal project" => "senegal.php",
        'delegate guides' => "guide.php",
        "Committees"=> [
            "ecosoc" => "ecosoc.php",
            "spc 1" => "spc1.php",
            "spc 2" => "spc2.php",
            "HRC" => "hrc.php"
        ]
        );
    //Add the Apply link to the navbar if application is open
    if ($showApplicationLink){
        $navbarLinks['apply'] = 'apply.php';
    }
?>
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
                <!-- Navigation Links Insertion -->
                <ul>
                    <?php
                    foreach($navbarLinks as $title=>$url){
                        if(is_array($url)){
                            //Handle dropdown menu
                            echo '<li class="dropdown"><a href="javascript:void(0);"><span>Committees</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>';
                            echo '<ul>';
                            foreach($url as $subTitle => $subUrl){
                            echo "<li><a href=$subUrl> $subTitle </a></li>";
                            }
                            echo '</ul>';
                            echo '</li>';
                        } else{
                            $activeClass = (strpos($script_name, $url) !== false) ? 'class="active"': '';
                            echo "<li><a href=$url $activeClass> $title </a></li>";
                        }
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header><!-- End Header -->
    <!--54 lines-->