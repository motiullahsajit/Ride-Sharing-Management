function validation() {
  let issueType = document.getElementById("issue").value;
  let description = document.getElementById("description").value;

  let issueError = document.getElementById("issueError");
  let descriptionError = document.getElementById("descriptionError");

  issueError.innerHTML = "";
  descriptionError.innerHTML = "";

  if (issueType === "" || description === "") {
    if (issueType === "") {
      issueError.innerHTML = "Please enter the issue type.";
    }

    if (description === "") {
      descriptionError.innerHTML = "Please enter a description.";
    }

    return false;
  }

  return true;
}
