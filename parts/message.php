<div class="message">
    <?php if (isset($_SESSION['e'])){
      print '    <div class="error">'.
      '      <div class="title">  <p>';

      print"Error!";
    }
    elseif (isset($_SESSION['w'])) {
      print '    <div class=" notification warning">'.
      '      <div class="title">  <p>';

      print"Warning!";

    }
    elseif (isset($_SESSION['n'])) {
      print '    <div class="notice  notification ">'.
      '      <div class="title">  <p>';

      print"Notice!";

    }
    else {
      print '    <div class="error  notification " style="display:none">'.
      '      <div class="title">  <p>';

      print"Error!";

    }
    ?>
</p>
</div>

<div class="text">
  <p>
    <?php
    if(isset( $_SESSION['message'])){
      print $_SESSION['message'];}
    ?>
  </p>
</div>


</div>
</div>
