function validation() {
  let requester = document.getElementById("requester").value;
  let pickup = document.getElementById("pickup").value;
  let destination = document.getElementById("destination").value;
  let date = document.getElementById("date").value;
  let time = document.getElementById("time").value;

  let requesterError = document.getElementById("requesterError");
  let pickupError = document.getElementById("pickupError");
  let destinationError = document.getElementById("destinationError");
  let dateError = document.getElementById("dateError");
  let timeError = document.getElementById("timeError");

  requesterError.innerHTML = "";
  pickupError.innerHTML = "";
  destinationError.innerHTML = "";
  dateError.innerHTML = "";
  timeError.innerHTML = "";

  let error = 0;

  if (requester.trim() === "") {
    requesterError.innerHTML = "Please enter Requester Name.";
    error++;
  }

  if (pickup.trim() === "") {
    pickupError.innerHTML = "Please enter Pickup Location.";
    error++;
  }

  if (destination.trim() === "") {
    destinationError.innerHTML = "Please enter Destination.";
    error++;
  }

  if (date.trim() === "") {
    dateError.innerHTML = "Please select a Date.";
    error++;
  }

  if (time.trim() === "") {
    timeError.innerHTML = "Please select a Time.";
    error++;
  }

  if (error > 0) return false;

  return true;
}
