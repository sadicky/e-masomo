$(document).ready(function () {
    // getclientegories();
    $("#formulaire").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: "Public/script/addcours.php",
            method: "POST",
            type:"post",
            data:$("#formulaire").serialize(),
            success: function (data) {
                $('#message').html(data).slideDown();
                $("#formulaire")[0].reset();
                $("#add-cours").modal("hide");
            }
        });
    });

    
       
    $(document).on("click", ".delete", function (event) {
        event.preventDefault();
          var id = $(this).attr("id");
          if (confirm("Voulez-vous supprimer? ")) {
            $.ajax({
              url: "Public/script/deletecours.php",
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
              url: "Public/script/viewcoursbeforedit.php",
              method: "post",
              data: {
                id: id
              },
              success: function(data) {
                $('#market_detail').html(data);
                $('#edit-cours').modal("show");
              }
            });
          });
          //
          $(document).on('click', '.submit', function() {
            $.ajax({ 
              url: "Public/script/editcours.php",
              type: "post",
              data: $("#formeditcourst").serialize(),
              success: function(data) {
                $("#messages").html(data).slideDown();
                $("#edit-cours").modal('hide');
                
              }
      
            });
            return false;
          });

          
    
  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous activer cet agent ? ")) {
        $.ajax({
          url: "Public/script/activcours.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {   
            getCours();
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
          url: "Public/script/desactivcours.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {
            getCours();
          }
        });
      } else {
        return false;
      }
    });

    function getCours(){
        window.location.href='index.php?p=cours'
    }

});