<form onsubmit="return fetch();">
    <h1>SEARCH FOR USERS</h1>
    <input type="text" id="search" required />
    <input type="submit" value="Search" />
</form>


<div id="results"></div>
<div id="result1"></div>
<div id="result2"></div>

<script>
function fetch() {
    //  GET SEARCH TERM
    var data = new FormData();
    data.append('search', document.getElementById("search").value);
    data.append('ajax', 1);

    // AJAX SEARCH REQUEST
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "search.php");
    xhr.onload = function() {
        var results = JSON.parse(this.response);
        wrapper = document.getElementById("results");
        if (results.length > 0) {
            wrapper.innerHTML = "";
            for (let res of results) {
                let line = document.createElement("div");
                line.innerHTML = `${res['first_name']} - ${res['email']}`;

                wrapper.appendChild(line);
            }
        } else {
            wrapper.innerHTML = "No results found";
        }
    };
    xhr.send(data);
    return false;
}

var yhr = new XMLHttpRequest();
yhr.open('POST', "search.php");
yhr.onload = function() {
    var result1 = JSON.parse(this.response);
    if (result1.length > 0) {
        wrapper.innerHTML = "";
        for (let res1 of result1) {
            let line = document.createElement("div");

            line.innerHTML = `${res1['skill_name']} - ${res1['skill_owner']}`;

            wrapper.appendChild(line);
        }
    } else {
        wrapper.innerHTML = "No results found";
    }
};
yhr.send(data);
return false;


var zhr = new XMLHttpRequest();
zhr.open('POST', "search.php");
zhr.onload = function() {
    var result2 = JSON.parse(this.response);
    if (result2.length > 0) {
        wrapper.innerHTML = "";
        for (let res2 of result2) {
            let line = document.createElement("div");

            line.innerHTML = `${res2['title']} - ${res2['owner']}`;
            wrapper.appendChild(line);
        }
    } else {
        wrapper.innerHTML = "No results found";
    }
};
zhr.send(data);
return false;
</script>