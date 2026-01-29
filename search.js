document.getElementById("search").addEventListener("keyup", function () {
    let value = this.value;

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "search_ajax.php?q=" + value, true);
    xhr.onload = function () {
        document.getElementById("result").innerHTML = this.responseText;
    };
    xhr.send();
});
