/****************************Loading Web Page**********************************/
jQuery(document).ready(function($){
	$( ".loading-effect" ).delay( 0 ).fadeOut( 500 );
	$( "#website-loading" ).delay( 500 ).fadeOut( 300 ); 
});

/*******************************FAQ Toogle***************************************************/

jQuery(document).ready(function($){
    $('.collapse').on('shown.bs.collapse', function(){
    $(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
    }).on('hidden.bs.collapse', function(){
    $(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
    });
});
/****************************************Smooth scroll********************************************/

/**
 * Scroll to Top
**/
jQuery(document).ready( function($) { 
    $('.top-arrow').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000 );
        return false;
    });
	
	$( "body" ).find( ".mPS2id-target" ).each(function() {
		$(this).find( ".content-body" ).addClass( "hilite" );
    });
});

/**
 * Image hover
**/
var sourceSwap = function () {
    var $this = jQuery(this);
    var newSource = $this.data('hover-src');
    $this.data('hover-src', $this.attr('src'));
    $this.attr('src', newSource);
}

jQuery(document).ready( function($) { 
    $('img[data-hover-src]').each(function() { 
        new Image().src = $(this).data('hover-src'); 
    }).hover(sourceSwap, sourceSwap); 
});

/**
 * Testimonial Carousel
 */
jQuery(document).ready(function($) { 
    $("#testimonial-demo").owlCarousel({     
        autoplay:true,
        autoplayTimeout:300000,
        autoplayHoverPause:true,
        loop:true,
        responsiveClass:true,
        responsive:{
            0   :{ items:1 },
            600 :{ items:1 },
            1000:{ items:2 }
        },
        lazyLoad: true,
        nav: false,
        navText:[ ],
        margin:30,
        smartSpeed:450,
        dots: true,
        dotsData:false,
    });     
});

jQuery(document).ready(function($) { 
    $("#license-demo").owlCarousel({     
        autoplay:true,
        autoplayTimeout:3000000,
        autoplayHoverPause:true,
        loop:true,
        responsiveClass:true,
        responsive:{
            0   :{ items:1 },
            600 :{ items:1 },
            1000:{ items:1 }
        },
        lazyLoad: true,
        nav: true,
        navText:[ ],
        margin:0,
        smartSpeed:450,
        dots: false,
        dotsData:false,
    });     
});
    

/**
 * jpages
**/
//jQuery(document).ready(function($) {
//    $('.pagination__list').paginate({
//        items_per_page: 2
//    });
//});

/**
 * Unite Gallery
 */

