function validation() {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var age = document.getElementById("age").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var file = document.getElementById("file").value;

  if (fname == "" || fname.length < 5) {
    document.getElementById("error").innerHTML = "Please fill out first name";
    return false;
  }

  if (lname == "" || lname.length < 5) {
    document.getElementById("error").innerHTML = "Please fill out last name";
    return false;
  }

  if (age == "") {
    document.getElementById("error").innerHTML = "Please fill out age";
    return false;
  }

  if (
    document.getElementById("designation").checked == false &&
    document.getElementById("designation2").checked == false &&
    document.getElementById("designation3").checked == false
  ) {
    document.getElementById("error").innerHTML =
      "Please select any radio button";
    return false;
  }

  if (email == "") {
    document.getElementById("error").innerHTML = "Please fill out email";
  }

  if (password == "" || password.length < 8) {
    document.getElementById("error").innerHTML = "Please fill out password";
    return false;
  }

  if (file == "") {
    document.getElementById("error").innerHTML = "Please fill out file";
    return false;
  } else {
    document.getElementById("error").innerHTML = "";
    document.getElementById("ffname").innerHTML = fname;
    document.getElementById("llname").innerHTML = lname;
    document.getElementById("aage").innerHTML = age;
    document.getElementById("ddesignation").innerHTML = designation1;
    document.getElementById("eemail").innerHTML = email;
    document.getElementById("ppassword").innerHTML = password;
    document.getElementById("ffile").innerHTML = file;
    return false;
  }
}
