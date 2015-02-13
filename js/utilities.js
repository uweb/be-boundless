BOUNDLESS.getSlide = function() {
  this.$slide = this.$slide || $('#slide')
  return this.$slide
}

BOUNDLESS.replaceSlide = function( newSlide )
{
  this.getSlide().html( newSlide )
}