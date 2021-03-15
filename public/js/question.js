$(document).on('click', '.addNumber', function () {
    var key = $(this).attr('data-id');
    var checkNull = $( "#arrayAvalues" ).val();
    var array = $( "#arrayAvalues" );
    if(checkNull == ''){
      array.val( array.val() + key);
    }else{
      array.val( array.val() + ','+ key);
    }
});
$(document).on('click', '.getAns', function () {
    var key1 = $('#arrayAvalues').val().split(",");
    var returnObj = {};
    var data = '';
    $.each(key1, function(key,value) {
      var numOccr = $.grep(key1, function (elem) {
          return elem === value;
      }).length;
      returnObj[value] = numOccr;
    });
    $.each(returnObj, function(key,value) {
    data+="<tr><td>"+key+"</td><td>"+value+"</td>";
  });
    $('.occuranceTable').append(data);
});
/*$(document).ready(function(){
    $("#panel").hide();
    $("#panel1").hide();
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});*/


