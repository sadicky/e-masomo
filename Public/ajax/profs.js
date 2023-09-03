$(document).ready(function () {
    // getclientegories();
    $("#formulaire").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: "Public/script/addprof.php",
            method: "POST",
            type:"post",
            data:$("#formulaire").serialize(),
            success: function (data) {
                $('#message').html(data).slideDown();
                $("#formulaire")[0].reset();
                $("#add-prof").modal("hide");
            },
            error: function(d){
              $('#messages').html(d).slideDown();
              $("#formulaire")[0].reset();
              $("#add-prof").modal("hide");              
            }
        });
    });

    $(".submitpc").click(function (event) {
      event.preventDefault();
      $.ajax({
          url: "Public/script/addprofcours.php",
          method: "POST",
          type:"post",
          data:$("#formaffcours").serialize(),
          success: function (data) {
              $('#message').html(data).slideDown();
              $("#formaffcours")[0].reset();
              $("#Affecter").modal("hide");
          }
      });
  });

    $(document).on("click", ".delete", function (event) {
        event.preventDefault();
          var id = $(this).attr("id");
          if (confirm("Voulez-vous supprimer? ")) {
            $.ajax({
              url: "Public/script/deleteprof.php",
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
              url: "Public/script/viewtechbeforedit.php",
              method: "post",
              data: {
                id: id
              },
              success: function(data) {
                $('#tech_detail').html(data);
                $('#edit-tech').modal("show");
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

            
  $('.view_prof').click(function(event) {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/viewprofbeforaffect.php",
      method: "post",
      data: {
        id: id
      },
      success: function(data) {
        $('#affprof').html(data);
        $("#Affecter").modal("show"); 
      }
    });
  });

  $(document).on('click','.submit',function () {
      $.ajax({
        url: "Public/script/addprofcours.php",
        method: "POST",
        data: $("#formaffcours").serialize(),
        success: function (donnees) {
          $('#message').html(donnees).slideDown();
          $("#Affecter").modal("hide");
          // setInterval(refreshPage, 1000);
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

    function getTech(){
        window.location.href='index.php?p=technicians'
    }

});