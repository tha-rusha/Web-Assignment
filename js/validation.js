// <!-- validation Js -->
<script type="text/javascript">
    function validate() {
        if (document.form1.email.value.length<1) {
        alert("User Email cannot empty.");
      }
        if (document.form1.pass.value.length<1) {
        alert("Password is cannot empty");
      }else if (document.form1.pass.value.length<8){
        alert("Password character want 8 or more than 8 characters");
      }
    }
  </script>
