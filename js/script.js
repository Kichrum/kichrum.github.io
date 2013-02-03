var setCookie = function(c_name,value,exdays)
{
  var exdate=new Date();
  exdate.setDate(exdate.getDate() + exdays);
  var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
  document.cookie=c_name + "=" + c_value;
}

var getCookie = function(c_name)
{
  var i,x,y,ARRcookies=document.cookie.split(";");
  for (i=0;i<ARRcookies.length;i++)
  {
    x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
    y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
    x=x.replace(/^\s+|\s+$/g,"");
    if (x==c_name)
    {
      return unescape(y);
    }
  }
}

var reset = function() {
  setCookie("jdash-collapse-jDash", "0-0-0-1-0-1", (new Date).getTime());
  setCookie("jdash-detect-cookies", "", (new Date).getTime());
  setCookie("jdash-index-jDash", "", (new Date).getTime());
  location.reload();
}

if(location.hash == '#stats') {
  setCookie("jdash-collapse-jDash", "1-1-0-1-0-1", (new Date).getTime() + 3600*24*1000);
  location.href = './index.html';
}

if(!getCookie("jdash-collapse-jDash")) {
  setCookie("jdash-collapse-jDash", "0-0-0-1-0-1", (new Date).getTime() + 3600*24*1000);
}

$(function() {
  $("#jDash").jDashboard({ columns: 3 });
  $('.clouds').bgscroll({scrollSpeed:100, direction:'h' });
  $('#rotatescroll').tinycircleslider({ interval: true, snaptodots: true, hidedots: false });
  $('#year').html((new Date).getFullYear());
});
