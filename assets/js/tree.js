$(function() {
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'contraer rama');
    $('.tree li.parent_li > span').on('click', function(e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'expandir rama').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'contraer rama').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });
});
