<?php
 if(isset($_POST['send-infos-btn'])){
    update_option('content-word1' , $_POST['content-word1']);
    update_option('content-word2' , $_POST['content-word2']);
    update_option('content-word3' , $_POST['content-word3']);
    update_option('content-word4' , $_POST['content-word4']);
    update_option('content-word5' , $_POST['content-word5']);
    update_option('filter-word1' , $_POST['filter-word1']);
    update_option('filter-word2' , $_POST['filter-word2']);
    update_option('filter-word3' , $_POST['filter-word3']);
    update_option('filter-word4' , $_POST['filter-word4']);
    update_option('filter-word5' , $_POST['filter-word5']);
    ?>
     <p class="large-font success" style="text-align:center;" dir="ltr">filters saved successfull!</p>
     <?php
}
?>
<style>
    .large-font{
        font-size:20px;
    }
    .text-header{
        text-align:center;
        color:#008ae6;
    }
    .filters-box{
        margin:10px auto;
        background-color:#fff;
        border:1px solid #ccc;
        box-shadow:0 0 7px #ccc;
        border-radius:7px;
        padding:10px;
        text-align:center;
        color:#444;
    }
    .success{
        color:green;
    }
    input{
        display:block;
        width:50%;
        margin:10px auto;
    }
    button{
        width:20%;
    }
</style>
<div class="wrap" dir="ltr">
    <h1 class="text-header">set your filters here</h1>
    <div class="filters-box">
            <div class="add-filter">
                <h2>add or update your filters</h2>
                <div class="filter-content">
                    <h3>type the words in your content</h3>
                    <form method="post">
                        <input type="text" name="content-word1" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('content-word1');
                            }?>>
                        <input type="text" name="content-word2" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('content-word2');
                            }?>>
                        <input type="text" name="content-word3" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('content-word3');
                            }?>>
                        <input type="text" name="content-word4" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('content-word4');
                            }?>>
                        <input type="text" name="content-word5" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('content-word5');
                            }?>>
                </div>
                <div class="filter-words">
                <h3>type the words you want to replace</h3>
                    <input type="text" name="filter-word1" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('filter-word1');
                            }?>>
                    <input type="text" name="filter-word2" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('filter-word2');
                            }?>>
                    <input type="text" name="filter-word3" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('filter-word3');
                            }?>>
                    <input type="text" name="filter-word4" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('filter-word4');
                            }?>>
                    <input type="text" name="filter-word5" placeholder="type..." value=<?php
                         if(!empty(get_option('content-word1'))){
                            echo get_option('filter-word5');
                            }?>>
                    <button class="button button-primary" name="send-infos-btn">send</button>
                </div>
                </form>
                <p class="large-font">
                If you want to filter more than 5 items, you must use the <a href="#">Pro version</a> .
                </p>
            </div>
    </div>
</div>