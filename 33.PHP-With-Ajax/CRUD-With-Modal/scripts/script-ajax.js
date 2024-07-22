$(document).ready(function(e){
    showData();
    function showData(){
        $.ajax({
            url: "./operational-functions/reading-database-data.php",
            type: "GET",
            success: function(response){
                $("#tableData").html(response);
            }
        });
    };
    $('#btnAddData').on('click', function(e){
        e.preventDefault(); 
    
        let data = {};
        const studentName = $('#student_name').val();
        const studentFName = $('#student_Fname').val();
        const studentMName = $('#student_Mname').val();
        const studentEmail = $('#student_email').val();
        const studentStatus = $('#student_status').val(); 
        data = {
            student_name: studentName,
            student_Fname: studentFName,
            student_Mname: studentMName,
            student_email: studentEmail,
            student_status: studentStatus,
        }
        console.log(data);
        $.ajax({
            url: "./operational-functions/insertion.php",
            type: "POST",

            data: data,
            success: function(response){
                showData();
                $('.msg').show();
                $('.msg').html(response);
                $(".msg").fadeOut(3000);
				$("#studentName").val("")
				$("#student_Fname").val("")
				$("#student_Mname").val("")
				$("#student_email").val("")
				$("#student_status").val("")
            }
        })
    });


   jQuery(document).on('click', '#active', function(event){
        const id = $(this).val();
        $.ajax({
            url: "./operational-functions/change-status.php",
            type:"POST",
			data:{
				'action':"inactive",
				'student_id': id
			},
            success: function(response){
                showData();
                $('.msg').show();
                $('.msg').html(response);
                $(".msg").fadeOut(3000);
            }
        });
    });
    jQuery(document).on('click', '#inactive', function(event){
        const id = $(this).val();
        $.ajax({
            url: "./operational-functions/change-status.php",
            type:"POST",
			data:{
				'action':"active",
				'student_id': id
			},
            success: function(response){
                showData();
                $('.msg').show();
                $('.msg').html(response);
                $(".msg").fadeOut(3000);

            }
        });
    });

    // passed the delete button id value to modal confirm button value
    jQuery(document).on('click', '.btnDelete', function(event){
        const buttonIdVal = $(this).val();
        console.log(buttonIdVal);
        $('.btnModalDeleteConfirm').val(buttonIdVal);
    });

    // perform deletion on confirm button 
    jQuery(document).on('click', '.btnModalDeleteConfirm', function(event){
        const id = $(this).val();
        $.ajax({
            url: "./operational-functions/delete.php",
            type:"POST",
			data:{
				'action':"delete",
				'student_id': id
			},
            success: function(response){
                showData();
                $('#deleteModal').modal('hide');
                $('.msg').show();
                $('.msg').html(response);
                $(".msg").fadeOut(3000);

            }
        });
    });


    $('#btnModalAddStudent').on('click', function(e){
        e.preventDefault(); 
    
        let data = {};
        const studentName = $('#modalStudentName').val();
        const studentFName = $('#modalStudentFName').val();
        const studentMName = $('#modalStudentMName').val();
        const studentEmail = $('#modalStudentEmail').val();
        const studentStatus = $('#modalStudentStatus').val(); 
        data = {
            student_name: studentName,
            student_Fname: studentFName,
            student_Mname: studentMName,
            student_email: studentEmail,
            student_status: studentStatus,
        }
        console.log(data);
        $.ajax({
            url: "./operational-functions/modal-insetion.php",
            type: "POST",
            data: data,
            success: function(response){
                showData();
                $('#insertModal').modal('hide');
                $('.msg').show();
                $('.msg').html(response);
                $(".msg").fadeOut(3000);
				$("#studentName").val("")
				$("#student_Fname").val("")
				$("#student_Mname").val("")
				$("#student_email").val("")
				$("#student_status").val("")
            }
        })
    });


    // passed the edit button id value to modal update button value
    jQuery(document).on('click', '.btnEdit', function(event){
        const buttonIdVal = $(this).val();
        $('#btnModalEditStudent').val(buttonIdVal);
        $.ajax({
			url:"./operational-functions/edit-data-fetch.php",
			type:"POST",
			dataType:"JSON",
			data:{
				'action':"fetchEditStudentData",
				'student_id':buttonIdVal
			},
			success:function(response){
                // console.log(response[0]);
                if(response != undefined){
                    jQuery("#modalEditStudentName").val(response[0].student_name)
                    jQuery("#modalEditStudentFName").val(response[0].student_Fname)
                    jQuery("#modalEditStudentMName").val(response[0].student_Mname)
                    jQuery("#modalEditStudentEmail").val(response[0].student_email)
                    jQuery("#modalEditStudentStatus").val(response[0].student_status)
                }
		
			}
		});
    });

    $('#btnModalEditStudent').on('click', function(e){
        e.preventDefault(); 
        
        let data = {};
        const id = jQuery(this).val();
        const studentName = $('#modalEditStudentName').val();
        const studentFName = $('#modalEditStudentFName').val();
        const studentMName = $('#modalEditStudentMName').val();
        const studentEmail = $('#modalEditStudentEmail').val();
        const studentStatus = $('#modalEditStudentStatus').val(); 
        data = {
            student_id: id,
            student_name: studentName,
            student_Fname: studentFName,
            student_Mname: studentMName,
            student_email: studentEmail,
            student_status: studentStatus,
            action: "update",
        }
        console.log(data);
        $.ajax({
            url: "./operational-functions/modal-updation.php",
            type: "POST",
            data:  data, 
            success: function(response){
                showData();
                $('#editModal').modal('hide');
                $('.msg').show();
                $('.msg').html(response);
                $(".msg").fadeOut(3000);
				$("#modalEditStudentName").val("")
				$("#modalEditStudentFName").val("")
				$("#modalEditStudentMName").val("")
				$("#modalEditStudentEmail").val("")
				$("#modalEditStudentStatus").val("")
            }
        })
    });

});