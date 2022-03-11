
//sends formular if clicked

// Example starter JavaScript for disabling form submissions if there are invalid fields
validate = () => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
}

$(document).ready(function () {
    $("#hoverme").hover(function () {
        console.log('Amk')
        $('#modal').modal();
    });
});
// Get the modal
var modal = document.getElementById("myModal");

// Get the el that opens the modal
var trigger = document.getElementById("hoverme");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
trigger.onmouseover = function () {
    modal.style.display = "block";
}



// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

var element = $('.floating-chat');
var myStorage = localStorage;

if (!myStorage.getItem('chatID')) {
    myStorage.setItem('chatID', createUUID());
}

setTimeout(function () {
    element.addClass('enter');
}, 1000);

element.click(openElement);

function openElement() {
    var messages = element.find('.messages');
    var textInput = element.find('.text-box');
    element.find('>i').hide();
    element.addClass('expand');
    element.find('.chat').addClass('enter');
    var strLength = textInput.val().length * 2;
    textInput.keydown(onMetaAndEnter).prop("disabled", false).focus();
    element.off('click', openElement);
    element.find('.header button').click(closeElement);
    element.find('#sendMessage').click(sendNewMessage);
    messages.scrollTop(messages.prop("scrollHeight"));
}

function closeElement() {
    element.find('.chat').removeClass('enter').hide();
    element.find('>i').show();
    element.removeClass('expand');
    element.find('.header button').off('click', closeElement);
    element.find('#sendMessage').off('click', sendNewMessage);
    element.find('.text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
    setTimeout(function () {
        element.find('.chat').removeClass('enter').show()
        element.click(openElement);
    }, 500);
}

function createUUID() {
    // http://www.ietf.org/rfc/rfc4122.txt
    var s = [];
    var hexDigits = "0123456789abcdef";
    for (var i = 0; i < 36; i++) {
        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
    }
    s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
    s[8] = s[13] = s[18] = s[23] = "-";

    var uuid = s.join("");
    return uuid;
}

function sendNewMessage() {
    var userInput = $('.text-box');
    var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

    if (!newMessage) return;

    var messagesContainer = $('.messages');

    messagesContainer.append([
        '<li class="self">',
        newMessage,
        '</li>'
    ].join(''));

    // clean out old message
    userInput.html('');
    // focus on input
    userInput.focus();

    messagesContainer.finish().animate({
        scrollTop: messagesContainer.prop("scrollHeight")
    }, 250);
}

function onMetaAndEnter(event) {
    if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
        sendNewMessage();
    }
}
const cards = document.querySelectorAll('.cards');

const setClasses = () => {
    const classes = ['left', 'active', 'right'];
    cards.forEach((card, index) => card.classList.add(classes[index]))
}


const changePositions = (e) => {
    const clickedCard = e.currentTarget
    const activeCard = document.querySelector('.cards.active')
    if (clickedCard.classList.contains('active')) return;
    const classesFrom = e.currentTarget.className
    const classesTo = activeCard.className
    clickedCard.className = classesTo
    activeCard.className = classesFrom
}

cards.forEach((card) => {
    card
        .addEventListener('click', changePositions)
})

setClasses();

if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
    // if pc user

    var bgImage = document.getElementById('home');
    bgImage.className = 'bgimageDesktop'
    document.getElementById("ficons1").style.display = 'none';
    document.getElementById("increaseSize").style.height = '950px';
    document.getElementById("increaseSize").style.width = '550px';

} else {
    document.getElementById("ficons").style.display = 'none';

}
$(document).ready(function () {
    if ($(window).width() > 991) {
        $('.navbar-light .d-menu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
        });
    }
});

const scrollDown = () => {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#about').offset().top
    }, 200, 'swing');
}

$(function () {
    $('a[href*=\\#]:not([href=\\#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });
});

document.querySelectorAll("#nav-link")
    .forEach(function (el) {
        el.onclick = function () {
            console.log(this.id)
            $('.navbar-collapse').collapse('hide');
        }
    })


const messageClose = document.querySelectorAll('.Message-close');
const messages = document.querySelectorAll('.Message')

messageClose.forEach(message => {
    message.addEventListener('click', function handleClick(event) {
        console.log('message clicked', event);
        $(messages).remove();


        message.setAttribute('style', 'background-color: yellow;');
    });
});


function closeMessage(el) {
    el.addClass('is-hidden');
}

function openSubpage() {
    setTimeout(function () {
        window.open('https://www.koeln.de/branchen/eintrag/3144/hausverwaltungen/curata-wohnungsverwaltungsgesellschaft-mbh', '_blank')
    }, 1100)
}



$('#js-helpMe').on('click', function (e) {
    alert('Versuch es bitte nochmal auszufüllen!');
    closeMessage($(this).closest('.Message'));
});

$('#js-authMe').on('click', function (e) {
    alert('Kontaktieren Sie uns über unser Formular!');
    $("#regular").remove();

    closeMessage($(this).closest('.Message'));
});

$('#closeBtn').on('click', function (e) {
    $("#regular").remove();

    closeMessage($(this).closest('.Message'));
});


$(document).ready(function () {
    setTimeout(function () {
        closeMessage($('#js-timer'));
    }, 5000);
});

if ($('#success').length > 0) {
    $("#regular").remove();
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#success").offset().top - 50
    }, 2000);
}

if ($('#error').length > 0) {
    $("#regular").remove();
    $("#regular").remove();
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#error").offset().top
    }, 2000);
}


var ranCards = document.getElementsByClassName("card servicesText");
var previousRandomCard = null

function repeatOften() {
    if (previousRandomCard) previousRandomCard.classList.toggle('randomCard')
    var random = Math.floor(Math.random() * (ranCards.length - 1)) + 0;
    var randomCard = ranCards[random];
    randomCard.classList.toggle('randomCard');
    previousRandomCard = randomCard;
    setTimeout(repeatOften, 5000);
}
repeatOften();

var floatingField = $(".material-form .floating-field").find(".form-control");
var formItem = $(".material-form .input-block").find(".form-control");

//##case 1 for default style
//on focus
formItem.focus(function () {
    $(this).parent(".input-block").addClass("focus");
});
//removing focusing
formItem.blur(function () {
    $(this).parent(".input-block").removeClass("focus");
});

//##case 2 for floating style
//initiating field
floatingField.each(function () {
    var targetItem = $(this).parent();
    if ($(this).val()) {
        $(targetItem).addClass("has-value");
    }
});

//on typing
floatingField.blur(function () {
    $(this).parent(".input-block").removeClass("focus");
    //if value is not exists
    if ($(this).val().length == 0) {
        $(this).parent(".input-block").removeClass("has-value");
    } else {
        $(this).parent(".input-block").addClass("has-value");
    }
});

//dropdown list
$("body").click(function () {
    if ($(".custom-select .drop-down-list").is(":visible")) {
        $(".custom-select").parent().removeClass("focus");
    }
    $(".custom-select .drop-down-list:visible").slideUp();
});
$(".custom-select .active-list").click(function () {
    $(this).parent().parent().addClass("focus");
    $(this)
        .parent()
        .find(".drop-down-list")
        .stop(true, true)
        .delay(10)
        .slideToggle(300);
});
$(".custom-select .drop-down-list li").click(function () {
    var listParent = $(this).parent().parent();
    //listParent.find('.active-list').trigger("click");
    listParent.parent(".select-block").removeClass("focus").addClass("added");
    listParent.find(".active-list").text($(this).text());
    listParent.find("input.list-field").attr("value", $(this).text());
});