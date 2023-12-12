function validation() {
  let rating = document.getElementById("rating").value;
  let feedback = document.getElementById("feedback").value;
  let ratingError = document.getElementById("ratingError");
  let feedbackError = document.getElementById("feedbackError");

  ratingError.innerHTML = "";
  feedbackError.innerHTML = "";

  if (rating < 1 || rating > 5) {
    ratingError.innerHTML = "Rating must be between 1 and 5.";
    return false;
  }

  if (feedback.trim() === "") {
    feedbackError.innerHTML = "Please enter feedback.";
    return false;
  }

  return true;
}
