<?php
if (isset($_COOKIE['selected_id'])) {
    $selectedId = $_COOKIE['selected_id'];
}
?>
<style> 
 .selected{
    background-color: blue;
 }
</style>
<a href="#" id="link1">Link 1</a>
<a href="#" id="link2">Link 2</a>
<a href="#" id="link3">Link 3</a>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
    // Select anchor tag and store its id in a cookie
    $("a").click(function () {
        var selectedId = $(this).attr("id");
        document.cookie = "selected_id=" + selectedId;
    });

    // On page load, retrieve the stored id from the cookie and set the selected state
    $(document).ready(function () {
        <?php if (isset($selectedId)): ?>
            $("#<?php echo $selectedId; ?>").addClass("selected");
        <?php endif; ?>
    });

    // On page load, retrieve the stored id from the cookie and set the selected state
    // $(document).ready(function () {
    //     <?php if (isset($selectedId)): ?>
    //         $("#<?php echo $selectedId; ?>").addClass("selected");
    //     <?php endif; ?>
    // });
</script>
