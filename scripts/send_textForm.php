<script>
  function sendText() {
      let text = document.getElementsByName("inText")[0].value;
      let head = document.getElementsByName("head")[0].value;
      let date = getTime();
      let xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
              getText.innerHTML = "The data has been sent";
          } else {getText.innerHTML = "error";}
      };
      xhttp.open("GET", "scripts/sql_add_notice.php?text="+text+"&header="+head+"&date="+date , true);
      xhttp.send();
  }
</script>
