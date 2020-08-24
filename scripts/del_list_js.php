<script>
    let idContent = document.getElementById("content");
    function  del() {
        let list = document.getElementsByName("del");
        let arrForDel = [];
        for (let i = 0; i < list.length; i++) {
            if (list[i].checked == true) {
                arrForDel.push(list[i].nextElementSibling.innerText);
            }
        }
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200){
                idContent.innerHTML = this.responseText;

            } else {
                console.log("waiting for response");
            }
        };
        xhttp.open("GET", "scripts/sql_request_for_del.php?arrForDel="+arrForDel , true);
        xhttp.send();
    }

    let text = document.getElementById("text");
    function listForDel() {

        if ((document.getElementsByName("fDel")[0]) && text.innerHTML !== "Click on one of these buttons"){
            document.getElementsByName("fDel")[0].remove();
            text.innerHTML = "Click on one of these buttons.";
            return;
        }

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200){
                let form = document.createElement("form");
                form.name = "fDel";
                idContent.appendChild(form);

                let respondArr = this.responseText.split("-");

                for (let i = 0; i < respondArr.length - 1; i++){

                    let input = document.createElement("input");
                    let br = document.createElement("br");
                    let label = document.createElement("label");
                    input.type = "checkbox";
                    input.id = i + "";
                    input.name = "del";

                    label.for = i + "";
                    label.innerHTML = respondArr[i];

                    form.appendChild(input);
                    form.appendChild(label);
                    form.appendChild(br);
                }
                let submit = document.createElement("input");
                submit.type = "submit";
                submit.value = "delete";
                submit.onclick = del;
                form.appendChild(submit);


            } else {
                console.log("waiting for response...");
            }
        };
        xhttp.open("GET", "scripts/del_list_sql.php" , true);
        xhttp.send();
    }

</script>
