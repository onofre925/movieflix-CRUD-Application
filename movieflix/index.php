<!DOCTYPE html>
<html>
        <head>
            <title>MovieFlix CRUD App</title>
            <style>

                #create-form{
                    display:none;
                    
                }


            </style>
        </head>
        <body>
            <div>
                <h2>Movieflix CRUD</h2>
            </div>
            <div class="content-wrapper">
                <button id="create-button">Create Record</button>
                <button id="edit-button">Edit Record</button>
                <button id="delete-button">Delete Record</button>

                <form action="index.php" method="POST" id="create-form">
                    <input type="text" placeholder="Enter movie title" name="create-title"/><br />
                    <input type="text" placeholder="Enter movie genre" name="create-genre"/><br />
                    <input type="text" placeholder="Enter movie director" name="create-director"/><br />
                    <input type="submit" value="Save" name="create-button"/>

                </form>

                <?php
                    //Create record function

                    function createRecord(){

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

                            //Storing user input into variables

                            $movieTitle = $_POST['create-title'];
                            $movieGenre = $_POST['create-genre'];
                            $movieDirector = $_POST['create-director'];

                            //Attempting to INSERT Data into our table

                            $sql = "INSERT INTO movieflix_table (title,genre,director) VALUES ('$movieTitle','$movieGenre','$movieDirector')";

                            //Check if inserting data was successful
                            if(mysqli_query($connection, $sql)){

                                echo 'Successfully Inserted data';
                            
                            } else{
                                echo 'Error: '.sql.mysqli_error($connection);
                            }

                            //CLose connection

                            mysqli_close($connection);

                    }
                    if(isset($_POST['create-button'])){

                        createRecord();
                    }
                ?>
            </div>
                <script src="script.js"></script>
        </body>
</html>