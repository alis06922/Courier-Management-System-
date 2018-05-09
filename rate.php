<!DOCTYPE html>
<html>
    <body>

        <form action="" method="post">

            <label>Origin:</label> <input type="text" name="o" placeholder="Enter Origin location" required> <br><br>
            <label>Destination:</label> <input type="text" name="d" placeholder="Enter Destination location" required> <br><br>
            <input type="submit" value="Calculate distance & time" name="submit"> <br><br>

        </form>

        <?php
            if(isset($_POST['submit'])){
            $origin = $_POST['o']; $destination = $_POST['d'];
            $api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyA56H0p_0sqlLI_SjAlooB8zjs61oY8sCE");
            $data = json_decode($api);
        ?>

            <label><b>Distance: </b></label> <span><?php echo ((int)$data->rows[0]->elements[0]->distance->value / 1000).' Km'; ?></span> <br><br>
            <label><b>Travel Time: </b></label> <span><?php echo $data->rows[0]->elements[0]->duration->text; ?></span> 

        <?php } ?>

    </body>
</html>