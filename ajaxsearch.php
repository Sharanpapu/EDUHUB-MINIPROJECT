<form onsubmit="return fetch();">
  <h1>SEARCH FOR USERS</h1>
  <input type="text" id="search" required/>
  <input type="submit" value="Search"/>
</form>


<div id="results"></div>

<script>
function fetch() {
  //  GET SEARCH TERM
  var data = new FormData();
  data.append('search', document.getElementById("search").value);
  data.append('ajax', 1);
 
  // AJAX SEARCH REQUEST
  var xhr = new XMLHttpRequest();
  xhr.open('POST', "search.php");
  xhr.onload = function () {
    var results = JSON.parse(this.response),
    wrapper = document.getElementById("results");
    if (results.length > 0) {
      wrapper.innerHTML = "";
      for (let res of results) {
        let line = document.createElement("div");
        line.innerHTML = `${res['first_name']} - ${res['email']}`;
        wrapper.appendChild(line);
      }
    } else { wrapper.innerHTML = "No results found"; }
  };
  xhr.send(data);
  return false;
}
</script>