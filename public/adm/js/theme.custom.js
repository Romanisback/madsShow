$(document).on('click', '.modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
});


let NotifySuccess = (message) => {
    var notice = new PNotify({
        title: 'Success',
        text: message,
        type: 'success',
        addclass: 'click-2-close',
        hide: true,
        buttons: {
            closer: false,
            sticker: false
        }
    });

    notice.get().click(function() {
        notice.remove();
    });
}

let NotifyError = (message) => {
    var notice = new PNotify({
        title: 'Error',
        text: message,
        type: 'error',
        addclass: 'click-2-close',
        hide: true,
        buttons: {
            closer: false,
            sticker: false
        }
    });

    notice.get().click(function() {
        notice.remove();
    });
}

let NotifyWarning = (message) => {
    var notice = new PNotify({
        title: 'Warning',
        text: message,
        addclass: 'click-2-close',
        hide: true,
        buttons: {
            closer: false,
            sticker: false
        }
    });

    notice.get().click(function() {
        notice.remove();
    });
}
