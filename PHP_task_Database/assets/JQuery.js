 $(document).ready(function(){
      $(".submitButton").click(function(){
        var fName = $("#textField_fName").val();
        var mName = $("#textField_mName").val();
        var pNumber = $("#textField_phone").val();
        var lName = $("#textField_lName").val();
        var imgFile = $(".file_Upload")[0].files[0];

        var formData = new FormData();
        formData.append("fName", fName);
        formData.append("mName", mName);
        formData.append("pNumber", pNumber);
        formData.append("lName", lName);
        formData.append("imgFile", imgFile);

        $.ajax({
            url: 'insert.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
            alert("Data Entered Successfully");
            }
        });
    });
    $(".deleteButton").click(function(){
      $delId = $(this).attr("id");
      $.ajax({
        url: 'delete.php',
        type: "POST",
        data : {"delId" : $delId},
        success:function(response) {
          alert("Data Deleted Successfully");
        }
      });
    });
 });