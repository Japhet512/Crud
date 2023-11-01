<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'config.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Voter's No</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="svoters" value="<?php echo $row['svoters']; ?>"/>
      </div>
      <div class="form-group">
          <label>Precinct No</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sprecinct" value="<?php echo $row['sprecinct']; ?>"/>
      </div>
      <div class="form-group">
          <label>Last Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="slastname" value="<?php echo $row['slastname']; ?>"/>
      </div>
      <div class="form-group">
          <label>First Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sfirstname" value="<?php echo $row['sfirstname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Middle Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="smiddlename" value="<?php echo $row['smiddlename']; ?>"/>
      </div>
      <div class="form-group">
          <label>Streer</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sstreet" value="<?php echo $row['sstreet']; ?>"/>
      </div>
      <div class="form-group">
            <label for="sbarangay">Barangay</label>
            <select name="sbarangay" id="sbarangay" class="form-control" required>
                <option selected disabled>Select Barangay.</option>
                <option>Agdahon</option>
                <option>Agdayao </option>
                <option>Aglalana</option>
                <option>Agtabo</option>
                <option>Agtambo</option>
                <option>Alimono</option>
                <option>Arac</option>
                <option>Ayuyan</option>
                <option>Bacuranan</option>
                <option>Bagacay</option>
            </select>
        </div>
        <div class="form-group">
            <label for="smunicipality">Municipality</label>
            <select name="smunicipality" id="smunicipality" class="form-control" required>
                <option selected disabled>Select Municipality</option>
                <option>Ajuy</option>
                <option>Alimodian</option>
                <option>Anilao</option>
                <option>Badiangan</option>
                <option>Barotac Nuevo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="scity">City</label>
            <select name="scityy" id="city" class="form-control" required>
                <option selected disabled>Select City</option>
                <option>Bago City</option>
                <option>La Carlota City</option>
                <option>Cadiz City</option>
                <option>Kabankalan City</option>
                <option>Escalante City</option>
            </select>
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
          <input type="text" placeholder="Enter Zip Code" name="szipcode" value="<?php echo $row['szipcode']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
