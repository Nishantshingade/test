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


$(document).on('click','.getAnsq3',function(){
     var key = $('#arrayAvalues').val();
     var data = '';var returnObj = {};
        $.ajaxSetup({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        }); 
       jQuery.ajax({
          url: '/q3/ans',
          method: 'POST',
          data: {
             key: key
          },
          success: function(result){
          if(result == ''){
            data+="<tr><td>No Data Found</td></tr>";
          }else{
            $.each(result, function(key,value) {
                var digits = (""+value).split("");
                data+="<tr><td>"+(key+1)+"</td><td>"+digits+"</td>";
            });
          }     
            $('.occuranceTable').append(data);

          }
      });
});


