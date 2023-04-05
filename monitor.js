function monitor() {
  // Get the URL to monitor from the form
  var url = document.getElementById("url").value;

  // Set up the regular expression to extract the relevant information
  var regex = /<tag>(.*?)<\/tag>/;

  // Use fetch to get the contents of the URL
  fetch(url)
    .then(response => response.text())
    .then(content => {
      // Extract the relevant information from the content using the regex
      var result = regex.exec(content)[1];

      // Display the result in the HTML output section
      document.getElementById("output").innerHTML = result;

      // Store the result in localStorage for later viewing or analysis
      localStorage.setItem("result", result);
    });
}

// Call the monitor function every 3 minutes
setInterval(monitor, 180000);
