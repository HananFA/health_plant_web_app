
<style>

.alert {
  padding: 20px;
  background-color: forestgreen;
  color: white;
  position: relative;
  width: auto;
  text-align: center;
  margin-bottom : -10px;
}

.closebtn {
  position: absolute;
  top: 0;
  right: 10px;
  color: white;
  font-weight: bold;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 2s;
}

.closebtn:hover {
  color: black;
}
</style>
<?php
if (isset($_SESSION['message'])) {
    $message = htmlspecialchars($_SESSION['message']);
    echo "<div class='alert'>
    <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
    $message
  </div>
  
  <script>
    setTimeout(function() {
      var alert = document.querySelector('.alert');
      if (alert) {
        alert.style.display = 'none';
      }
    }, 2000);
  </script>";
    unset($_SESSION['message']); // Suppression du message de la session
}
?>


