<?php if (!defined('THINK_PATH')) exit();?><script src='/Public/home/js/jQuery v1.4.3.js'></script>
<div style="position:fixed;right:0;bottom:10px;margin:0;display:none;" class="alert alert-danger alert-dismissible" id="notice">
    <button type="button" class="close" onclick="$('#notice').hide();"><span aria-hidden="true">&times;</span></button>
    <span id="msg"></span>
</div>
<audio src="/media/2.mp3" id="audio" style="display:none;"></audio>
<?php if(empty($oid)) {?>
<script>
    var audio = document.getElementById('audio');
    if (window.EventSource) {
        var source = new EventSource('/index.php/Home/index/demo');
        source.onmessage = function(e) {
            if (e.data == 'empty') {return;}
            audio.play();
            $("#msg").html(e.data);
            $("#notice").show();
            //setTimeout(function() {$("#notice").hide();}, 10000);
            console.log(e.data);    
        };
        source.onopen = function(e) {
            console.log('建立连接成功');
        };
        source.onerror = function(e) {
            console.log('连接建立失败');
            console.log(e);
        }
    } else {
        console.log('浏览器不支持SSE');
    }

</script>
<?php }?>