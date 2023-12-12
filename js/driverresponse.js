function validation() {
  let acceptRadio = document.getElementById("accept");
  let declineRadio = document.getElementById("decline");
  let statusError = document.getElementById("statusError");

  statusError.innerHTML = "";

  if (!acceptRadio.checked && !declineRadio.checked) {
    statusError.innerHTML = "Please select a response.";
    return false;
  }

  return true;
}
