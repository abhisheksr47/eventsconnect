<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/user.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script/user.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Events Connect</title>
  </head>

<body>
  <!-- login_div -->
  <div id="overlay" onclick="close_div()"></div>
  <div id="login_div">
    <label id="close" class="material-icons" onclick="close_div()">close</label>
    <h1>Sign In !</h1>
    <label>to enjoy the full</label>
    <label>experience</label>
    <div class="entry_div">
      <label>Username</label>
      <input type="text" placeholder="" />
      <!-- <div><i class="material-icons">error</i><label>Incorrect username</label></div> -->
    </div>

    <div class="entry_div">
      <label>Password</label>
      <input type="text" placeholder="" />
      <!-- <div><i class="material-icons">error</i><label>Incorrect password</label></div> -->
    </div>

    <div class="media_login">
      <div class="login"><img src="images/google.png" alt="" />Google</div>
      <div class="login">
        <img src="images/facebook.png" alt="" />Facebook
      </div>
    </div>
    <button class="login_btn">Login</button>
    <div class="div">
      <label class="question1">Don't have an account ?</label>
      <a class="link1" onclick="sign_up()">Sign Up</a>
    </div>
  </div>

  <div id="signup_div">
    <label id="close" class="material-icons" onclick="close_div()">close</label>
    <h1>Sign Up !</h1>
    <label>to enjoy the full</label>
    <label>experience</label>

    <div class="select">
      <div>
        <input type="radio" id="club" name="type" value="user" checked />
          <label>User</label>
      </div>
      <div>
        <input type="radio" id="club" name="type" value="club" onclick="type()"/>
          <label>Club</label>
      </div>
    </div>

    <div class="entry_div">
      <input type="text" placeholder="username" />
      <!-- <div><i class="material-icons">error</i><label>Incorrect username</label></div> -->
    </div>

    <div class="entry_div">
      <input type="text" placeholder="password" />
      <!-- <div><i class="material-icons">error</i><label>Incorrect password</label></div> -->
    </div>

    <div class="entry_div">
      <input type="text" placeholder="confirm password" />
      <!-- <div><i class="material-icons">error</i><label>Incorrect password</label></div> -->
    </div>

    <button class="login_btn">Login</button>
    <div class="div">
      <label class="question1">Already have an account ?</label>
      <a class="link1" onclick="sign_in()">Sign In</a>
    </div>
  </div>

  <!-- bottom navbar-->
  <div id="bottom_nav_id" class="bottom_nav">
    <div class="icon" onclick="to_home();allfilter()">
      <i class="fa-solid fa-house"></i>
      <label>Home</label>
    </div>

    <div class="icon" onclick="focus_it()">
      <i class="fa-solid fa-magnifying-glass"></i>
      <label>Search</label>
    </div>

    <div class="icon">
      <i class="fa-solid fa-gear"></i>
      <label>Settings</label>
    </div>
  </div>

  <!-- main body -->
  <div id="main" class="main_body">
    <div id="header_id" class="header">
      <div class="header_items">
        <img class="logo" src="images/logo.png" alt="">
      </div>
      <div class="header_items">
        <button class="login_btn" onclick="sign_in()">
          <i class="material-symbols-outlined">person</i>Sign In
        </button>
        <a class="login_link" href="sign_in.html">
          <i class="material-icons">account_circle</i>
        </a>
      </div>
    </div>
    <!-- card container -->
    <div class="container">
        <div class="controls">
          <div id="search_div" class="search_box">
            <i class="material-symbols-outlined">search</i>
            <input id="search_id" type="text" placeholder="Search Events"/>
          </div>
          <div id="filter_wrapper_id" class="filter_wrapper">
            <i class="material-symbols-outlined">tune</i>
            <ul class="filter">
              <li onclick="allfilter()">All Events</li>
              <li onclick="filter('Cultural')">Cultural</li>
              <li onclick="filter('Technical')">Technical</li>
              <li onclick="filter('Academic')">Academic</li>
              <li onclick="filter('Social')">Social</li>
              <li onclick="filter('Sports')">Sports</li>
            </ul>
          </div>
        </div>
      
      <div id="feedid" class="feed" onclick="hide_sidebar()">

            
      

<script type="text/javascript">
  var oldContent = $("#feedid").html();
   $(document).ready(function() {
    $("#search_id").on("keyup", function() {
        var input = $(this).val();
        
        
        if (input !== "") {
            $.ajax({
                url: "php/livesearch.php",
                method: "POST",
                data: { input: input },
                success: function(data) {
                    $("#feedid").html(data);
                }
            });
        } else {
           
            $("#feedid").html(oldContent);
        }
    });
});

</script>
<script>
  function allfilter() {
    $('#feedid').html(oldContent);
  }

  function filter(category){
    $.ajax({
        url: 'php/filterhandler.php',
        type: 'GET',
        data: { arg: category },
        success: function(data) {
            $('#feedid').html(data);
        },
    });
}
    function valuetaken(ev_id,ev_name) {
        var card_id = "card_" + ev_id;
        
        document.getElementById(card_id).style.backgroundColor = "#ff8408";
        
    }
</script>
</body>
</html>


