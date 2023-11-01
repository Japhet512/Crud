<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" placeholder="Enter Id" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $stu_id = $_POST['sid'];

        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Voter's No</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="svoters" value="<?php echo $row['svoters']; ?>" />
        </div>
        <div class="form-group">
            <label for="">Princint</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sprecinct" value="<?php echo $row['sprecinct']; ?>" />
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="slastname" value="<?php echo $row['slastname']; ?>" />
        </div>
        <div class="form-group">
            <label for="">First Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sfirstname" value="<?php echo $row['sfirstname']; ?>" />
        </div>
        <div class="form-group">
            <label for="">Middle Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="smiddlename" value="<?php echo $row['smiddlename']; ?>" />
        </div>
        <div class="form-group">
            <label for="">Street</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sstreet" value="<?php echo $row['sstreet']; ?>" />
        </div>
        <div class="form-group">
            <label for="">Barangay</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sbarangay" value="<?php echo $row['sbarangay']; ?>" />
        </div>
        <div class="form-group">
            <label for="">Municipality</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="smunicipality" value="<?php echo $row['smunicipality']; ?>" />
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" name="scity" value="<?php echo $row['scity']; ?>" />
        </div>
        <div class="form-group">
        <label>Region</label>
        <?php
          $sql1 = "SELECT * FROM studentclass";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="sregion">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['sclass'] == $row1['cid']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>
        <div class="form-group">
            <label>Zip Code</label>
            <input type="text" name="szipcode" value="<?php echo $row['szipcode']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
  }
}
}

    ?>
</div>
</div>
</body>
</html>
