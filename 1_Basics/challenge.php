<!DOCTYPE html>
<html>
    <head>
        <title>Challenge 1</title>
    </head>
    <body>
    <?php
        $name = "Teresa"; // Heading 1
        $city = "NYC";
        $movie = "Star Wars"; // Italics
        $friend = "George"; // Bold
        $candy = "Sour Patch Kids";
    ?>
    <h1><?php echo $name?>!</h1>
    <?php 
        echo "<p>She is from " . $city . ", and went to see " . $movie . " with her friend " . $friend . ". They got " . $candy . " for snacks."
    ?>
    </body>
</html> 