

let dateId = document.getElementById("date");

function getTime() {
    let formatDate = new Date();
    let year = formatDate.getFullYear(),
    month = formatDate.getMonth() + 1,
    day = formatDate.getDate(),
    hours = formatDate.getHours(),
    minutes = formatDate.getMinutes(),
    seconds = formatDate.getSeconds();
    if (minutes < 10) minutes = "0" + minutes;
    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;
    if (seconds < 10) seconds = "0" + seconds;
    if (hours < 10) hours = "0" + hours;


    return hours + ":"
    + minutes + ":"
    + seconds + " "
     + day + "."
      + month + "."
       + year;
}

let formatTime = function() {
    let result = getTime().split(" ");
    result.splice(1,0,"<br>");
    result = result.join(" ");
    return result;
}
dateId.innerHTML = formatTime();
let timerId = setTimeout(function run() {
  dateId.innerHTML = formatTime();
  timerId = setTimeout(run,1000);
}, 1000);
