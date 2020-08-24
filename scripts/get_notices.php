<script>
    let getText = document.getElementById("text");
    function showNotice() {
        if (getText.innerHTML !== "Click on one of these buttons.") {
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
</script>
