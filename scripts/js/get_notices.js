    let text = document.createElement("p");
    let getText = document.getElementById("text");
    function showNotice() {
        let forDel = document.querySelector("#content");
        if(forDel.childNodes[0] !== undefined) {
            for (let i = 0; i < forDel.childNodes.length; i++) {
                forDel.childNodes[i].remove();
                i--;
            }
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                    text.id = "text";
                    forDel.appendChild(text);
                    text.innerHTML = this.responseText;
            };
            xhttp.open("GET", "scripts/php/sql_get_notices.php", true);
            xhttp.send();

        } else {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {


                    text.id = "text";
                    forDel.appendChild(text);
                    text.innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "scripts/php/sql_get_notices.php", true);
            xhttp.send();
        }
    }

