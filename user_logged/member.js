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




function flag1_sidebar() 
{
  let sidebar = document.getElementById('sidebarid');
  sidebar.style.display = "flex";
  sidebar.style.position = "absolute";
 
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


function flag1_description() {
  let description = document.getElementById("desc");
  description.style.display = "flex"
}

let flag1 = false
function notification(){
  let panel = document.getElementById("side_panel");
  let feed = document.getElementById("feedid")
  let control = document.getElementById("controlid")
  let header = document.getElementById("headerid");
  let messages = document.getElementById("listid");
  
  
  flag1 = !flag1
  panel.style.marginRight = `${flag1 ? '0': '-300px'}`;
  feed.style.padding = `${flag1 ? '25px': '25px 80px'}`;
  control.style.padding = `${flag1 ? '0 25px': '0px 80px'}`;
  header.style.padding = `${flag1 ? '0 25px': '0px 80px'}`;
  messages.style.transform = `${flag1 ? 'translateY(0%)':'none'}`;
  messages.style.transition = "all 0.5s ease-in-out";
  messages.scrollTop = 0; 
  
  setTimeout(()=> {
    if(flag1 == false){
      messages.style.transform = "translateY(-101%)";
      messages.style.transition = "none";
    }
  }
  ,500);
}

// function profile(){

//   let notification = document.getElementById("notification");
//   notification.style.display = "none";
// }

let flag2 = false
function change_layout(){

  
  let feed = document.getElementById('feedid');
  let grid = document.getElementById('grid');
  let list = document.getElementById('list');

  flag2 = !flag2
  feed.style.gridTemplateColumns = `${flag2 ? 'repeat(auto-fit, minmax(100%, 1fr))': 'repeat(auto-fit, minmax(370px, 1fr))'}`;
  list.style.transform = `${flag2 ? 'scale(1)': 'scale(0)'}`;
  grid.style.transform = `${flag2 ? 'scale(0)': 'scale(1)'}`;


}

let flag3 = false
function save(){

  let saved = document.getElementById('saved');
  let save = document.getElementById('save');

  flag3 = !flag3
  save.style.transform = `${flag3 ? 'scale(1)': 'scale(0)'}`;
  saved.style.transform = `${flag3 ? 'scale(0)': 'scale(1)'}`;


}
  

function addevent(){
  let addpage = document.getElementById("addpage_id");
  
}

function reply()
{

  let reply = document.getElementById("reply")
  reply.style.transform = "scale(1)";
  
  let overlay = document.getElementById("overlay") 
  overlay.style.transform = "scale(1)";
}

function close_reply()
{

  let reply = document.getElementById("reply")
  reply.style.transform = "scale(0)";
  
  let overlay = document.getElementById("overlay") 
  overlay.style.transform = "scale(0)";
}










window.onload = (event) => {

  document.querySelector('#notificationIcon').addEventListener('click',()=>{
  notification()
})

document.querySelector('#clsbtn').addEventListener('click',()=>{
  notification()
})

document.querySelector('#user').addEventListener('click',()=>{
  profile()
})

document.querySelector('#layout').addEventListener('click',()=>{
  change_layout()
})

addevent()

document.querySelector('#saved').addEventListener('click',()=>{
  save()
})

document.querySelector('#save').addEventListener('click',()=>{
  save()
})

let message = document.querySelectorAll('.messages');
message.forEach((element) => {
  element.addEventListener('click', () => {
    reply()
  });
});


document.querySelector('#close').addEventListener('click',()=>{
  close_reply()
})

set_user_icon()
};


document.addEventListener("DOMContentLoaded", function() {
  let categories = document.querySelectorAll(".category");

  categories.forEach(function(category) {
      category.addEventListener("click", function() {
          categories.forEach(function(cat) {
              cat.classList.remove("active");
          });
          this.classList.add("active");
      });
  });
});


let circles = document.querySelectorAll('.material-symbols-outlined');

circles.forEach(element => {
    element.addEventListener('click', () => {


      let this_colour = element.style.color;

      console.log(this_colour);

      const root = document.documentElement;

      root.style.setProperty('--accent_colour', 'yellow');
      
    });
});


function set_user_icon() {
  let names = document.querySelectorAll('.name');
  let user_icons = document.querySelectorAll('.user_icon');

  for (let i = 0; i < names.length; i++) {
    let this_text = names[i].innerText;

    if (i < user_icons.length) {
      user_icons[i].innerText = this_text[0];
    }
  }
}











