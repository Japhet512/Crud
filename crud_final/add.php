<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Voter's No</label>
            <input type="text" placeholder="Enter Voter's No" name="svoters" required/>
        </div>
        <div class="form-group">
            <label>Precinct No</label>
            <input type="text" placeholder="Enter Precinct No" name="sprecinct" required/>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" placeholder="Enter Last Name" name="slastname" required/>
        </div>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" placeholder="Enter First Name" name="sfirstname" required/>
        </div>
        <div class="form-group">
            <label>Middle Name</label>
            <input type="text" placeholder="Enter Middle Name" name="smiddlename" required/>
        </div>
        <div class="form-group">
            <label>Street</label>
            <input type="text" placeholder="Enter Street" name="sstreet" required/>
        </div>
        <div class="form-group">
            <label for="sbarangay">Barangay</label>
            <select name="sbarangay" id="sbarangay" class="form-control" required>
                <option selected disabled>Select Barangay</option>
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
                <!-- Add more options as needed -->
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
            <select name="scity" id="scity" class="form-control" required>
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
            <select name="sregion" required>
                <option value="" selected disabled>Select Region</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM studentclass";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Zip Code</label>
            <input type="text" placeholder="Enter Zip Code" name="szipcode" required/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
