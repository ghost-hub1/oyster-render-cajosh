jQuery((function(e){window.addEventListener("load",(function(){var o=e(".positions-block .single-position"),i=e("select#location"),t=e("select#team");e(i).change((function(){n(i.val(),t.val())})),e(t).change((function(){n(i.val(),t.val())}));var n=function(i,t){o.each((function(o,n){var a=e(n),l=a.children(".location").clone().children().remove().end().text().trim(),s=a.children(".team").clone().children().remove().end().text().trim();a.removeClass("active"),(i===l&&t===s||i===l&&"all"===t||"all"===i&&t===s||"all"===i&&"all"===t)&&a.addClass("active")})),e(".single-position.active").length?(e(".failed-search").hide(),e(".positions-header .role").show(),e(".positions-header .location").show(),e(".positions-header .team").show()):(e(".failed-search").show(),e(".positions-header .role").hide(),e(".positions-header .location").hide(),e(".positions-header .team").hide())};e(".js--scroll-to-positions").click((function(o){o.preventDefault();var i=this.href.split("#")[1],t=e("#"+i).offset().top-120;e("html, body").animate({scrollTop:t},400)}))}))}));