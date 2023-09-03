$(document).ready(function () {
    // getclientegories();
    $("#formulaire").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: "Public/script/adddep.php",
            method: "POST",
            type:"post",
            data:$("#formulaire").serialize(),
            success: function (data) {
                $('#message').html(data).slideDown();
                $("#formulaire")[0].reset();
                $("#add-dep").modal("hide");
            }
        });
    });

    
       
    $(document).on("click", ".delete", function (event) {
        event.preventDefault();
          var id = $(this).attr("id");
          if (confirm("Voulez-vous supprimer? ")) {
            $.ajax({
              url: "Public/script/deletedep.php",
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
              url: "Public/script/viewdepbeforedit.php",
              method: "post",
              data: {
                id: id
              },
              success: function(data) {
                $('#device_detail').html(data);
                $('#edit-dep').modal("show");
              }
            });
          });
          //
          $(document).on('click', '.submit', function() {
            $.ajax({ 
              url: "Public/script/editdep.php",
              type: "post",
              data: $("#formeditdep").serialize(),
              success: function(data) {
                $("#messages").html(data).slideDown();
                $("#edit-dep").modal('hide');
                
              }
      
            });
            return false;
          });
});