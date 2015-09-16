

var main = function(){
    var queryString = new Array();
    if (window.location.search.split('?').length > 1) {
        var params = window.location.search.split('?')[1].split('&');
        for (var i = 0; i < params.length; i++) {
            var key = params[i].split('=')[0];
            var value = decodeURIComponent(params[i].split('=')[1]);
            queryString[key] = value;
        }
    }
    
    var name;
    var partner;
      $.ajax({
            type: 'GET',
            url: "http://143.44.10.35:80/participants/api/participants/"+queryString["id"] ,
            success: function(data){
               partner = data[number]["partner"];
              if (partner===1)
              {
                name="Michael";
              }else{
                name ="Michelle";
              }
              $("#name").attr("value", name);
            },
            error: function(request, status, error){
               //alert(error);
            }
         });
        
     document.getElementById("next").onclick = function () {
         var url = "index.php?id=" + encodeURIComponent(queryString["id"]) + "&partner=" + encodeURIComponent(partner);
          location.href = url;
      }
        
};

$(document).ready(main);