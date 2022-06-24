<style>
    .setting-box{
        margin:10px auto;
        background-color:#fff;
        border:1px solid #ccc;
        box-shadow:0 0 7px #ccc;
        border-radius:7px;
        padding:10px;
        text-align:center;
        color:#444;
        line-height:35px;
    }
    .large-font{
        font-size:20px;
    }
    .success{
        color:green;
        text-align:center;
    }
    .save-btn{
        width:20%;
    }
</style>
<div class="wrap">
    <div class="setting-box" dir="ltr">
    <h1>setting</h1>
    <form method="post">
    <input type="checkbox" name="activation"> delete options
    <br>
    <button name="save-setting-btn" class="button button-primary save-btn">save</button>
    </form>
    </div>
</div>
<?php
if(isset($_POST['save-setting-btn']) && !empty($_POST['activation'])){
    delete_option('content-word1');
    delete_option('content-word2');
    delete_option('content-word3');
    delete_option('content-word4');
    delete_option('content-word5');
    delete_option('filter-word1');
    delete_option('filter-word2');
    delete_option('filter-word3');
    delete_option('filter-word4');
    delete_option('filter-word5');
    ?>
    <h2 class="large-font success" dir="ltr">deleted successfully !</h2>
    <?php
}
?>
