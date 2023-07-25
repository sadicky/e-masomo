$(document).ready(function () {

    $('#brand').on('change',function(){
        let device = $(this).val();
        if(device){
            $.ajax({
                type:'POST',
                url:'Public/script/join2.php',
                data:'device='+device,
                success:function(d){
                    $('#device').html(d);
                    $('#defect').html("<option value=''>Choisir </option>");
                }

            });
        }else{
             $('#defect').html("<option value=''>Choisir </option>");
        }

    });


    $('#device').on('change',function(){
        let defect = $(this).val();
        if(defect){
            $.ajax({
                type:'POST',
                url:'Public/script/join2.php',
                data:'defect='+defect,
                success:function(d){
                    $('#defect').html(d);
                }

            });
        }
    });



});