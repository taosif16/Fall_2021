function AjaxFunction() {
  var fname = document.getElementById("fname").value;
  var ri = document.getElementById("ri").value;
  var designation = document.getElementById("designation").value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("message").innerHTML = this.responseText;
    } else {
      document.getElementById("message").innerHTML = this.status;
    }
  };
  xhttp.open(
    "POST",
    "/FTLabExam/control/searchcontrol.php?fname=" +
      fname +
      "&ri=" +
      ri +
      "&designation=" +
      designation,
    true
  );

  xhttp.send();
}
