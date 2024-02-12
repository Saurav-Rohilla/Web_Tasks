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
        var imgLogo="";
        if($("#logo_text").val() == "")
        {
            imgLogo = $("#logo_image")[0].files[0];
        }
        else
        {
            imgLogo = $("#logo_text").val();
        }
        alert(imgLogo);
        var first_item = $("#first-list-item").val();
        var second_item = $("#second-list-item").val();
        var third_item = $("#third-list-item").val();
        var fourth_item = $("#fourth-list-item").val();
        var fifth_item = $("#fifth-list-item").val();
        var head = $("#headField").val();
        var para = $("#paraField").val();
        var anchorText= $("#anchorField").val();
        var bannerimgName = $("#bannerimgField")[0].files[0];

        var formData = new FormData();
        
        formData.append("imgLogo", imgLogo);
        formData.append("first_item", first_item);
        formData.append("second_item",second_item);
        formData.append("third_item", third_item);
        formData.append("fourth_item", fourth_item);
        formData.append("fifth_item", fifth_item);
        formData.append("head", head);
        formData.append("para", para);
        formData.append("anchorText", anchorText);
        formData.append("bannerimgName", bannerimgName);
        if(imgLogo != "" && first_item!="" && second_item!="" && third_item!="" && fourth_item!="" && fifth_item!="" && head!="" && para!="" && anchorText!="" && bannerimgName!="")
        {
            $.ajax({
                url : "saveContent.php",
                type : 'POST',
                data : formData,
                contentType: false,
                processData: false,
                success : function(response){
                    alert(response);
                }
            });
        }
        else
        {
            alert("All Fields are mandatory!!!");
        }
        alert("ajax Failed");
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
    $("#select_fields").change(function(){
        var temp = $(this).val();
        if(temp== 'Image')
        {
            $("#logo_image").css("display","block");
            $("#logo_text").css("display","none");
        }
        else
        {
            $("#logo_image").css("display","none");
            $("#logo_text").css("display","block");
        }
    });
});