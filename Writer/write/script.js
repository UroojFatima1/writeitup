$(document).ready(function(){
    function autosave(){
        var chap=$('#chap').val();
        var story=$('#story').val();
        var id=$('#id').val();
        if (chap!='' && story!=''){
            $.ajax({
                url:"writeback.php",
                method:"POST",
                data:{chapterNumber:chap,text:story,id:id},
                dataType:"text",
                success:function(data){
                    if (data!=''){$('#id').val(data);}
                    $('#autosave').text("Saved as draft");
                    setInterval(function(){
                        $('#autosave').text('');
                    },2000);
                }
            });
        }
    }
    setInterval(function(){
        autosave();
    },2000);
});