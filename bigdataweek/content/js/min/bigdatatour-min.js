$(function(){$.getJSON("content/json/data.json",function(a){var e=a,s=$("#markers-template").html(),t=Handlebars.compile(s);$("#all-markers").html(t(e));var s=$("#content-template").html(),t=Handlebars.compile(s);$("#post-content").html(t(e)),$(".this-marker").click(function(){$(".carousel").carousel("pause");var a=$(this).attr("id");$(".this-marker").removeClass("marker-active animated bounceIn").addClass("marker-inactive"),$(this).removeClass("marker-inactive").addClass("marker-active animated bounceIn"),$(".post-active").addClass("hide").removeClass("post-active"),$("#post-content-carousel-"+a).carousel(),$(".content-"+a).removeClass("hide").addClass("post-active"),$("#post-content-carousel-"+a).find(".item.active").hasClass("BigDataTruck")?$(".van-img").hasClass("bg-set")||$(".van-img").css({visibility:"visible","background-image":"url(/content/img/van.png)"}).addClass("bg-set"):$("#post-content-carousel-"+a).find(".item.active").hasClass("HannahTheOwl")&&$(".van-img").css("background-image","url(/content/img/owl.png)").removeClass("bg-set"),$("#post-content-carousel-"+a).on("slid.bs.carousel",function(){$(this).find(".item.active").hasClass("BigDataTruck")?$(".van-img").hasClass("bg-set")||$(".van-img").css("background-image","url(/content/img/van.png)").addClass("bg-set"):$(this).find(".item.active").hasClass("HannahTheOwl")&&$(".van-img").css("background-image","url(/content/img/owl.png)").removeClass("bg-set")})})}),$(".ticker").easyTicker({direction:"up",easing:"swing",speed:"slow",interval:2500,height:"auto",visible:6,mousePause:0,controls:{up:"",down:"",toggle:"",playText:"Play",stopText:"Stop"}})});