jQuery(document).ready(function($) {
    if ($('#homegallery')[0]) {
        jQuery("#homegallery").unitegallery({
            theme_enable_preloader: true,
			theme_preloading_height: 200,
			theme_preloader_vertpos: 100,
			theme_gallery_padding: 0,
			theme_auto_open:null,			
			gallery_theme: "tilesgrid",
			gallery_width:"100%",
			gallery_min_width: 150,
			
			tile_width: 350,						//tile width
			tile_height: 300,						//tile height
			
			//tiles_type: "tiles",
			//tiles_justified_row_height: 300,
			//tiles_justified_space_between: 0,
			//tiles_set_initial_height: true,			
			//tiles_enable_transition: true,

            tile_enable_shadow:false,
            tile_shadow_h:1,
            tile_shadow_v:1,
            tile_shadow_blur:3,
            tile_shadow_spread:2,
            tile_shadow_color:"#8B8B8B",

            tile_enable_border:false,
            tile_border_color: "#dfdfdf",
            tile_border_width:0,
            tile_border_radius:0,

            tile_enable_icons: true,
            tile_show_link_icon: false,
            tile_space_between_icons: 26,

            tile_enable_overlay: true,
            tile_overlay_opacity: 0.8,
            tile_overlay_color: "#fed12e",

            grid_num_rows:3,	

            theme_navigation_type: "arrows",					
            theme_bullets_margin_top: 40,
            theme_bullets_color: "gray",
            bullets_space_between: 12,
            theme_arrows_margin_top: 20,
            theme_space_between_arrows: 5,
            theme_navigation_align: "center",
            theme_navigation_offset_hor: 0,

            lightbox_show_textpanel: false,
            lightbox_textpanel_width: 550,
        });
    }
    if ($('#innergallery')[0]) {
        jQuery("#innergallery").unitegallery({
           theme_enable_preloader: true,
			theme_preloading_height: 200,
			theme_preloader_vertpos: 100,
			theme_gallery_padding: 0,
			theme_auto_open:null,			
			gallery_theme: "tiles",
			gallery_width:"100%",
			gallery_min_width: 150,
			
			tiles_type: "tiles",
			tiles_justified_row_height: 300,
			tiles_justified_space_between: 0,
			tiles_set_initial_height: true,			
			tiles_enable_transition: true,

            tile_enable_shadow:false,
            tile_shadow_h:1,
            tile_shadow_v:1,
            tile_shadow_blur:3,
            tile_shadow_spread:2,
            tile_shadow_color:"#8B8B8B",

            tile_enable_border:false,
            tile_border_color: "#dfdfdf",
            tile_border_width:0,
            tile_border_radius:0,

            tile_enable_icons: true,
            tile_show_link_icon: false,
            tile_space_between_icons: 26,

            tile_enable_overlay: true,
            tile_overlay_opacity: 0.5,
            tile_overlay_color: "#fed12e",

            grid_num_rows:3,	

            theme_navigation_type: "arrows",					
            theme_bullets_margin_top: 40,
            theme_bullets_color: "gray",
            bullets_space_between: 12,
            theme_arrows_margin_top: 20,
            theme_space_between_arrows: 5,
            theme_navigation_align: "center",
            theme_navigation_offset_hor: 0,

            lightbox_show_textpanel: false,
            lightbox_textpanel_width: 550,
        });
    }
});

/**
 * Show Phone Number
 */

function toggle(){}

jQuery(document).ready(function($) {
    var shortNumber = $("#clicktoshow").text().substring(0,  $("#clicktoshow").text().length - 9);
    $("#clicktoshow").hide().after('<a id="clicktoshowButton" href="javascript:toggle();" class="show_number">' + shortNumber + ' show number</a>');
    $("#clicktoshowButton").click(function() {
        $("#clicktoshow").show();
        $("#clicktoshowButton").hide();
    });

    var shortNumber = $("#clicktoshow1").text().substring(0,  $("#clicktoshow1").text().length - 7);
    $("#clicktoshow1").hide().after('<a id="clicktoshowButton1" href="javascript:toggle();" class="show_number">' + shortNumber + ' show number</a>');
    $("#clicktoshowButton1").click(function() {
        $("#clicktoshow1").show();
        $("#clicktoshowButton1").hide();
    });

    var shortNumber = $("#clicktoshow2").text().substring(0,  $("#clicktoshow2").text().length - 9);
    $("#clicktoshow2").hide().after('<a id="clicktoshowButton2" href="javascript:toggle();" class="show_number">' + shortNumber + ' show number</a>');
    $("#clicktoshowButton2").click(function() {
        $("#clicktoshow2").show();
        $("#clicktoshowButton2").hide();
    });
    
    var shortNumber = $("#clicktoshow3").text().substring(0,  $("#clicktoshow3").text().length - 7);
    $("#clicktoshow3").hide().after('<a id="clicktoshowButton3" href="javascript:toggle();" class="show_number">' + shortNumber + ' show number</a>');
    $("#clicktoshowButton3").click(function() {
        $("#clicktoshow3").show();
        $("#clicktoshowButton3").hide();
    });
    
    var shortNumber = $("#clicktoshow4").text().substring(0,  $("#clicktoshow4").text().length - 11);
    $("#clicktoshow4").hide().after('<a id="clicktoshowButton4" href="javascript:toggle();" class="show_number">' + shortNumber + ' show number</a>');
    $("#clicktoshowButton4").click(function() {
        $("#clicktoshow4").show();
        $("#clicktoshowButton4").hide();
    });
    
    var shortNumber = $("#clicktoshow5").text().substring(0,  $("#clicktoshow5").text().length - 11);
    $("#clicktoshow5").hide().after('<a id="clicktoshowButton5" href="javascript:toggle();" class="show_number">' + shortNumber + ' show number</a>');
    $("#clicktoshowButton5").click(function() {
        $("#clicktoshow5").show();
        $("#clicktoshowButton5").hide();
    });
    
    var shortNumber = $("#clicktoshow6").text().substring(0,  $("#clicktoshow6").text().length - 11);
    $("#clicktoshow6").hide().after('<a id="clicktoshowButton6" href="javascript:toggle();" class="show_number">' + shortNumber + ' show number</a>');
    $("#clicktoshowButton6").click(function() {
        $("#clicktoshow6").show();
        $("#clicktoshowButton6").hide();
    });
});



