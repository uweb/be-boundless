/*! be-boundless Tue Oct 11 2016 17:02:40 */
function debounce(a,b){var c;return function(){function d(){a(),c=null}c&&clearTimeout(c),c=setTimeout(d,b||100)}}$(window).load(function(){function a(a){var b=a;b.find(".front").css("background-image","url("+b.data("img")+")")}function b(a){var b=(g-a.height())/2;$mobile=h<768?50:b,j.one("arrangeComplete",function(){$("html, body").animate({scrollTop:a.offset().top-$mobile},900)})}function c(a){return!$.trim(a.html())}console.log("test 4 payload");var d,e=$("#searcher_wrap"),f=$("#searcher"),g=$(window).height(),h=$(window).width(),i=$("#filter"),j=$(".grid").isotope({itemSelector:".grid-item",percentPosition:!0,masonry:{columnWidth:".grid-sizer"},filter:".featured",getSortData:{selected:function(a){return a=$(a),(a.hasClass("open")?-1:0)+a.data("sort")}},sortBy:"selected"});j.one("arrangeComplete",function(){$("#overlay").fadeOut(300,function(){$(this).remove()})}),j.isotope();var k=$(".quicksearch").keyup(debounce(function(){k.val().length>1?(d=new RegExp(k.val(),"gi"),j.isotope({filter:function(){var a=$(this),b=!d||a.text().match(d);return b&&a.is(":not(.unit-item):not(.filter-item)")||a.is(".search-more")}}),$("#empty").addClass("active"),$("#empty").addClass("active-filter")):$("#empty").trigger("click")},200));if($(".featured").each(function(b,c){var d=$(c);a(d)}),j.on("click",".grid-item:not(.filter-item):not(.search-more)",function(){var c=$(this),d=c.data("name"),e=d&&"#name="+d;c.hasClass("open")||c.hasClass("special")||c.hasClass("search-more")||c.hasClass("fyp-units")?(c.removeClass("open"),j.isotope("updateSortData",c)):($prevSelect=$(".grid-item.open:not(.search-more):not(.filter-item)"),$prevSelect.removeClass("open"),j.isotope("updateSortData",$prevSelect),c.addClass("open"),j.isotope("updateSortData",c),a(c),b(c),window.location.hash=e),j.isotope()}),$("#searcher").on("click",function(a){a.preventDefault(),e.find("input").focus(),e.toggleClass("active_search"),f.hasClass("is-checked")&&(e.find("input").val(""),$(".quicksearch").keyup()),f.toggleClass("is-checked")}),$(document).on("keyup",function(a){27==a.keyCode&&$("#searcher").hasClass("is-checked")&&(e.toggleClass("active_search"),f.toggleClass("is-checked"),e.find("input").val(""))}),$(document).keypress(function(a){13==a.which&&(a.preventDefault(),$(a.target).trigger("click"))}),location.hash.match(/^#name/)){var l=location.hash.substring(6),m=$('*[data-name="'+l+'"]');m.toggleClass("open"),j.isotope(),a(m),b(m)}$(".tags").on("click","a",function(a){var b=$(this),c=a;$text=b.text(),c.preventDefault(),c.stopPropagation(),i.addClass("select_active"),j.isotope({filter:function(){return!$text||$(this).find(".tags").text().match($text)}})}),$(".fyp-filter-triggers").on("click",function(a){a.preventDefault(),$("hr").addClass("reduce"),$("ul.fyp-filters.show").removeClass("show"),$("#"+a.currentTarget.dataset.name).addClass("show")}),$(".fyp-filter-click").on("click",function(a){a.preventDefault();var b=$(this).attr("data-filter");$("#empty").addClass("active"),$("#empty").addClass("active-filter"),j.isotope({filter:"."+b+":not(.unit-small)"}),$(),$("html, body").animate({scrollTop:$(".fyp-search").offset().top},900)}),$("#empty").on("click",function(a){a.preventDefault(),$("html, body").animate({scrollTop:$("body").offset().top},900),$(this).hasClass("active-filter")&&($("#empty").removeClass("active"),$("#empty").removeClass("active-filter"),$(".grid-item.search-item").remove(),$(".grid-item.search-more").removeClass("open"),j.isotope({filter:".featured"})),$(this).hasClass("active-give")&&($("#empty").addClass("active-filter"),$("#empty").removeClass("active-give"),$(".fyp-give-widget-container").remove(),$(".fyp-give-widget-lightbox").remove())}),$(".give-link").on("click",function(a){a.preventDefault();var b=$(this).attr("data-code");c($("#give-iframe"))&&$("<iframe>",{src:"https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?source_typ=3&source="+b+"&frame_buster=false",frameborder:0,width:"100%",height:"100%"}).appendTo("#give-iframe"),"Give now"===$("#give-now")[0].innerHTML?($("#give-now")[0].innerHTML="Close",$("#empty").removeClass("active"),$("#give-now").on("click",function(a){$("#empty").addClass("active")})):$("#give-now")[0].innerHTML="Give now",$("body").toggleClass("give-modal-active")}),$(".unit-small").on("click",function(a){a.preventDefault();var b=$(this).attr("data-name");$("#empty").trigger("click"),j.isotope({filter:"."+b+":not(.unit-small)"})}),$(".search-more").on("click",function(a){a.preventDefault(),$searchTerm=$("#searcher").val(),$.getJSON("http://ua-dev-service.gifts.washington.edu/OnlineAllocation/Search/"+$searchTerm+"?callback=?",function(a){var b=new Array;a.forEach(function(a){var c=a.Key,d=a.Name,e=a.Description,f=e.length<100?e:e.substr(0,100)+"...";b.push($('<li tabindex="0" class="flip-container grid-item search-item ">  <div class="flipper" role="button">    <div class="front">      <p>'+d+'</p>    </div>    <div class="back">      <h3>'+d+'</h3>      <p class="short-desc">'+f+'</p>    </div>    <div tabindex="0" class="full-bio">      <h2>'+d+'</h2>      <div class="bio-text">        <p>'+e+'</p>      </div>      <div class="give-button">        <a href="#" class="give-link" data-code="'+c+'">Give Now</a>      </div>    </div>  </div></li>'))}),$("ul.search-grid").append(b),$(".grid-item.search-more").addClass("open"),j.isotope(),$("#searcher").on("keyup",function(a){$(".grid-item.search-item").remove(),$(".grid-item.search-more").removeClass("open")}),$(".give-link").on("click",function(a){a.preventDefault();var b=$(this).attr("data-code");$("#empty").addClass("active-give"),$("#empty").removeClass("active-filter"),$("body").prepend('<div class="fyp-give-widget-lightbox"></div><div id="fyp-give-widget-container" class="fyp-give-widget-container"><iframe src="https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?source_typ=3&source='+b+'&frame_buster=false" title="Giving at the UW" id="UWFOnlineGivingForm" frameborder="0" scrolling="yes" onload="try{document.domain=\'washington.edu\'}catch(e){}"></iframe></div>'),$("html, body").animate({scrollTop:$("#fyp-give-widget-container").offset().top-$("#campaign-header thick").outerHeight()},900)}),$(".search-grid").on("click",".search-item",function(){var a=$(this);a.hasClass("open")?a.removeClass("open"):($(".grid-item:not(.search-more)").removeClass("open"),a.addClass("open"))})})})}),"onpropertychange"in document&&window.matchMedia&&$("html").addClass("ie10");