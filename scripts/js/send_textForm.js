
  function sendText() {
      let xhttp = new XMLHttpRequest();

      let text = document.getElementsByName("inText")[0].value;
      let head = document.getElementsByName("head")[0].value;
      let date = getTime();
      if (text != false && head != false) {
          let body = 'text=' + encodeURIComponent(text) +
              '&header=' + encodeURIComponent(head) +
              '&date=' + encodeURIComponent(date);
          xhttp.open("POST", "scripts/php/sql_add_notice.php", true);
          xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                  console.log(this.responseText);
              } else {
                  console.log("waiting for response");
              }
          };
          xhttp.send(body);
      } else {
          console.log("error1");
      }
  }

