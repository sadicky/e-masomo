$(document).ready(function () {
  $("#submit").click(function (event) {
    event.preventDefault();
    $.ajax({
        url: "Public/script/verify.php",
        method: "POST",
        data:$("#formverify").serialize(),
        success: function (data) {
            $('#message').html(data).slideDown();
            $("#formverify")[0].reset();
        }
    });
});

});