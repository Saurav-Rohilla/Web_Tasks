$(document).ready(function(){
    $("#saveButton").click(function(){
        var FName = $("#fnameField").val();
        var LName = $("#lnameField").val();
        var Mail = $("#mailField").val();
        var pwd = $("#pwdField").val();
        var confirmpwd = $("#confirmField").val();

        
        if(FName !="" && LName !="" && Mail !="" && pwd !="" && confirmpwd !="")
        {
            if(pwd == confirmpwd)
            {
                alert("Here");
                $.ajax({
                    url : "saveContent.php",
                    type : "POST",
                    data : {"FName" : FName, "LName" :LName,"Mail":Mail , "pwd" :pwd},
                    success : function(response){
                        if(response == "1")
                        {
                            window.location.href = 'index.php';
                        }
                    }
                });
            }
            else
            {
                alert("Password not matching!!!");
            }
        }
        else
        {
            alert("All fields are mandatory!!!");
        }
        alert("Ajax Failed!!!");
    });
    $("#loginButton").click(function(){
        var mail = $("#mailtextField").val();
        var pwd = $("#pwdtextField").val();
         alert(mail);
         alert(pwd);
        if(mail != "" && pwd != "" )
        {
            alert("HEre");
            $.ajax({
                url : 'match.php',
                type : "POST",
                data : {"mail": mail, "pwd" : pwd},
                success : function(response){
                    alert(response);
                    if(response == 1)
                    {
                        window.open('editContent.php');
                        window.location.href = 'editContent.php';
                    }
                }
            });
        }
        else
        {
            alert("Fields cant be empty!!!");
        }
        alert("Ajax Failed!!");
    });
    $("#submitButton").click(function(){
        // var logoImg;
        // if($("#logoText").val()=="")
        // {
        //     logoImg= $("#inputimageField")[0].files[0];
        // }
        // else
        // {
        //     logoImg = $("#inputtextField").val();
        // }
        // alert(logoImg);
        // if(logoImg == undefined)
        // {
        //     alert("got value");
        // }
        var postbigHeading = $("#postHeading").val();
        var postsmallHeading = $("#postsmallHeading").val();
        var postPara = $("#postPara").val();
        var postImage = $("#postImage")[0].files[0];
        var firstquickItem = $("#firstquickItem").val();
        var secondquickItem = $("#secondquickItem").val();
        var thirdquickItem = $("#thirdquickItem").val();
        var fourthquickItem = $("#fourthquickItem").val();
        var fifthquickItem = $("#fifthquickItem").val();
        var firstserviceItem = $("#firstserviceItem").val();
        var secondserviceItem = $("#secondserviceItem").val();
        var thirdserviceItem = $("#thirdserviceItem").val();
        var fourthserviceItem = $("#fourthserviceItem").val();
        var fifthserviceItem = $("#fifthserviceItem").val();
        var firstlegalItem = $("#firstlegalItem").val();
        var secondlegalItem = $("#secondlegalItem").val();
        var firstparaItem= $("#firstparaItem").val();
        var secondparaItem= $("#secondparaItem").val();
        var footerImage = $("#footerImage")[0].files[0];

        var formData = new FormData();
        formData.append("footerImage",footerImage);
        formData.append("firstparaItem",firstparaItem);
        formData.append("secondparaItem",secondparaItem);
        formData.append("firstlegalItem",firstlegalItem);
        formData.append("secondlegalItem",secondlegalItem);
        formData.append("firstserviceItem",firstserviceItem);
        formData.append("secondserviceItem",secondserviceItem);
        formData.append("thirdserviceItem",thirdserviceItem);
        formData.append("fourthserviceItem",fourthserviceItem);
        formData.append("fifthserviceItem",fifthserviceItem);
        formData.append("postbigHeading",postbigHeading);
        formData.append("postsmallHeading",postsmallHeading);
        formData.append("postPara",postPara);
        formData.append("postImage",postImage);
        formData.append("firstquickItem",firstquickItem);
        formData.append("secondquickItem",secondquickItem);
        formData.append("thirdquickItem",thirdquickItem);
        formData.append("fourthquickItem",fourthquickItem);
        formData.append("fifthquickItem",fifthquickItem);
        // formData.append("logoImg", logoImg);

        // if(postImage !="" && footerImage!="")
        // {
        //      $.ajax({
        //     url : 'insert.php',
        //     type : "POST",
        //     contentType : false,
        //     processData : false, 
        //     data : formData,
        //     success : function(response){
        //         alert(response);
        //     }
        //     });
        // }
        // else{
        //     alert("IMages are mandatory!!!!");
        // }
        $.ajax({
            url : 'insert.php',
            type : "POST",
            contentType : false,
            processData : false, 
            data : formData,
            success : function(response){
                alert(response);
            }
        });
        alert("Ajax Failed!!!");


    });
    $("#logoutButton").click(function(){
        $.ajax({
            url : 'cookieDestroy.php',
            success : function(response){
                if(response == 1)
                {
                    window.location.href = 'index.php';
                }
            }
        });
    });
});