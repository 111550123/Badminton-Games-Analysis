<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  ">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="about.html"> About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Match.html">Match </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Player.html"> Player </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Team.html"> Team </a>
        </li>
    </ul>
    <div class="user_option">
        <?php
            session_start();
            if(isset($_SESSION["id"])){
                echo '<a class="text"><span>'.$_SESSION["name"].'</span></a>';
                echo '<a class="nav-link" href="logout.php"><span>Logout</span></a>';
            }else{
                echo '<a class="nav-link" href="login.html"><span>Login</span></a>';
            }
        ?>
        
        
        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
        </form>
    </div>
</div>