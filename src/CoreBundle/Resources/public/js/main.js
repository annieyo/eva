

$('.new-question').on('click', function(event){
    event.preventDefault();
    var lastQuestion = $('.question').last();
    lastQuestion.clone().appendTo(lastQuestion);

    var newLastQuestion = $('.question').last();
    newLastQuestion.find("input[type=text], select, textarea").val("");
    newLastQuestion.find("input").attr('checked', false);
});

/*$('.delete').on('click', function(event){
    event.preventDefault();
    var parent = $(this).parent().parent().parent();

    parent.remove();
}); */