var $dOut = $('#datefield'),
    $tOut = $('#time'),
    $dayOut = $('#day');

var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

function update(){
  var date = new Date();
  
  var ampm = date.getHours() < 12
             ? 'AM'
             : 'PM';
  
  var hours1 = date.getHours() == 0
              ? 12
              : date.getHours() > 12
                ? date.getHours() - 12
                : date.getHours();

  var hours = hours1 < 10 
                ? '0' + hours1 
                : hours1;
  
  var minutes = date.getMinutes() < 10 
                ? '0' + date.getMinutes() 
                : date.getMinutes();
  
  var dayOfWeek = days[date.getDay()];
  var month = months[date.getMonth()];
  var day = date.getDate();
  var year = date.getFullYear();
  
  var dateString = day + ' ' + month + ' ' + year;
  var timeString = hours + ":" + minutes + " " + ampm;
  
  $dOut.text(dateString);
  $tOut.text(timeString);
  $dayOut.text(dayOfWeek);
} 

update();
window.setInterval(update, 1000);