    let constructForm = {

            form : document.createElement("form"),
            textArea : document.createElement("textarea"),
            input : document.createElement("input"),
            br : document.createElement("br"),
            header : document.createElement("input"),
            content : document.getElementById("content"),
            getForm : document.getElementsByName("add-notice")[0],


        makeForm : function () {
            this.form.method = "GET";
            this.form.name = "add-notice";
            this.form.id = "add-notice";
            this.content.appendChild(constructForm.form);
            this.form.appendChild(constructForm.makeHeader());
            this.form.appendChild(constructForm.makeTextArea());
            this.form.appendChild(constructForm.makeSubmit());
        },

        makeSubmit : function () {
            this.input.value = "Add";
            this.input.type = "submit";
            this.input.className = "submit";
            this.input.name = "name";
            this.input.onclick = sendText;
            return this.input;
        },

        makeHeader : function () {
            this.header.type = "text";
            this.header.name = "head";
            this.header.placeholder = "Input a title";
            this.header.id = "headForm";
            this.header.required = true;
            return this.header;
        },

        makeTextArea : function () {
            this.textArea.name = "inText";
            this.textArea.rows = "10";
            this.textArea.placeholder = "Input some text";
            this.textArea.required = true;
            return this.textArea;
        }

    };

    function showForm() {
        let forDel = document.querySelector("#content");
        if(forDel.childNodes[0] !== undefined) {
            for (let i = 0; i < forDel.childNodes.length; i++) {
                forDel.childNodes[i].remove();
                i--;
            }
            constructForm.makeForm();

        } else {
            constructForm.makeForm();
        }
    }

