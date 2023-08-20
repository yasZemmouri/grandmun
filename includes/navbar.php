<?php
    // To use $deadline and $now 
    include 'config.php';
    include_once 'functions.php';
    
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
        // 'apply' => 'apply.php'
    )

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
                   <?php
                   //This variable provides the complete URL of the current page.
                    // $current_url = $_SERVER['REQUEST_URI'];
                    //a superglobal variable that contains the virtual path of the current script file.
                    $script_name= $_SERVER['SCRIPT_NAME'];
                    
                ?>
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
                    <!-- This is a "ternary operator with alternative systax" (short if) you don't need echo and the html is clear and separated from the php  -->
                    <?php 
                        if ($showApplicationLink){
                            $activeClass = (strpos($script_name, 'apply.php') !== false) ? 'class="active"': '';
                            //single quote don't interpret variables inside them but double quotes do. If you do '<li> you should use the . operator
                            echo "<li><a href='apply.php' $activeClass>apply</a></li>";
                        }
                     ?>

             <!-- strpos() string position. returns string position or false if not found. if the position is 0 ==true is not going to work --> 
                    <?php
                        
                        // if($deadline > $now) {
                        //     if (strpos($script_name, 'apply.php') !== false) { echo '<li><a href="../pages/apply.php" class="active">apply</a></li>'; }
                        //     echo '<li><a href="../pages/apply.php">apply</a></li>';}
                    ?>
                    
                </ul>
            </nav>
        </div>
    </header><!-- End Header -->
    <!--54 lines-->