$(document).ready(function () {
    // getclientegories();
   

        $('.viewpay').click(function() {
            var id = $(this).attr("id");
            $.ajax({
              url: "Public/script/viewpay.php",
              method: "post",
              data: {
                id: id
              },
              success: function(data) {
                $('#pay_detail').html(data);
                $('#add-pay').modal("show");
              }
            });
          });
          //
          $(document).on('click', '#submit', function() {
            $.ajax({ 
              url: "Public/script/addpay.php",
              type: "post",
              data: $("#formpay").serialize(),
              success: function(data) {
                $("#messages").html(data).slideDown();
                $("#add-pay").modal('hide');                
              }
      
            });
            return false;
          });


          
          $(document).on('click', '.print', function() {
            var id = $(this).attr("id");
            $.ajax({
              url: "Public/script/print.php",
              method: "post",
              data: {
                id: id
              },
              
              success: function(data) {
                
              }
            });
          });
          

    function redirect(){
        window.location.href='index.php?p=orders'
    }

});