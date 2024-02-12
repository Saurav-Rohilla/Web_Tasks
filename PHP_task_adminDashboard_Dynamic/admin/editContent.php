<html>
    <head>
        <link rel="stylesheet" href="assets/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="assets/JQuery.js"></script>
    </head>
    <body>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mainContainer">
                <a href="" class="logOutButton">Log Out</a>
                <div class="semicontainer">

                    <label for="Logos">Logo : </label>
                    <select name="Logos" id="select_fields">
                        <option value="0" id="image_option" class="options">Choose format</option>
                        <option value="Image" id="image_option" class="options">Image</option>
                        <option value="Text" id="text_option" class="options">Text</option>
                    </select>

                    <input type="file" id="logo_image" accept="image/*">
                    <input type="text" id="logo_text">
                </div>
                <div class="semicontainer menu_list">
                    <label for="">Menu list items:   </label>
                    <input type="text" id="first-list-item" placeholder="First Item">
                    <input type="text" id="second-list-item" placeholder="Second Item">
                    <input type="text" id="third-list-item" placeholder="Third Item">
                    <input type="text" id="fourth-list-item" placeholder="Fourth Item">
                    <input type="text" id="fifth-list-item" placeholder="Fifth Item">
                </div>
                <div class="semicontainer">
                    <label for="headField">Heading :</label>
                    <input type="text" id="headField">
                </div>
                <div class="semicontainer"> 
                    <label for="paraField">Paragraph :</label>
                    <input type="text" id="paraField">
                </div>
                <div class="semicontainer">
                    <label for="bannerimgField">Banner Image :</label>
                    <input type="file" id="bannerimgField" accept="image/*">
                </div>
                <div class="semicontainer">
                    <label for="">Anchor tag text:</label>
                    <input type="text" id="anchorField">
                </div>
                <a href="" class="submitButton" >Submit</a>
            </div>
        </form>
    </body>
</html>