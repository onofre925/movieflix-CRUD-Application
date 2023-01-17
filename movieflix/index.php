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
            <?php require_once 'create.php';  ?>
            <div>
                <h2>Movieflix CRUD</h2>
            </div>
            <div class="content-wrapper">
                <button id="create-button">Create Record</button>
                <button id="edit-button">Edit Record</button>
                <button id="delete-button">Delete Record</button>

                <form action="create.php" method="POST" id="create-form">
                    <input type="text" placeholder="Enter movie title" name="create-title"/><br />
                    <input type="text" placeholder="Enter movie genre" name="create-genre"/><br />
                    <input type="text" placeholder="Enter movie director" name="create-director"/><br />
                    <input type="submit" value="Save" name="create-button"/>

                </form>

               
            </div>
                <script src="script.js"></script>
        </body>
</html>