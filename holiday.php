<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php require_once("functions.php"); ?>
<?php include_once("header.php"); ?>
<?php    
    if(isset($_POST["submit"])) {
        $location = ucfirst($_POST["holiday_location"]);
        $description = ucfirst($_POST["holiday_description"]);
        $rating = ($_POST["holiday_rating"]);
        $tags = ($_POST["holiday_tags"]);
        $picture = ($_POST["holiday_picture"]);
        $holuser = ucfirst($_POST["holiday_user"]);
        
        $query = "INSERT INTO holiday (holiday_location, holiday_description, holiday_rating, holiday_tags, holiday_picture, holiday_user) VALUES ('{$location}','{$description}','{$rating}','{$tags}','{$picture}','{$holuser}',)";
        $result = mysqli_query($connection, $query);
        
        if($result) {
            $message = "Post added";
        } else {
            $message = "Something went wrong";
        }
    } 
?>
<div class="holiday-toggle">
    <p>Add A Holiday</p>
</div>
<div class="add-holiday">
            <form action="holidays.php" method="post">
                <p>Location:</p><input type="text" name="holiday_location" value=""/><br>
                <p>Description:</p><input type="text" name="holiday_description" value=""/><br>
                <p>Rating:</p><input type="text" name="holiday_rating" value=""/><br>
                <p>Tags:</p><input type="text" name="holiday_tags" value=""/><br>
                <p>Picture:</p><input type="text" name="holiday_picture" value=""/><br>
                <p>Username:</p><input type="text" name="holiday_user" value=""/><br>
                <br>
                <input type="submit" name="submit" value="Add"/>
            </form>
        </div>

<?php
    if(isset($_POST["submit"])) {
        echo "Location: $location " ;
        echo "Description: $description " ;
        echo "Rating: $rating /5 " ;
        echo "Tags: $tags " ;
        echo "Picture: $picture " ; 
        echo "Username: $holuser " ; 
        
    }
?>

        
<?php include_once("footer.php"); ?>  
