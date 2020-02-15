<?php
    $pageTitle = "Elliott's Scouts Schedule";
      include("inc/header.php");
     ?>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT *, DATE_FORMAT (date, '%m/%d/%Y') AS date FROM events ORDER BY date ASC"); // using mysqli_query instead
?>

<body>
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Elliott's Scouts Schedule</h1>
            </div>
        </div>              
        <div class="row">
        <div class="col-sm-12">
        <table class="table list">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        while($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$res['date']."</td>";
            echo "<td>".$res['event']."</td>";
            echo "<td>".$res['location']."</td>";
        } ?>
                    </tbody>
                    <table>
                    </div>
        </div>
    <?php
      include("inc/footer.php");
     ?>
