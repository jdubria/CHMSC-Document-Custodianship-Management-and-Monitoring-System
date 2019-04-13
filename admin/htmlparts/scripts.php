<script type="text/javascript">
$(document).ready(function(){
    setInterval(function(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "includes/loop.php", false);
        xmlhttp.send(null);
        var d = new Date(xmlhttp.responseText);
        var date = d.getDate();

        var month = d.getMonth();
        var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
        month=montharr[month];

        var year = d.getFullYear();

        var day = d.getDay();
        var dayarr =["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"];
        day=dayarr[day];

        var hour =d.getHours();
        var min = d.getMinutes();
        var sec = d.getSeconds();
        var ampm = hour >= 12 ? 'PM' : 'AM';
        hour = hour % 12;
        hour = hour ? hour : 12;

        document.getElementById("date").innerHTML=day+", "+date+" "+month+" "+year;
        document.getElementById("time").innerHTML=hour+":"+min+":"+sec +" "+ampm;
        document.getElementById("dates").innerHTML=day+", "+date+" "+month+" "+year;
        document.getElementById("times").innerHTML=hour+":"+min+":"+sec +" "+ampm;

    }, 1000);


    $('body').tooltip({
        selector: "[data-tooltip=tooltip]",
        container: "body"
    });

   $('#logout').click(function(){
       var r = window.confirm("Are you sure you want to log-out?");
       if( r == true ){
           window.location.assign("../logout.php");
       }else{
           
       }
   });

    $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });     
    


setInterval(function(){
var xmlhttps = new XMLHttpRequest();
    xmlhttps.open("GET", "includes/example.php", false);
    xmlhttps.send(null);
    alert(xmlhttps.responseText);    
}, 10800000);
// 

    var aurl = window.location.href; // Get the absolute url
       $('.list-group li a').filter(function() { 
            return $(this).prop('href') === aurl;
    }).parent('li').addClass('active');


// ==============================================================================================================
// ==============================================================================================================
// ==============================================================================================================

$(document).on('click', '#dropdownni', function(){
  $('.count').html('');
  load_unseen_notification('yes');
}); 

function load_unseen_notification(view = ''){
  $.ajax({
    url:"includes/fetch.php",
    method:"POST",
    data:{view:view},
    dataType:"json",
    success:function(data){
      $('#menu').html(data.notification);

      if (data.unseen_notification > 0) {
        $('.count').html(data.unseen_notification);
      }
  }

  });
}

load_unseen_notification();

setInterval(function(){
  load_unseen_notification(); 
}, 3000);


});

</script>

  <script>
$('input[type="date"]').each(function(){  

    var now = $(this).attr('value').split("-");
    var today = now[1]+"/"+now[2]+"/"+now[0]; //mm/dd/yyyy        
    $(this).val(today);

});            
  </script>  


