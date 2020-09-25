    let localData = {
        text : document.getElementById("text"),
        content : document.getElementById("content"),


    };

    function  del() {
        let list = document.getElementsByName("del");
        let xhttp = new XMLHttpRequest();
        let boundary = String(Math.random()).slice(2);
        let boundaryMiddle = '--' + boundary +'\r\n';
        let boundaryLast = '--' + boundary + '--\r\n';

        let body = ['\r\n'];
        for (let i = 0;i < list.length;i++) {
            if (list[i].checked == true) {
                body.push('Content-Disposition: form-data; name="' + i + '"\r\n\r\n' + list[i].nextElementSibling.innerText + '\r\n');
            }
        }
        body = body.join(boundaryMiddle) + boundaryLast;
        xhttp.open("POST", "scripts/php/sql_request_for_del.php", true);
        xhttp.setRequestHeader('Content-Type', 'multipart/form-data; boundary=' + boundary);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200){
                localData.content.innerHTML = this.responseText;

            } else {
                console.log("waiting for response");
            }
        };

        xhttp.send(body);
    }


    function listForDel() {

        if(localData.content.childNodes[0] !== undefined) {
            for (let i = 0; i < localData.content.childNodes.length; i++) {
                localData.content.childNodes[i].remove();
                i--;

            }
            xhr();
        } else {
            xhr();
        }
    }

    function xhr() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let form = document.createElement("form");
                form.name = "fDel";
                localData.content.appendChild(form);

                let respondArr = this.responseText.split("-");

                for (let i = 0; i < respondArr.length - 1; i++) {

                    let input = document.createElement("input");
                    let br = document.createElement("br");
                    let label = document.createElement("label");
                    let hr = document.createElement("hr");
                    input.type = "checkbox";
                    input.id = i + "";
                    input.name = "del";

                    label.for = i + "";
                    label.innerHTML = respondArr[i];

                    form.appendChild(input);
                    form.appendChild(label);
                    form.appendChild(hr);
                }
                let submit = document.createElement("input");
                submit.type = "submit";
                submit.value = "delete";
                submit.className = "submit";
                submit.onclick = del;
                form.enctype = "multipart/form-data";
                form.method = "POST";
                form.appendChild(submit);


            } else {
                console.log("waiting for response...");
            }
        };
        xhttp.open("GET", "scripts/php/del_list_sql.php", true);
        xhttp.send();
    }

