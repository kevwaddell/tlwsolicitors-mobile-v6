!function($){function n(){for(var n,e=window.location.href.slice(window.location.href.indexOf("?")+1).split("&"),t=0;t<e.length;t++)n=e[t].split("="),"gclid"===n[0]&&1===$("#input_23_12").length&&$("input#input_23_12").val(n[1]),"gclid"===n[0]&&1===$("#input_22_27").length&&$("input#input_22_27").val(n[1]),"gclid"===n[0]&&$.cookie(n[0],n[1],{expires:1,path:"/"})}var e,t="touchstart";jQuery.fn.scrollTo=function(n,e){return $(this).animate({scrollTop:$(this).scrollTop()-$(this).offset().top+$(n).offset().top},void 0==e?1e3:e),this},n(),$(document).ready(function(){$(".main-txt > p,h1,h2,h3,h4,h5,h6").widowFix({letterLimit:10}),$(".services-nav-link > span.title span").widowFix({letterLimit:10}),$(".credit > a span.description").widowFix({letterLimit:10}),$("a.article-link > span.title span").widowFix({letterLimit:10}),$(".selectpicker").selectpicker({style:"btn-default btn-lg hp-select",mobile:!0,size:5}),$(".selectpicker").find("select").selectpicker({style:"btn btn-group btn-default",mobile:!0,width:"100%"}),$("body").on(t,"button#nav-btn",function(){var n=$("#top-nav").find(".nav-wrapper").outerHeight();return $("#top-nav").animate({height:n+"px"},300,function(){$("body").toggleClass("nav-closed nav-open"),$(this).toggleClass("nav-closed nav-open").removeAttr("style")}),!1}),$("#top-nav").on(t,"button#close-nav",function(){return $("#top-nav").animate({height:"0px"},300,function(){$("body").toggleClass("nav-open nav-closed"),$(this).toggleClass("nav-open nav-closed").removeAttr("style"),$("li.with-sub-nav").removeClass("sub-open").addClass("sub-closed")}),!1}),$("#top-nav").on("click","li.with-sub-nav > a",function(){var n=$(this).parent(),e=$(n).siblings();return $(n).siblings().removeClass("sub-open").addClass("sub-closed"),$(e).find(".sub-open").length>0&&$(e).find(".sub-open").removeClass("sub-open").addClass("sub-closed"),$(n).toggleClass("sub-open sub-closed"),!1}),$("body").on("click","li.with-sub-nav > a",function(){var n=$(this).parent();return $(n).siblings().removeClass("sl-tl-open").addClass("sl-tl-closed"),$(n).hasClass("top-level")&&$(n).find(".sl-tl-open").removeClass("sl-tl-open").addClass("sl-tl-closed"),$(n).toggleClass("sl-tl-open sl-tl-closed"),!1}),$("body").on(t,"a#search-btn",function(){return $("#search-pop-up").hasClass("off")&&($("#search-pop-up").removeClass("off").addClass("on"),$("body").addClass("search-open")),!1}),$("body").on(t,"button#close-search",function(){return $("#search-pop-up").hasClass("on")&&($("#search-pop-up").removeClass("on").addClass("turn-off"),$(".turn-off").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("turn-off").addClass("off"),$("body").removeClass("search-open")})),!1}),$("body").on(t,"button#route-finder-btn",function(){return $("#route-finder-pop-up").toggleClass("off on"),$("body").addClass("route-finder-open"),!1}),$("body").on(t,"button#close-route-finder",function(){return $("#route-finder-pop-up").hasClass("on")&&($("#route-finder-pop-up").removeClass("on").addClass("turn-off"),$(".turn-off").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("turn-off").addClass("off"),$("body").removeClass("route-finder-open")})),!1}),$("body").on(t,"button#continue-read-btn",function(){var n=$("#content-extra-inner").outerHeight(),e=$("#main-content"),t=$("#content-extra");return $("button#continue-read-btn").addClass("hidden"),e.animate({scrollTop:t.offset().top-e.offset().top+e.scrollTop()-65}),$("#content-extra").animate({height:n+"px"},500,function(){$("#content-extra").removeClass("closed").addClass("open").removeAttr("style")}),!1}),$("body").on(t,"button#close-content-extra-btn",function(){var n=$("#content-extra-inner").parent().position().top;return $("button#continue-read-btn").removeClass("hidden"),$("main").animate({scrollTop:n},500),$("#content-extra").animate({height:"0px"},500,function(){$("#content-extra").removeClass("open").addClass("closed").removeAttr("style")}),!1});var n=function(){1===$("#xmas-popup-wrap").length&&$("#xmas-popup-wrap").hasClass("pop-up-inactive")&&($("#xmas-popup-btn-wrap").removeClass("pop-up-inactive").addClass("pop-up-active"),$("#xmas-popup-wrap").fadeIn("slow",function(){$(".xmas-popup-inner").removeClass("hidden").addClass("animated slideInUp")}))};$(".xmas-popup-inner").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).hasClass("bounceOutDown")&&($("#xmas-popup-wrap").fadeOut("fast").removeClass("pop-up-active").addClass("pop-up-inactive"),$("#xmas-popup-btn-wrap").removeClass("pop-up-active").addClass("pop-up-inactive"),$(this).removeClass("animated bounceOutDown").addClass("hidden"))}),$("body").on(t,"button#xmas-popup-btn-open",function(){return n(),!1}),$("body").on(t,"button#close-xmas-popup",function(){return $(".xmas-popup-inner").removeClass("slideInUp").addClass("bounceOutDown"),!1}),$("body").on(t,".faq-nav > button",function(){var n=$(this).data().src,e=$("#main-content"),t=$("section#faqs-section");return $(this).siblings().removeClass("btn-active"),$(this).addClass("btn-active"),e.animate({scrollTop:t.offset().top-e.offset().top+e.scrollTop()-65}),$(".faq-item.active").animate({top:"100%",opacity:0},300,function(){$(this).removeClass("active")}),$("#"+n).animate({top:"0%",opacity:1},500,function(){$("#"+n).addClass("active")}),!1}),$("a.video-link").on(t,function(){var n=$(this).attr("href"),e=$(n).find("video"),t=$(e).attr("id")+"-viewing";return $("body").addClass("video-open"),$("#video-viewer").animate({top:"0px",opacity:1},500,function(){$(this).toggleClass("viewer-closed viewer-open").removeAttr("style"),$(e).clone().attr("id",t).appendTo(".video-viewer-inner")}),!1}),$("button#close-video").on(t,function(){return $(this).parent().animate({top:"100%",opacity:0},500,function(){$(this).toggleClass("viewer-open viewer-closed").removeAttr("style"),$(this).find(".video-viewer-inner").empty(),$("body").removeClass("video-open")}),!1}),$("body").on(t,"a.gallery-img-link",function(){$(this).parent().siblings().removeClass("active"),$(this).parent().addClass("active");var n=$(this).attr("href"),e=$(".gallery-items-viewer"),t=new Image;return $(e).empty(),$(t).attr("src",n).addClass("animated fadeIn").appendTo(e),!1})}),$(window).bind("load",function(){setTimeout(function(){$("body").removeClass("loading")},2e3),1===$("#wide-map-canvas").length&&wide_map_init(),$(".has-bg-img").each(function(n,e){var t=$(e).data("src");void 0!==t&&$(e).css("background-image","url("+t+")")})})}(window.jQuery);