$(function() {
  $("#asztalok").change(function(){
    var ido = $("input#asztalok").val();
    $.ajax({
      url: "././control/szabad-asztalok.php",
      type: "GET",
      data: {
        ido: ido
      },
      cache: false,
      success: function(msg) {
        $(".asztal > div").removeClass("foglalt");
        id_numbers = JSON.parse(msg);
        var arrayLength = id_numbers.length;
        for (var i = 0; i < arrayLength; i++) {
            $("#asztal-" + id_numbers[i] + " > div").addClass("foglalt");
            //Do something
        }

      },
      error: function() {

      },
      complete: function() {
        
      }
    });
  });
});
