$(document).ready(function () {
    // getclientegories();
    $("#formulaire").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: "Public/script/addpromo.php",
            method: "POST",
            type:"post",
            data:$("#formulaire").serialize(),
            success: function (data) {
                $('#message').html(data).slideDown();
                $("#formulaire")[0].reset();
                $("#add-promo").modal("hide");
            }
        });
    });

    
       
    $(document).on("click", ".delete", function (event) {
        event.preventDefault();
          var id = $(this).attr("id");
          if (confirm("Voulez-vous supprimer? ")) {
            $.ajax({
              url: "Public/script/deletepromo.php",
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

        $('.view_data').click(function() {
            var id = $(this).attr("id");
            $.ajax({
              url: "Public/script/viewpromobeforedit.php",
              method: "post",
              data: {
                id: id
              },
              success: function(data) {
                $('#promo_detail').html(data);
                $('#edit-promo').modal("show");
              }
            });
          });
          //
          $(document).on('click', '.submit', function() {
            $.ajax({ 
              url: "Public/script/editpromo.php",
              type: "post",
              data: $("#formeditbrand").serialize(),
              success: function(data) {
                $("#messages").html(data).slideDown();
                $("#edit-brand").modal('hide');
                
              }
      
            });
            return false;
          });
});