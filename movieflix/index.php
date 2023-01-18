<!DOCTYPE html>
<html>
        <head>
            <title>MovieFlix CRUD App</title>
            <style>

                #create-form, #update-form, #delete-form{
                    display:none;
                    
                }


            </style>
        </head>
        <body>
            <?php require_once 'create.php';  ?>
            <div>
                <h2>Movieflix CRUD</h2>
                <?php
                     $servername = 'localhost';
                     $username = 'root';
                     $password = '';
                     $database = 'movieflix_database';

                     //Creating a Connection to database

                     $connection = mysqli_connect($servername,$username,$password,$database);

                     //Check if connection wa successful or not
                        if(!$connection){
                        die('Connection unsuccessful : '.mysqli_connect_error());
                        } else{
                            echo 'Connection success!';
                        }

                        //Query the table for the records
                        $sql = "SELECT * FROM movieflix_table";//set up our query
                        $result = mysqli_query($connection, $sql);//store the result of our query into the $result
                        $rowCount = mysqli_num_rows($result); //Method returns to us the number of rows -> $rowCount

                        if($rowCount > 0){

                            echo "
                                <table>
                                    <thread>
                                        <tr>
                                            <th>Record ID</th>
                                            <th>Title</th>
                                            <th>Genre</th>
                                            <th>Director</th>
                                        </tr>
                                    </thread>
                                
                             ";
                        }

                ?> <!--End PHP code block -->
                <?php
                    while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['title']?></td>
                        <td><?php echo $row['genre']?></td>
                        <td><?php echo $row['director']?></td>
                    </tr>

                <?php endwhile ?>
                    </table>


            </div>
            <div class="content-wrapper">
                <button id="create-button">Create Record</button>
                <button id="update-button">Edit Record</button>
                <button id="delete-button">Delete Record</button>

                <form action="create.php" method="POST" id="create-form">
                    <input type="text" placeholder="Enter movie title" name="create-title"/><br />
                    <input type="text" placeholder="Enter movie genre" name="create-genre"/><br />
                    <input type="text" placeholder="Enter movie director" name="create-director"/><br />
                    <input type="submit" value="Save" name="create-button"/>

                </form>

                <form action="update.php" method="POST" id="update-form">
                    <input type="text" placeholder="Enter Record ID" name="update-ID"/><br />
                    <input type="text" placeholder="Enter movie title" name="update-title"/><br />
                    <input type="text" placeholder="Enter movie genre" name="update-genre"/><br />
                    <input type="text" placeholder="Enter movie director" name="update-director"/><br />
                    <input type="submit" value="Save" name="submit-update"/>

                </form>

                <form action="delete.php" method="POST" id="delete-form">
                        <input type="text" placeholder="Enter Record ID" name="delete-ID"/><br />
                        <input type="submit" value="Save" name="submit-delete"/>

                </form>

            

               
            </div>
                <script src="script.js"></script>
        </body>
</html>