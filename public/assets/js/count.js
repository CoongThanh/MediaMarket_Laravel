
let check = document.getElementsByClassName("check-product-to-card");

$('input[type="checkbox"]').on("click", check_add_card);

let cost = 0;
let html_price = document.getElementById("price-select-item");

function uncheck() {
  $(".check-product-to-card").prop("checked", false);
}

function check_add_card() {
  if ($(this).prop("checked") == true) {
    cost = cost + Number($(this).val());
    html_price.innerHTML = `$${cost}`;
  } else {
    cost = cost - Number($(this).val());
    html_price.innerHTML = `$${cost}`;
  }
}

window.onbeforeunload = uncheck();
