function showDiv() {
  document.getElementById('welcomeDiv').style.display = "flex";
  let card = document.getElementsByClassName('card');
  for(let i=0;i<=card.length;i++){
    card[i].style.display="none";
  }
}

 function closeDiv() {
  document.getElementById('welcomeDiv').style.display = "none";
  let card = document.getElementsByClassName('card');
  for(let i=0;i<=card.length;i++){
    card[i].style.display="flex";
  }
}

function view() {
  let feed = document.getElementById('feedid');
  if (feed.style.gridTemplateColumns === "repeat(auto-fit, minmax(370px, 1fr))") 
  {
    feed.style.gridTemplateColumns = "repeat(1, 1fr)";
  }
  else
  {
    feed.style.gridTemplateColumns = "repeat(auto-fit, minmax(370px, 1fr))";
  } 
}




function show_sidebar() 
{
  let sidebar = document.getElementById('sidebarid');
  sidebar.style.display = "flex";
  sidebar.style.position = "fixed";
 
}

function hide_sidebar()
{
  let sidebar = document.getElementById('sidebarid');
  sidebar.style.display = "none";
}

window.addEventListener("load",function() {
  setTimeout(function(){
      window.scrollTo(0, 1);
  }, 0);
});



function to_home() {

  let header = document.getElementById("header_id");
  header.style.display = "flex";

  let searchbox = document.getElementById("search_div");
  searchbox.style.display = "none";

  let filters = document.getElementById("filter_wrapper_id");
  filters.style.display = "flex";

  let home = document.getElementById("home");
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; 
}


function hide()
{
  let item = document.getElementById("main")
  item.style.transform = "scale(1)"
}


function sign_in()
{
  let signup_div = document.getElementById("signup_div")
  signup_div.style.transform = "scale(0)";

  let login_div = document.getElementById("login_div")
  login_div.style.transform = "scale(1)";
  
  let overlay = document.getElementById("overlay") 
  overlay.style.transform = "scale(1)";
}

function sign_up()
{
  let login_div = document.getElementById("login_div")
  login_div.style.transform = "scale(0)";

  let signup_div = document.getElementById("signup_div")
  signup_div.style.transform = "scale(1)";
}


function close_div(){
  let login_div = document.getElementById("login_div")
  login_div.style.transform = "scale(0)";
  
  let overlay = document.getElementById("overlay")
  overlay.style.transform = "scale(0)";

  let signup_div = document.getElementById("signup_div")
  signup_div.style.transform = "scale(0)";
}


function type(){
  var radios = document.getElementsByName('type');

  // Add a change event listener to each radio button
  for(let i = 0; i < radios.length; i++) {
      radios[i].addEventListener('change', function() {
          // Check if the selected value is 'male'
          if(this.value === 'club') {
              // document.getElementById('result').textContent = 'Eligible';
              document.getElementById("signup_div").style.backgroundColor = "#000000"
          }
      });
  }
}


function show_description() {
  let description = document.getElementById("desc");
  description.style.display = "flex"
}

function focus_it() {

  let header = document.getElementById("header_id");
  header.style.display = "none";

  let filters = document.getElementById("filter_wrapper_id");
  filters.style.display = "none";

  let searchbox = document.getElementById("search_div");
  searchbox.style.display = "flex";

  setTimeout(()=> {
    document.getElementById("search_id").focus();
  }
  ,300);
}

console.log("haai anand");







