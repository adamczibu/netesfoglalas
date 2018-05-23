Date.prototype.addHours= function(h){
    this.setHours(this.getHours()+h);
    return this;
}
  $(function(){
    $('#szemelyek').timepicker({
      'disableTextInput': true,
      'timeFormat': 'H',
      'minTime': '1',
      'maxTime': '6',
      'step' : '60'
    });
    $('#erkezes').timepicker({
      'disableTextInput': true,
      'timeFormat': 'H.i',
      'minTime': '08.00',
      'maxTime': '23.00',
      'step' : '30'
    });
    $('#tavozas').timepicker({
      'disableTextInput': true,
      'timeFormat': 'H.i',
      'minTime': '09.00',
      'maxTime': '00.00',
      'step' : '30'
    });
    $('#asztalok').timepicker({
      'disableTextInput': true,
      'timeFormat': 'H.i',
      'minTime': '08.00',
      'maxTime': '23.00',
      'step' : '30'
    });

    /****************/
    /* Erkezes idopont kivalasztasakor a tavozasnal nem lehet korabbi idopont */
    /* Ha korabban valasztja ki a tavozast kitorli az erkezes modositasa ha rosszul allitotta be */
    /****************/
    $('#erkezes').change(function(){
      let newtime = $("#erkezes").timepicker('getTime').addHours(1);
      $('#tavozas').timepicker('option', 'minTime', newtime);
      if ($('#tavozas').val() < $('#erkezes').val()) {
        $('#tavozas').val('');
      }

    })
    $('.timepickerek').focus(function(){
      $(this).parent(".form-group").addClass("floating-label-form-group-with-value");
    })
    $('.timepickerek').change(function(){
      $(this).parent(".form-group").addClass("floating-label-form-group-with-value");
    })
    /****************/
    /* Az oldal betoltese utan kivalasztjuk a 8.00 idopontot */
    /****************/
    $("#asztalok").val("08.00");
    $("#asztalok").trigger("change");

    /****************/
    /* Ha asztalra nem foglalt asztalra kattint odacsuszik es beirja a tablazatba az asztal szamat */
    /****************/
    $(".asztal > div.bg-primary:not('.foglalt')").click(function(){
      $("html, body").animate({
          scrollTop: $("#contact").offset().top - 70
      }, 1e3, "easeInOutExpo")

      $("#asztalszam").val($(this).parent(".asztal").attr("id").substr(-1));

    })

  })
