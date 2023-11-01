<?php include 'header.php'; ?>


<div id="main-content">
    <h2>All Records</h2>
    <?php
    include 'config.php';
session_start();

// REMOVE THIS IF LOG IN FORM NOT WORKING
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
// TEST LOG IN HEHEHE
    $sql = "SELECT * FROM student JOIN studentclass ON student.sregion = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if (mysqli_num_rows($result) > 0) {
        ?>
        <table cellpadding="7px">
            <thead>
            <th>Id</th>
            <th>Voter's No</th>
            <th>Precinct No</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Street</th>
            <th>Barangay</th>
            <th>Municipality</th>
            <th>City</th>
            <th>Region</th>
            <th>Zip Code</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['sid']; ?></td>
                    <td><?php echo $row['svoters']; ?></td>
                    <td><?php echo $row['sprecinct']; ?></td>
                    <td><?php echo $row['slastname']; ?></td>
                    <td><?php echo $row['sfirstname']; ?></td>
                    <td><?php echo $row['smiddlename']; ?></td>
                    <td><?php echo $row['sstreet']; ?></td>
                    <td><?php echo $row['sbarangay']; ?></td>
                    <td><?php echo $row['smunicipality']; ?></td>
                    <td><?php echo $row['scity']; ?></td>
                    <td><?php echo $row['sregion']; ?></td>
                    <td><?php echo $row['szipcode']; ?></td>
                    <td>
                        <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                        <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo "<h2>No Record Found</h2>";
    }
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
