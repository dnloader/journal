
    let getText = document.getElementById("text");
    function showNotice() {
        if (getText.innerHTML !== "Click on one of these buttons." ) {
            let contentForms = document.querySelector("#content");
            if (contentForms.childNodes[3] !== undefined) {
                for (let i = 3; i < contentForms.childNodes.length; i++) {
                    document.querySelector("#content").childNodes[i].remove();
                }
            }
            getText.innerHTML = "Click on one of these buttons.";

        } else {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    getText.innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "scripts/sql_get_notices.php", true);
            xhttp.send();
        }
    }

