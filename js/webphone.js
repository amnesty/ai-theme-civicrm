appendWphButtonByObject = function(){
  jQuery(function($) {
      $('object[classid="webphone"]').each(function(i){
         if (typeof $(this).attr('id') != 'undefined' && $(this).attr('id') != '') {
             appendButtonWphByObj($(this).attr('id'));
         }
      });
  });
};
