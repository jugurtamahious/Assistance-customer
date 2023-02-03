$form = document.querySelector(".form");
$button = document.querySelector(".btn");
$modifié = document.querySelectorAll(".toto");



$button.addEventListener("click", function () {
  $form.classList.toggle("is_active");
  if ($button.innerHTML === "cancel") {
    $button.innerHTML = "nouvelle demande";
  } else {
    $button.innerHTML = "cancel";
  }
});

for (var i = 0; i < $modifié.length; i++) {
  $modifié[i].addEventListener("click", function () {
    console.log("toto");
    $form.classList.toggle("is_active");
    if ($button.innerHTML === "cancel") {
      $button.innerHTML = "nouvelle demande";
    } else {
      $button.innerHTML = "cancel";
    }
  });
}



