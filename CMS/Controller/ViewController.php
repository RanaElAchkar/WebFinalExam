<?php
 function SignUpScript(){
    ?>
 <script>
        function SignUpFrm() {
            let frm = document.querySelector("form[name='SignUpForm']")
            let username = frm.elements["username"].value;
            let firstname = frm.elements["firstname"].value;
            let lastname = frm.elements["lastname"].value;
            let password = frm.elements["password"].value;
            let cpass = frm.elements["cpass"].value;
            let sex = frm.elements["sex"].value;
            let captcha = frm.elements["cbcaptcha"].checked;
            console.log(frm.elements);
           
            if (captcha) {
                frm.submit();
            }
        }
        function ResetFrm() {
            let frm = document.querySelector("form[name='SignUpForm']")
            frm.elements["username"].value = "";
            frm.elements["firstname"].value = "";
            frm.elements["lastname"].value = "";
            frm.elements["password"].value = "";
            frm.elements["cpass"].value = "";
            frm.elements["sex"].value = "F";
            frm.elements["cbcaptcha"].checked = false;
        }

    </script>
<?php
 }
 ?>
 <?php
 function LogInScript(){
    ?>
 <script>
      function LogInFrm() {
          let username = document.getElementById("username").value;
          console.log(username);
          let password = document.getElementById("password").value;
          console.log(password);
          if ((username == "") || (password == "")) {
              alert("Please fill in the username and password");
          }
          else {
              document.getElementById("login").submit();

          }


      }
      function ResetFrm() {
          document.getElementById("username").value = "";
          document.getElementById("password").value = "";
          alert("clear");
      }

  </script>
<?php
 }
 ?>
  <?php
 function AddScript(){
    ?>
 <script>
        function AddFrm() {
            let frm = document.querySelector("form[name='AddForm']")
            let id = frm.elements["id"].value;
            let name = frm.elements["name"].value;
            let desc = frm.elements["desc"].value;
            frm.submit();

        }
        function ResetFrm() {
            let frm = document.querySelector("form[name='AddForm']")
            frm.elements["id"].value = "";
            frm.elements["name"].value = "";
            frm.elements["desc"].value = "";

        }

    </script>
<?php
 }
?>
 
