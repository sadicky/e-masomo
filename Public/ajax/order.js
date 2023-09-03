$(document).ready(function () {
    // getclientegories();
    $("#formulaire").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: "Public/script/addorder.php",
            method: "POST",
            type:"post",
            data:$("#formulaire").serialize(),
            success: function (data) {
                $('#message').html(data).slideDown();
                $("#formulaire")[0].reset();
                redirect();
            }
        });
    });

    
       
    $(document).on("click", ".delete", function (event) {
        event.preventDefault();
          var id = $(this).attr("id");
          if (confirm("Voulez-vous supprimer? ")) {
            $.ajax({
              url: "Public/script/deletetech.php",
              method: "POST",
              data: {
                id: id
              },
              success: function (data) {}
            });
          } else {
            return false;
          }
        });

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
          $(document).on('click', '.submit', function() {
            $.ajax({ 
              url: "Public/script/edittech.php",
              type: "post",
              data: $("#formedittech").serialize(),
              success: function(data) {
                $("#messages").html(data).slideDown();
                $("#edit-tech").modal('hide');
                
              }
      
            });
            return false;
          });

          
    
  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous activer ce technicien ? ")) {
        $.ajax({
          url: "Public/script/activtech.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {            
            getTech();
          }
        });
      } else {
        return false;
      }
    });
    
    $(document).on("click", ".desactiver", function (event) {
    event.preventDefault();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous suspendre ce technicien ? ")) {
        $.ajax({
          url: "Public/script/desactivtech.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {
            getTech();
          }
        });
      } else {
        return false;
      }
    });

    function redirect(){
        window.location.href='index.php?p=orders'
    }

});