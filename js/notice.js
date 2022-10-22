function notice(title, title_type, text, sticky) {
    var container, messageBox, messageBody, messageTextBox, closeButton;

    container = $('#notifier-box');
    if (!container.length) {
        container = $('<div>', {id: 'notifier-box'}).prependTo(document.body);
    }

    messageBox = $('<div>', {'class': 'message-box', css: {display: 'none'}});
    messageHeader = $('<div>', {'class': title_type, html: title});
    messageBody = $('<div>', {'class': 'message-body'});
    messageTextBox = $('<span>', {html: text});

    closeButton = $('<a>', {
        'class': 'message-close',
        href: '#',
        title: "Close",
        click: function () {
            $(this).parent().fadeOut(500, function () {
                $(this).remove();
            });
        }
    });

    messageBox.appendTo(container).fadeIn(500);
    closeButton.appendTo(messageBox);
    messageHeader.appendTo(messageBox);
    messageBody.appendTo(messageBox);
    messageTextBox.appendTo(messageBody);
    if (typeof(sticky) == "undefined") {
        setTimeout(function () {
            $(messageBox).fadeOut(500, function () {
                $(this).remove();
            });
        }, 3000);
    }
    return this;
}