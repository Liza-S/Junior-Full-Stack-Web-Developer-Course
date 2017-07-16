$(function () {
   
   $("a:not([href])").attr('href', '#top');
   $("img:not([alt])").attr('alt', 'image');
   $("button").removeAttr('disabled');

});

