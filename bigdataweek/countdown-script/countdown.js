/**
 * Created by Bright.B on 25/09/14.
 */
var CtimerObj = {
    startDate:0,
    startClock: function(hrs,mins,secs,liveHour, dateToLive){
        var days, hours, minutes, seconds, liveDate = 0;
        var  ukHourZone = liveHour;
        var gmt = this.checkTimeZone();
        var  client_time = ukHourZone + gmt[1] + gmt[0]; if(client_time > 24){client_time = client_time - 24 + ukHourZone;}
        client_time += ":"+"00"+":"+"00";
        var date_nw = dateToLive+" ";
        liveDate = new Date(date_nw+client_time);
        setInterval(function(){
            var current_date = new Date().getTime();
            var time_left = (liveDate - current_date) / 1000;
            days = parseInt((time_left/86400),10);
            time_left = time_left % 86400;
            hours = parseInt(time_left /3600);
            time_left = time_left % 3600;
            minutes = parseInt(time_left/60);
            seconds = parseInt(time_left %60);
            document.getElementById(hrs).innerHTML = hours;
            document.getElementById(mins).innerHTML = minutes;
            document.getElementById(secs).innerHTML = seconds;
            //hidden elements
            document.getElementById("hrs-1").innerHTML = hours;
            document.getElementById("mins-1").innerHTML = minutes;
            document.getElementById("secs-1").innerHTML = seconds;
            if(days <= 0 && hours <=0){
                if(minutes <=0 && seconds <=0){
                    window.location.href = "live.php";
                }
            }
        },1000);
    },
    checkTimeZone: function(){
        var rightNow = new Date();
        var date1 = new Date(rightNow.getFullYear(), 0, 1, 0, 0, 0, 0);
        var date2 = new Date(rightNow.getFullYear(), 6, 1, 0, 0, 0, 0);
        var temp = date1.toGMTString();
        var date3 = new Date(temp.substring(0, temp.lastIndexOf(" ")));
        var temp = date2.toGMTString();
        var date4 = new Date(temp.substring(0, temp.lastIndexOf(" ")));
        var hoursDiffStdTime = (date1 - date3) / (1000 * 60 * 60);
        var hoursDiffDaylightTime = (date2 - date4) / (1000 * 60 * 60);
        if(hoursDiffDaylightTime == hoursDiffStdTime){
            var zoneObj = new Array();
            zoneObj[0] = -1;
            zoneObj[1] = hoursDiffStdTime;
            return zoneObj;
        } else {
            var zoneObj = new Array();
            zoneObj[0] = 0;
            zoneObj[1] = hoursDiffStdTime;
            return zoneObj;
        }
    },
    liveYet: function(liveHour,dateToLive){
        var liveDate, current_date;
        var  ukHourZone = liveHour;
        var gmt = this.checkTimeZone();
        var  client_time = ukHourZone + gmt[1] + gmt[0]; if(client_time > 24){client_time = client_time - 24 + ukHourZone;}
        client_time += ":"+"00"+":"+"00";
        var date_nw = dateToLive+" ";
        liveDate = new Date(date_nw+client_time);
        current_date = new Date().getTime();
        if(current_date < liveDate){
            return false;
        }else{
            return true;
        }
    }
}