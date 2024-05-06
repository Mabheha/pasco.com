document.addEventListener("DOMContentLoaded", function() {
    // Add click event listener to the "Are you Hackered?" button
    var button = document.querySelector(".hero button");
    button.addEventListener("click", function() {
      alert("Oops! Looks like you've been hacked!");
    });
  });
  document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    displaySuccessMessage(); // Call function to display success message
});

function displaySuccessMessage() {
    var successDiv = document.getElementById("successMessage");
    successDiv.style.display = "block"; // Display the success message
    setTimeout(function() {
        successDiv.style.display = "none"; // Hide the success message after 3 seconds
    }, 3000);
}
