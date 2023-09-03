$(document).ready(function () {

    // $('#dep').on('change',function(){
    //     let device = $(this).val();
    //     if(device){
    //         $.ajax({
    //             type:'POST',
    //             url:'Public/script/join2.php',
    //             data:'dep='+device,
    //             success:function(d){
    //                 $('#niv').html(d);
    //                 $('#defect').html("<option value=''>Choisir </option>");
    //             }

    //         });
    //     }else{
    //          $('#defect').html("<option value=''>Choisir </option>");
    //     }

    // });


    $('#dep').on('change',function(){
        let dep = $(this).val();
        if(dep){
            $.ajax({
                type:'POST',
                url:'Public/script/join2.php',
                data:'dep='+dep,
                success:function(d){
                    $('#niv').html(d);
                }

            });
        }
    });



});