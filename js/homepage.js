UW=UW||{},UW.HomepageSlider=Backbone.View.extend({el:".uw-homepage-slider-container",slides:".uw-homepage-slider",headline:".next-headline",events:{"click .next-headline":"nextSlide"},initialize:function(){_.bindAll(this,"nextSlide","changeNextArticle"),this.count=this.$el.children(this.slides).length,this.showNextHeadline(),this.changeNextArticle()},nextSlide:function(){this.$el.children(this.slides).last().fadeOut(this.rotateSlides)},rotateSlides:function(){var a=$(this);a.insertBefore(a.siblings(this.slides).first()).show(),UW.homepageslider.changeNextArticle()},showNextHeadline:function(){this.$el.find(this.headline).show()},changeNextArticle:function(){var a=this.$el.children(this.slides).eq(this.count-2).find("h1").text();this.$el.find(this.headline).html(a)}}),UW.HomepageSlider.initialize=function(){$(".uw-homepage-slider").length>1&&(UW.homepageslider=new UW.HomepageSlider)},$(document).ready(UW.HomepageSlider.initialize);