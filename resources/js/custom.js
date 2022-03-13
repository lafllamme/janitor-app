
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
        scrollTop: $("#success").offset().top - 75
    }, 2000, 'swing');
}

if ($('#error').length > 0) {
    $("#regular").remove();
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#error").offset().top - 75
    }, 2000, 'swing');
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


$(window).on('load', function () {
    setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
});

function removeLoader() {
    $(".loader-wrapper").fadeOut(500, function () {
        // fadeOut complete. Remove the loading div
        $(".loader-wrapper").remove(); //makes page more lightweight 
    });

    $(document).ready(function () {
        $("#closeBtnErr").click(function () {
            $(".Message ").remove();
        });

    })
}

var checkmarkIdPrefix = "loadingCheckSVG-";
var checkmarkCircleIdPrefix = "loadingCheckCircleSVG-";
var verticalSpacing = 50;

function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}

function createSVG(tag, properties, opt_children) {
    var newElement = document.createElementNS("http://www.w3.org/2000/svg", tag);
    for (prop in properties) {
        newElement.setAttribute(prop, properties[prop]);
    }
    if (opt_children) {
        opt_children.forEach(function (child) {
            newElement.appendChild(child);
        })
    }
    return newElement;
}

function createPhraseSvg(phrase, yOffset) {
    var text = createSVG("text", {
        fill: "white",
        x: 50,
        y: yOffset,
        "font-size": 18,
        "font-family": "Arial"
    });
    text.appendChild(document.createTextNode(phrase + "..."));
    return text;
}

function createCheckSvg(yOffset, index) {
    var check = createSVG("polygon", {
        points: "21.661,7.643 13.396,19.328 9.429,15.361 7.075,17.714 13.745,24.384 24.345,9.708 ",
        fill: "rgba(255,255,255,1)",
        id: checkmarkIdPrefix + index
    });
    var circle_outline = createSVG("path", {
        d: "M16,0C7.163,0,0,7.163,0,16s7.163,16,16,16s16-7.163,16-16S24.837,0,16,0z M16,30C8.28,30,2,23.72,2,16C2,8.28,8.28,2,16,2 c7.72,0,14,6.28,14,14C30,23.72,23.72,30,16,30z",
        fill: "white"
    })
    var circle = createSVG("circle", {
        id: checkmarkCircleIdPrefix + index,
        fill: "rgba(255,255,255,0)",
        cx: 16,
        cy: 16,
        r: 15
    })
    var group = createSVG("g", {
        transform: "translate(10 " + (yOffset - 20) + ") scale(.9)"
    }, [circle, check, circle_outline]);
    return group;
}

function addPhrasesToDocument(phrases) {
    phrases.forEach(function (phrase, index) {
        var yOffset = 30 + verticalSpacing * index;
        document.getElementById("phrases").appendChild(createPhraseSvg(phrase, yOffset));
        document.getElementById("phrases").appendChild(createCheckSvg(yOffset, index));
    });
}

function easeInOut(t) {
    var period = 200;
    return (Math.sin(t / period + 100) + 1) / 2;
}

document.addEventListener("DOMContentLoaded", function (event) {
    var phrases = shuffleArray(["Gartenpflege 🏡", "Winterdienst ❄️", "Entrümpelung 🔍", "Objektüberwachung 🔦", "Objekt Reinigung 🧹", "Kleinere Repaturen 🔧", "Transport 📦", "Sonstige Dienstleistungen 📲"]);
    addPhrasesToDocument(phrases);
    var start_time = new Date().getTime();
    var upward_moving_group = document.getElementById("phrases");
    upward_moving_group.currentY = 0;
    var checks = phrases.map(function (_, i) {
        return {
            check: document.getElementById(checkmarkIdPrefix + i),
            circle: document.getElementById(checkmarkCircleIdPrefix + i)
        };
    });

    function animateLoading() {
        var now = new Date().getTime();
        upward_moving_group.setAttribute("transform", "translate(0 " + upward_moving_group.currentY + ")");
        upward_moving_group.currentY -= 1.35 * easeInOut(now);
        checks.forEach(function (check, i) {
            var color_change_boundary = -i * verticalSpacing + verticalSpacing + 15;
            if (upward_moving_group.currentY < color_change_boundary) {
                var alpha = Math.max(Math.min(1 - (upward_moving_group.currentY - color_change_boundary + 15) / 30, 1), 0);
                check.circle.setAttribute("fill", "rgba(255, 255, 255, " + alpha + ")");
                var check_color = [Math.round(255 * (1 - alpha) + 120 * alpha), Math.round(255 * (1 - alpha) + 154 * alpha)];
                check.check.setAttribute("fill", "rgba(255, " + check_color[0] + "," + check_color[1] + ", 1)");
            }
        })
        if (now - start_time < 30000 && upward_moving_group.currentY > -710) {
            requestAnimationFrame(animateLoading);
        }
    }
    //animateLoading();
});