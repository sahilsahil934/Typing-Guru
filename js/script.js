// After loading page call type
document.addEventListener('DOMContentLoaded', () => {
  
  if (document.getElementById('invisible')) {
    type();
  }

});


// signup form validation
if (document.getElementById('signupform')) {
  let form = document.getElementById('signupform');

  form.onsubmit = function() {

    if (form.fname.value == "") {
      alert('First name is Missing');
      return false;
    }
    else if (form.lname.value == "") {
      alert('Last name is Missing');
      return false;
    }
    else if (form.email.value == "") {
      alert('Email is Missing');
      return false;
    }
    else if (form.password.value == "") {
      alert('Password is Missing');
      return false;
    }
    else if (form.password.value != form.confirmation.value) {
      alert('Password doesn\'t Match');
      return false;
    }
    else if (form.age.value == "") {
      alert('Age is Missing');
      return false;
    }
    else if (form.country.value == "") {
      alert('Country is Missing');
      return false;
    }
  }
}

// login form validation

if (document.getElementById('loginform')) {
  let loginForm = document.getElementById('loginform');

  loginForm.onsubmit = function() {

    if (loginForm.email.value == "") {
      alert('E-mail is Missing');
      return false;
    }
    else if (loginForm.password.value == ""){
      alert('Password is Missing');
      return false;
    }
  }
}


// first page printing
var i = 0;
var txt = "TYPING LEARNER";
var speed = 190;

function type() {
  if (i < txt.length) {
      document.getElementById("invisible").innerHTML += txt.charAt(i);
      i++;
      setTimeout(type, speed);
  }
  else {
    i = 0;
    speed = 50;
    improve();
  }
}

var txt1 = "Improve your typing speed";

function improve() {

  if (i < txt1.length) {
    document.getElementById("improve").innerHTML += txt1.charAt(i);
    i++;
    setTimeout(improve, speed);
  }
  else {
    document.getElementById("speed").innerHTML = "No Sign Up to test your speed";

  }
}

document.getElementById('edit-profile').onclick = function() {

  hide('detail');
  show('edit');
} 

// Function to change display property to block.
function show(Id){
  document.getElementById(Id).style.display = "block";
}

// Function to change display property to none.
function hide(Id){
  document.getElementById(Id).style.display = "none";
}

document.getElementById('change-password').onclick = function() {

  hide('detail');
  show('edit-password');
}

document.getElementById('edit-change-password').onclick = function() {

  hide('edit');
  show('edit-password');
}