/**
 *  Read More
 *  ~~~~~~~~~~~~~~~~~~~~~~~~~
 */

(function(a){a.fn.readMore=function(d){var f={readMoreLinkClass:"read-more__link",readMoreText:"Read More",readLessText:"Read less",readMoreHeight:150};d=a.extend(f,d);var e=a(this);function c(g){if(typeof g.data("options")!=="undefined"){this.collapsedHeight=g.data("options")}else{this.collapsedHeight=d.readMoreHeight}}function b(g){g.each(function(){var h=a(this);var i=new c(h);a(this).after("<div>"+d.readMoreText+"</div>").next().addClass(d.readMoreLinkClass);a(this).css({height:i.collapsedHeight,overflow:"hidden",transition: "all 3s ease-out"})})}b(e);a("."+d.readMoreLinkClass).click(function(){var g=a(this).prev();var h=new c(g);if(g.css("overflow")==="hidden"){g.css({height:"auto",overflow:"auto",transition: "all 3s ease-out"});g.addClass("expanded")}else{g.css({height:h.collapsedHeight,overflow:"hidden",transition: "all 3s ease-out"});g.removeClass("expanded")}if(a(this).text()===d.readMoreText){a(this).text(d.readLessText)}else{a(this).text(d.readMoreText)}})}})(jQuery);

