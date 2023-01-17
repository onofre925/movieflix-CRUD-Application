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

                <form action="" method="POST" id="create-form">
                    <input type="text" placeholder="Enter movie title" name=""/><br />
                    <input type="text" placeholder="Enter movie genre" name=""/><br />
                    <input type="text" placeholder="Enter movie director" name=""/><br />
                    <input type="submit" value="Save"/>

                </form>
                
            </div>
                <script src="script.js"></script>
        </body>
</html>