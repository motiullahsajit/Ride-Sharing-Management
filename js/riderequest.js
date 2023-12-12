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

  if (requester.trim() === "") {
    requesterError.innerHTML = "Please enter Requester Name.";
    return false;
  }

  if (pickup.trim() === "") {
    pickupError.innerHTML = "Please enter Pickup Location.";
    return false;
  }

  if (destination.trim() === "") {
    destinationError.innerHTML = "Please enter Destination.";
    return false;
  }

  if (date.trim() === "") {
    dateError.innerHTML = "Please select a Date.";
    return false;
  }

  if (time.trim() === "") {
    timeError.innerHTML = "Please select a Time.";
    return false;
  }

  return true;
}
