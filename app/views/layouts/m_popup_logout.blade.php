<?php 
    $mod = "";
?>

<div class="row" style="margin-top:20px;">        
    <button class="btn btn-danger" style="display:block;margin-left:auto;margin-right:auto;">
        <a href="{{ URL::route('m_logout') }}" style="color:white;" id="f_confirm_logout">logout</a>
    </button>        
</div>

<script>
    $(document).ready(function(){
        //removeloader
        $('.f_loader_container').addClass('hidden');                        
    });   

    $('body').on('click', '#f_confirm_logout', function(){
        //showloader
        $('.f_loader_container').removeClass('hidden');        
    });      
</script>