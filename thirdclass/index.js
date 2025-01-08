$("#login").click(function () {
  var pas1 = $("#p1").val();
  var pas2 = $("#p2").val();

  if (pas1 != "" && pas2 != "") {
    if (pas1 == pas2) {
      alert("pass matches.");
    } else {
      alert("pass not matches.");
    }
  } else {
    alert("please enter your password.");
  }
});

$("#btn").click(function () {
  var name = $("#n").val();
  var newName = $("#nn").val();

  if (name != "" && newName != "") {
    if (name == newName) {
      alert("success.");
    } else {
      alert("not success.");
    }
  } else {
    alert("enter name.");
  }
});
