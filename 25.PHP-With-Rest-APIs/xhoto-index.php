<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include 'include/topbar.php';?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <!--<h6 class="text-gray-800">Create Link</h6>-->
            <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Create Link</div>
            <hr class="sidebar-divider">
            
       
            
            
            <!-- Saction Start -->
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-12 mx-auto">
                                    
                                    <div class="">
                                        
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="">
  
                                            <div class="col--12 col-md-12">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="link">Link</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-link"></i></div>
                                                        </div>
                                                        
                                        <input type="url" id="link" name="link" placeholder="For example https://google.com" <?php if($_POST['link'] != NULL) echo 'value="'.$_POST['link'].'"' ?> class="form-control" onclick="SafeBrowserAPIResponse()">
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="col--12 col-md-12">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="link">Custom Short Link</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                                                        </div>
                                                        
                                        <input type="text" id="cust_link" name="cust_link" placeholder="Optional" class="form-control">    
                                                    </div>
                                                </div>
                                            </div>
                                
                                        <input type="hidden" id="userid" name="userid" value="<?php echo $UID; ?>">
                                            <!--<div class="form-group">-->
                                            <!--    <div class="input-group">-->
                                            <!--        <div class="input-group-addon">Password</div>-->
                                            <!--        <input type="password" id="password3" name="password3" class="form-control">-->
                                            <!--        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                            <div class="col--12 col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-md float-right pl-5 pr-5">Submit</button>
                                                    <?php if(!empty($message)){
                                                        if($message=='no_unique')
                                                            {
                                                                echo "This shortlink is already taken. Please choose another.";
                                                            }
                                                            else { ?>
                                                                Shorten Link:<input type="text" class="alert alert-success" value="<?php echo 'http://xho.to/'.$message; ?>" id="myInput">
                                                                <button class="btn btn-secondary" onclick="clickCopy()" type="button">Copy</button>
                                                                <?php
                                                
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </form>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->
            


<?php include 'include/footer.php';?>

<script>
    function clickCopy() {
      var copyText = document.getElementById("myInput");
      copyText.select();
      document.execCommand("copy");
      alert("Copied Succesfully: " + copyText.value);
    }
</script>
<script>
    function clickCopyd(myInputn) {
      var copyTextd = document.getElementById(myInputn);
      copyTextd.select();
      document.execCommand("copy");
      alert("Copied Succesfully: " + copyTextd.value);
    }
</script>

