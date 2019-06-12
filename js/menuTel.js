

function hasClass(element, className) {
    return (' ' + element.className + ' ').indexOf(' ' + className+ ' ') > -1;
}

  $('li').click(function() {
    if(!hasClass(this, 'active_li'))
    $(this).addClass('active_li');
    else
     $(this).removeClass('active_li');
    
  });

