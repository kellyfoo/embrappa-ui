<?php 
include("includes/init.php"); 
include("includes/header.php"); ?>


<!DOCTYPE html>
<html lang="en">

<div class=login>
    <form method="post" action="login.php" enctype="multipart/form-data">
          <div class="group_label_input">
            <label class="form_title" for="email"> IBM Email: </label>
            <input id="email" type="text" name="email"  />
          </div>

          <div class="group_label_input">
            <label class="form_title" for="password"> Password: </label>
            <input id="password" type="text" name="password"  />
          </div>

          <div class="group_label_input">
            <span></span>
            <input name="submit_upload" type="submit" value="LOG IN" />
          </div>
        </form>
      </div>




</html>
