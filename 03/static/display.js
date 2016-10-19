function populate() {
    var target = document.getElementById("mytable");
    var json_data = JSON.parse(HTTPGet("http://162.105.146.180:8096/cgi-bin/display.pl"));
    for (index in json_data) {
        var newrow = target.insertRow(-1);
        var select_cell = newrow.insertCell(-1);
        var name_cell = newrow.insertCell(-1);
        var age_cell = newrow.insertCell(-1);
        var gender_cell = newrow.insertCell(-1);
        var email_cell = newrow.insertCell(-1);
        select_cell.innerHTML = '<input type="checkbox" name="select" value="' + index.toString() + '">'
        name_cell.innerHTML = json_data[index]["name"];
        age_cell.innerHTML = json_data[index]["age"];
        gender_cell.innerHTML = json_data[index]["gender"];
        email_cell.innerHTML = json_data[index]["email"];
    }
}

function HTTPGet(url) {
    var HTTPReq = new XMLHttpRequest();
    HTTPReq.open("GET", url, false);
    HTTPReq.send(null);
    return HTTPReq.responseText;
}

