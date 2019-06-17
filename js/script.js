document.addEventListener('DOMContentLoaded', () => {

  type();

});

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
    document.getElementById("speed").innerHTML = "no sign up to test your speed";

  }
}


