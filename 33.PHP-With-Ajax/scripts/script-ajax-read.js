$(document).ready(function(){
    $("#btnGenerateData").on('click', function(){
        $.ajax({
            url: "./operational-functions/reading-database-data.php",
            type: "POST",
            success: function(response){
                $("#tableData").html(response);
                console.log(response)
            }
        });
    });
});