!function(t){t.fn.readMore=function(a){var e,n=t.extend({showLines:8,showParagraph:!1,linking:!0,linkCaption:"read more",linkCloseCaption:"read less",linkHint:"Click to see full article",animationSpeed:800,previewTextOnly:!0},a);t(document).ready(function(){t(".jrm-truncate").each(function(i){var a,s,r,l,o=i+1,d=t(this).outerHeight();t(this).addClass("jrm-"+o),t(this).children(":first-child").append('<div id="Temp">&nbsp;</div>'),e=t("#Temp").height(),t("#Temp").remove(),0!=(r=parseFloat(t(this).children(":first-child").css("margin-top")))&&(t(this).css("margin-top",r),t(this).children(":first-child").css("margin-top",0)),n.showParagraph||-1==t(this).attr("data-lines")?s=parseFloat(t(this).children("p:first-child").outerHeight()):(a=t(this).attr("data-lines")?parseFloat(t(this).attr("data-lines")):parseFloat(n.showLines),s=a*parseFloat(e)),l=t(this).attr("data-link-caption")?t(this).attr("data-link-caption"):n.linkCaption,t(this).attr("data-link-closecaption")?t(this).attr("data-link-closecaption"):n.linkCloseCaption,d>s&&(t(this).css("height",s).addClass("jrm-reduced"),n.linking||"true"==t(this).attr("data-linking")||"open only"==t(this).attr("data-linking")?t('<span class="jrm-toggle" data-id="'+o+'" title="'+n.linkHint+'">'+l+"</span>").insertAfter(t(this)):setting.linking&&"true"==t(this).attr("data-linking")||(t(this).prepend('<p id="Temp">&nbsp;</p>'),t(this).css("margin-bottom",t("#Temp").css("margin-bottom")),t("#Temp").remove()),n.previewTextOnly&&t(this).addClass("jrm-textOnly"))}),t(".jrm-toggle").click(function(){var a,s=t(this),r=s.parent().children(".jrm-"+s.attr("data-id"));if((1!=n.linking||"open only"==r.attr("data-linking"))&&s.remove(),a=r.attr("data-duration")?parseFloat(r.attr("data-duration")):n.animationSpeed,n.showParagraph||-1==r.attr("data-lines")?sectionHeight=parseFloat(r.children("p:first-child").outerHeight()):(sectionLines=r.attr("data-lines")?parseFloat(r.attr("data-lines")):parseFloat(n.showLines),sectionHeight=sectionLines*parseFloat(e)),linkCaption=r.attr("data-link-caption")?r.attr("data-link-caption"):n.linkCaption,linkCloseCaption=r.attr("data-link-closecaption")?r.attr("data-link-closecaption"):n.linkCloseCaption,r.hasClass("jrm-reduced")){setTimeout(function(){r.removeClass("jrm-reduced")},1);var l=r.children().length,o=0;for(i=1;l+1>i;i++)o+=r.children(":nth-child("+i+")").outerHeight(!0);r.animate({height:o},a),setTimeout(function(){s.text(linkCloseCaption).attr("title",""),t(window).resize()},a)}else r.animate({height:sectionHeight},a),setTimeout(function(){s.text(linkCaption).attr("title",n.linkHint),r.addClass("jrm-reduced"),t(window).resize()},a)})})}}(jQuery);


/**
 *  Tab Js
 *  ~~~~~~~~~~~~~~~~~~~~~~~~~
**/

