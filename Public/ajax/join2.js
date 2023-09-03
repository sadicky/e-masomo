$(document).ready(function () {

    $('#dep').on('change',function(){
        let dep = $(this).val();
        if(dep){
            $.ajax({
                type:'POST',
                url:'Public/script/join3.php',
                data:'dep='+dep,
                success:function(d){
                    $('#classe').html(d);
                    $('#cours').html("<option value=''>Non Dispo</option>");
                }

            });
        }else{
             $('#cours').html("<option value=''>Non Dispo</option>");
        }
    });

    $('#classe').on('change',function(){
        let classe = $(this).val();
        if(classe){
            $.ajax({
                type:'POST',
                url:'Public/script/join3.php',
                data:'classe='+classe,
                success:function(d){
                    $('#cours').html(d);
                }
            });
        }
    });
});