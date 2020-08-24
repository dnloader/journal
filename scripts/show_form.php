<script>

    function showForm() {
        let TagForm = document.getElementsByName("add-notice")[0];
        if((TagForm) && text.innerHTML !== "Click on one of these buttons.") {
            TagForm.remove();
            text.innerHTML = "Click on one of these buttons.";
            return;
        } else {
            let form = document.createElement("form");
            let textArea = document.createElement("textarea");
            let submit = document.createElement("input");
            let br = document.createElement("br");
            let header = document.createElement("input");

            let paste = document.getElementById("text");

            submit.value = "Add";
            submit.type = "submit";
            submit.style.marginTop = "10px";
            submit.name = "name";
            submit.onclick = sendText;

            textArea.name = "inText";
            textArea.rows = "10";
            textArea.style.width = "90%";

            form.method = "GET";
            form.name = "add-notice";

            header.type = "text";
            header.value = "header";
            header.name = "head";

            paste.appendChild(form);
            form.appendChild(header);
            form.appendChild(textArea);
            form.appendChild(br);
            form.appendChild(submit);
        }
    }
</script>