jQuery(document).ready(function($) {
    if(typeof($add)=="undefined")var $add={version:{},auto:{disabled:false}};(function($){ $add.version.Tabs = "1.1.0"; $add.Tabs = function(selector, settings){ $(selector).each(function(i, el){ var $el = $(el); var S = $.extend({ change: "click" }, $el.data(), settings); var $tabHolder = $el.find("[role=tabs]"); $tabHolder.addClass("addui-Tabs-tabHolder"); var $tabs = $tabHolder.children(); var $contentHolder = $el.find("[role=contents]"); $contentHolder.addClass("addui-Tabs-contentHolder"); var $contents = $contentHolder.children(); var active = 0; $el.addClass("addui-Tabs").attr("role", "").removeAttr("role"); $tabs.addClass("addui-Tabs-tab"); $contents.addClass("addui-Tabs-content").each(function(i, c){ if($(c).hasClass("active")){ $(c).removeClass("active"); active = i; } }); $contents.removeClass("addui-Tabs-active").eq(active).addClass("addui-Tabs-active"); $tabs.removeClass("addui-Tabs-active").eq(active).addClass("addui-Tabs-active"); var event = "click"; if(S.change == "hover") event = "mouseenter"; $tabs.on(event, function(e){ $tabs.each(function(i, t){ if(t == e.target){ active = i; $contents.removeClass("addui-Tabs-active").eq(active).addClass("addui-Tabs-active"); $tabs.removeClass("addui-Tabs-active").eq(active).addClass("addui-Tabs-active"); } }); }) }); return this; }; $.fn.addTabs = function(settings){ $add.Tabs(this, settings); }; $add.auto.Tabs = function(){ if(!$add.auto.disabled){ $("[data-addui=tabs]").addTabs(); } } })(jQuery); $(function(){for(var k in $add.auto){if(typeof($add.auto[k])=="function"){$add.auto[k]();}}});
	
	
	!function(o){"use strict"; o('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=o(this.hash);if((t=t.length?t:o("[name="+this.hash.slice(1)+"]")).length)return o("html, body").animate({scrollTop:t.offset().top-90},1e3,"easeInOutExpo"),!1}})}(jQuery);
});


/*
--------------------------------------------
          khairul vanilajs script                     
--------------------------------------------
*/
// ABout us readmore function
 document.addEventListener("DOMContentLoaded", function() {

            let targetDiv= document.querySelector('#about-content')
            let divHeight = targetDiv.clientHeight
            targetDiv.style.cssText = 'height:285px; overflow:hidden;transition:all .5s'
            let targetClick = document.querySelector('.about-button')

            if(divHeight<=300){
                targetClick.style = 'display:none'
                 targetDiv.style.cssText = `height:${divHeight}px;`
            }

            targetClick.addEventListener('click', function(e){

                if(targetDiv.clientHeight>300){
                    targetDiv.style.cssText = 'height:285px; overflow:hidden;transition:all .5s'
                   
                }else{
                    targetDiv.style.cssText = `height:${divHeight}px; overflow:hidden;transition:all .5s`
                }
                e.preventDefault();
            })  
  })


 // Service detailse readmore script 
// Temporary height set
 let itemOrgHeight;

  document.addEventListener("DOMContentLoaded", function() {
        let allBtn  = document.querySelectorAll('.service-read-btn')

// Default setting for first element content
       let firstContent = document.querySelector('.service-content')
        itemOrgHeight  = firstContent.clientHeight
        document.querySelector('.heightSet').value = itemOrgHeight;
        firstContent.style.cssText ='display:block; height:280px;overflow:hidden; transition:all .5s'

        allBtn.forEach((single_btn)=>{

            single_btn.addEventListener('click', function(){

                let targetClick = this.getAttribute("source")
                let serviceItems = document.querySelectorAll('.single-service-item')
                serviceItems.forEach((single_item)=>{
                    single_item.style='display:block'
                    let serviceContent = single_item.querySelector('.service-content')
                     let hiddenInput  = single_item.querySelector('.heightSet')
                     if(hiddenInput.value ==0){
                            hiddenInput.value = serviceContent.clientHeight
                     }
                     if(single_item.querySelector('.heightSet').value<250){
                        single_item.querySelector('.expand-text').style='display:none'
                    }
                    if(single_item.getAttribute("target") == targetClick){
                            single_item.style='display:block'
                             single_item.classList.remove("expand");
                            single_item.querySelector('.service-content').style.cssText = 'display:block; height:280px;overflow:hidden; transition:all .5s'
                    }else{
                         single_item.style='display:none;'
                    }    
                })
            })        
        })
  })


document.addEventListener("DOMContentLoaded", function() {
let allExpanbtn = document.querySelectorAll('.expand-text')
        allExpanbtn.forEach((single_btn)=>{
            single_btn.addEventListener('click', ()=>{

                let targetdivBtn = single_btn.getAttribute('targetbtn')
               let serviceItems = document.querySelectorAll('.single-service-item')
                serviceItems.forEach((single_content)=>{
                    if(targetdivBtn == single_content.getAttribute('target')) {
                        let divclass = single_content.classList.contains('expand')
                        let thisDivHeight = single_content.querySelector('.heightSet').value
                        if(!divclass){
                            single_content.querySelector('.service-content').style.cssText =`display: block; height: ${thisDivHeight}px; overflow: hidden;transition:all .5s`
                            single_btn.textContent ='Close'
                            single_content.classList.add('expand')
                        }else{
                            single_content.querySelector('.service-content').style.cssText = 'display:block; height:280px;overflow:hidden; transition:all .5s'
                            single_content.classList.remove("expand");
                            single_btn.textContent ='Read more'
                        }
                    }
                })
            })
        })
  })

document.addEventListener("DOMContentLoaded", function() {
        let menuLIst = document.querySelectorAll('#menu-mobile li a');
        menuLIst.forEach((single_menu_item)=>{
            single_menu_item.setAttribute('class', 'js-scroll-trigger')
        })
})




