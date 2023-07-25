$(document).ready(function () {
    // getclientegories();
    $("#formulaire").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: "Public/script/addmarket.php",
            method: "POST",
            type:"post",
            data:$("#formulaire").serialize(),
            success: function (data) {
                $('#message').html(data).slideDown();
                $("#formulaire")[0].reset();
                $("#add-market").modal("hide");
            }
        });
    });

    
       
    $(document).on("click", ".delete", function (event) {
        event.preventDefault();
          var id = $(this).attr("id");
          if (confirm("Voulez-vous supprimer? ")) {
            $.ajax({
              url: "Public/script/deletemarket.php",
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

        $('.view_data').click(function() {
            var id = $(this).attr("id");
            $.ajax({
              url: "Public/script/viewmarketbeforedit.php",
              method: "post",
              data: {
                id: id
              },
              success: function(data) {
                $('#market_detail').html(data);
                $('#edit-market').modal("show");
              }
            });
          });
          //
          $(document).on('click', '.submit', function() {
            $.ajax({ 
              url: "Public/script/editmarket.php",
              type: "post",
              data: $("#formeditmarket").serialize(),
              success: function(data) {
                $("#messages").html(data).slideDown();
                $("#edit-market").modal('hide');
                
              }
      
            });
            return false;
          });

          
    
  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous activer cet agent ? ")) {
        $.ajax({
          url: "Public/script/activmarket.php",
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
      if (confirm("Voulez-vous suspendre cet agent ? ")) {
        $.ajax({
          url: "Public/script/desactivmarket.php",
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

    function getTech(){
        window.location.href='index.php?p=marketters'
    }

});