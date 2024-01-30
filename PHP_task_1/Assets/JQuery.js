 $(".submitButton").click(function(){
        var fName = $("#textField_fName").val();
        var mName = $("#textField_mName").val();
        var pNumber = $("#textField_phone").val();
        var lName = $("#textField_lName").val();
        $.ajax({
            url: "result.php",
            type: "POST",
            data: { firstname: fName , middlename : mName , phone: pNumber ,lastname: lName },
            success: function(response) {
            alert(response);
            }
          });
    });