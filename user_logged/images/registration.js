
function checkstatus() {
    
  var table = document.getElementById('mytable');
  var rows = table.rows;

 
  for (var i = 1; i < rows.length; i++) {
    var payment_status = rows[i].cells[5];

    console.log(payment_status.innerText);

    
    if (payment_status.innerText === "Success") {
      payment_status.style.color = "#059862";
    }

    if (payment_status.innerText === "Failed") {
      payment_status.style.color = "#fe0000";
    }
  }
}


window.onload = checkstatus;

