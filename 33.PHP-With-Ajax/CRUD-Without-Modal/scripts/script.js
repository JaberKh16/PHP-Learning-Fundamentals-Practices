jQuery(document).ready(function() {
    fetchData();
    function fetchData(){
        $.ajax({
            url:"./operational-functions/functions.php",
            type:"POST",
            data:{
                action: "method_fetch_data"
            },
            success: function(response){
                $('#tableData').html(response);
            }
        });
    }
    
    jQuery('#btnAdd').on('click', function(e){
        e.preventDefault();

        // get the data
        const productCode = $('#productCode').val();
        const productName = $('#productName').val();
        const productType = $('#productType').val();
        const productBarCode = $('#productBarCode').val();
        const productPrice = $('#productPrice').val();
        const productStatus = $('#productStatus').val();

        $.ajax({
            url:"./operational-functions/functions.php",
            type:"POST",
            data:{
                product_code: productCode,
                product_name: productName,
                product_type: productType,
                product_barcode: productBarCode,
                product_price: productPrice,
                product_status: productStatus,
                action: "method_modal_add_data"
            },
            success: function(response){
                fetchData();
                $('.msg').show();
                $('.msg').html(response);
                $('.msg').fadeOut(3000);
                $('#productCode').val("");
                $('#productName').val("");
                $('#productType').val("");
                $('#productBarCode').val("");
                $('#productPrice').val("");
                $('#productStatus').val("");
            }
        });
    });


    jQuery('#btnModalAddStudent').on('click', function(e){
        e.preventDefault();

        // get the data
        const productCode = $('#productModalCode').val();
        const productName = $('#productModalName').val();
        const productType = $('#productModalType').val();
        const productBarCode = $('#productModalBarCode').val();
        const productPrice = $('#productModalPrice').val();
        const productStatus = $('#productModalStatus').val();

        $.ajax({
            url:"./operational-functions/functions.php",
            type:"POST",
            dataType: "html",
            data:{
                product_code: productCode,
                product_name: productName,
                product_type: productType,
                product_barcode: productBarCode,
                product_price: productPrice,
                product_status: productStatus,
                action: "method_add_data"
            },
            success: function(response){
                fetchData();
                $('#insertModal').modal('hide');
                $('.msg').show();
                $('.msg').html(response);
                $('.msg').fadeOut(3000);
                $('#productModalCode').val("");
                $('#productModalName').val("");
                $('#productModalType').val("");
                $('#productModalBarCode').val("");
                $('#productModalPrice').val("");
                $('#productModalStatus').val("");
            }
        });
        
    })

    jQuery(document).on('click', '#btnDelete', function(){
        const id = $(this).attr('pid');
        // set to the modal id modal confirm button
        $('.btnModalDeleteConfirm').attr('pid', id);
    })

    jQuery(document).on('click', '.btnModalDeleteConfirm', function(e){
        const id = $(this).attr('pid');
        // set to the modal id modal confirm button
        $.ajax({
            url:"./operational-functions/functions.php",
            type:"POST",
            data:{
                pid:id,
                action: "method_delete_data"
            },
            success: function(response){
                fetchData();
                $('#deleteModal').modal('hide');
                $('.msg').show();
                $('.msg').html(response);
                $('.msg').fadeOut(3000);
            }
        });
    });

    jQuery(document).on('click', '#sold', function(e) {
        const id = $(this).attr('pid');
        $.ajax({
            url:"./operational-functions/functions.php",
            type:"POST",
            data:{
                pid:id,
                action: "method_change_sold_status"
            },
            success: function(response){
                fetchData();
                $('.msg').show();
                $('.msg').html(response);
                $('.msg').fadeOut(3000);
            }
        });
    });

    jQuery(document).on('click', '#stock', function(e) {
        const id = $(this).attr('pid');
        $.ajax({
            url:"./operational-functions/functions.php",
            type:"POST",
            data:{
                pid:id,
                action: "method_change_stock_status"
            },
            success: function(response){
                fetchData();
                $('.msg').show();
                $('.msg').html(response);
                $('.msg').fadeOut(3000);
            }
        });
    });

    jQuery(document).on('click', '#btnEdit', function(e) {
        const id = $(this).attr('pid');
        // set the pid to the btnUpdate
        $('#btnUpdate').attr('pid', id);
        $('#btnAdd').hide();
        $.ajax({
            url:"./operational-functions/functions.php",
            type:"POST",
            dataType:"json",
            data:{
                pid:id,
                action: "method_find_data"
            },
            success: function(response){
                console.log(response[0]);
                $('#btnUpdate').show();
                if(response != undefined){
                    $('#productCode').val(response[0].product_code);
                    $('#productName').val(response[0].product_name);
                    $('#productType').val(response[0].product_type);
                    $('#productBarCode').val(response[0].product_barcode);
                    $('#productPrice').val(response[0].product_price);
                    $('#productStatus').val(response[0].product_status);
                }
            }
        });

    });

    jQuery(document).on('click', '#btnUpdate', function(e) {
        e.preventDefault(); 
        
        const id = $(this).attr('pid');
        // get the data
        const productCode = $('#productCode').val();
        const productName = $('#productName').val();
        const productType = $('#productType').val();
        const productBarCode = $('#productBarCode').val();
        const productPrice = $('#productPrice').val();
        const productStatus = $('#productStatus').val();

        $.ajax({
            url:"./operational-functions/functions.php",
            type:"POST",
            data:{
                pid:id,
                product_code: productCode,
                product_name: productName,
                product_type: productType,
                product_barcode: productBarCode,
                product_price: productPrice,
                product_status: productStatus,
                action: "method_update_data"
            },
            success: function(response){
                console.log(response[0]);
                $('#btnUpdate').hide();
                $('#btnAdd').show();
                fetchData();
                $('.msg').show();
                $('.msg').html(response);
                $('.msg').fadeOut(3000);
                $('#productCode').val("");
                $('#productName').val("");
                $('#productType').val("");
                $('#productBarCode').val("");
                $('#productPrice').val("");
                $('#productStatus').val("");
            }
        });

    });

    
    
})