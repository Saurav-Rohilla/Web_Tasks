$(document).ready(function(){
    $(".saveButton").click(function(){
        var fName = $("#fNameField").val();
        var lName = $("#lNameField").val();
        var mail = $("#mailField").val();
        var pwd = $("#pwdField").val();
        var confirm = $("#confirmField").val();
        alert(fName);

        if(mail != "" && pwd != "" && confirm != "" && fName != "" && lName != "")
        {
            if(pwd == confirm ) 
            {
                $.ajax({
                    url : 'insert.php',
                    type : 'POST',
                    data : {"fName" : fName, "lName" : lName , "mail" : mail, "pwd" :pwd, "confirm" : confirm},
                    success : function(response){
                        alert(response);
                        if(response == "1")
                        {
                            window.location.href = "index.php";
                        }
                    }
                });
            }
            else
            {
                alert("Password and Confirm Password must be same!!!");
            }
        }
        else
        {
            alert("All fields are mandatory!");
        }
    });
    $(".LogInButton").click(function(){
        var mail = $("#mailField").val();
        var pwd = $("#pwdField").val();
        if(mail != ""  && pwd != "")
        {
            $.ajax({
                url : 'match.php',
                type : "POST",
                data : {"mail": mail,"pwd": pwd},
                success : function(response){
                    if(response == "1")
                    {
                        window.location.href = "editContent.php";
                    }
                }
            });
        }
        else
        {
            alert("All fields are required!!!");
        }
    });
    $(".submitButton").click(function(){
        var head = $("#headField").val();
        var para = $("#paraField").val();
        var imgName = $("#imgField")[0].files[0];
        var formData = new FormData();
        
        formData.append("head", head);
        formData.append("para", para);
        formData.append("imgName", imgName);
        
        alert("Before formdata");
        alert(head + para +imgName);
        $.ajax({
            url : "saveContent.php",
            type : 'POST',
            data : formData,
            contentType: false,
            processData: false,
            success : function(response){
                alert("Ajax Completed");
                alert(response);
            }
        });
        alert("Ajax Failed");
    });
    $(".logOutButton").click(function(){
        $.ajax({
            url : 'sessionDestroy.php',
            success  : function(response)
            {
                window.location.href = "index.php";
            }
        });
    });
});