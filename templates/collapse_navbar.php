<?php
    session_start();
?>
<a class="navbar-brand" href="index.html">
    <img src="images/badminton.png" alt="" />
    <span>
        Badminton
    </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  ">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href= <?php if(isset($_SESSION["id"])){echo '"Nation.html"';}else{echo '"login.html"';}?>> Nation</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href= <?php if(isset($_SESSION["id"])){echo '"Match.html"';}else{echo '"login.html"';}?>> Match </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href= <?php if(isset($_SESSION["id"])){echo '"Player.html"';}else{echo '"login.html"';}?>> Player </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href= <?php if(isset($_SESSION["id"])){echo '"Team.html"';}else{echo '"login.html"';}?>> Team </a>
        </li>
    </ul>
    <div class="user_option">
        <?php
            if(isset($_SESSION["id"])){
                // echo '<a class=\"nav-link\" href=\"javascript:\" onclick=\"hide1.style.display=hide1.style.display==\'none\'?\'\':\'none\'\">'.$_SESSION["name"].'</a>';
                // echo '<a class="nav-link" id="hide1" style="display:none" href="delete">';
                // echo '<a class="nav-link" id="hide1" style="display:none" href="logout.php"><span>Logout</span></a>'; 
                ?>
                <!-- <a href="javascript:" onclick="hide1.style.display=hide1.style.display=='none'?'':'none'"><?php echo $_SESSION["name"]?></a>
                <span id="hide1" ><a href="delete">Delete</a></span>
                <span id="hide1" ><a href="logout.php">Logout</a></span> -->
                <!-- <script>hide1.style.display='';
                        hide2.style.display='';</script> -->
                <a style="padding: 10px 15px;" href="javascript:" onclick="hide1.style.display=hide1.style.display=='none'?'':'none'; 
                hide2.style.display=hide2.style.display=='none'?'':'none'"> <?php echo $_SESSION["name"]?> </a>
                <span id="hide1" style="display:none"><a style="padding: 10px 15px;" href="delete.html"> Delete </a></span>
                <span id="hide2" style="display:none"><a style="padding: 10px 15px;" href="logout.php"> Logout </a></span>
                <!-- <a href="javascript:" onclick="hide1.style.display=hide1.style.display=='none'?'':'none'"><?php echo $_SESSION["name"]?></a>

                <span id="hide1" style="display:none ">Delete</span> -->
                

                

        <?php }else{
                echo '<a class="nav-link" href="login.html"><span>Login</span></a>';
            }
        ?>
        
        
        <!-- <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
        </form> -->
    </div>
</div>