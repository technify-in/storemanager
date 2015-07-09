



<script type="text/javascript">


$(function(){




	// for distributor------------------------------------

	      var xmlhttp2;
              var res2;
            if (window.XMLHttpRequest)
              {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp2=new XMLHttpRequest();
              }
            else
              {// code for IE6, IE5
              xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp2.onreadystatechange=function()
              {
              if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
                {
                  var res2 = JSON.parse(xmlhttp2.responseText);
                  var input2 = JSON.stringify(res2);
                  $.jsontotable(input2, { id: "#data-table2", header: true });

                $($('table')[1]).sieve();

                $('#data-table2').width($($('table')[1]).width());


                }
              }


            xmlhttp2.open("POST","fetch/distributors.php" ,true);
            xmlhttp2.send();



/////////////////////////////////////////////////////////////////////////////////////////

              var xmlhttp;
              var res;
            if (window.XMLHttpRequest)
              {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp=new XMLHttpRequest();
              }
            else
              {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function()
              {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                  var res = JSON.parse(xmlhttp.responseText);
                  var input = JSON.stringify(res);
                  $.jsontotable(input, { id: "#data-table", header: true });
                  $('table').sieve();
                $('#data-table').width($('table').width())

                $($('#data-table').children()[0]).addClass("searchbar");
                $($('#data-table').children()[0]).append($(".add_pro"))
                $($('#data-table2').children()[0]).addClass("searchbar");
                    $($('#data-table2').children()[0]).append($(".add_pro2"))

                }
              }


            xmlhttp.open("POST","fetch/products.php" ,true);
            xmlhttp.send();



// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date($('.server_time').val() );
// Extract the current date from Date object

// Output the day, date, month and year
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);

setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);

setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);




	}



          );


</script>
