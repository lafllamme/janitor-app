validate=()=>{"use strict";var e=document.querySelectorAll(".needs-validation");Array.prototype.slice.call(e).forEach((function(e){e.addEventListener("submit",(function(t){e.checkValidity()||(t.preventDefault(),t.stopPropagation()),e.classList.add("was-validated")}),!1)}))},$(document).ready((function(){$("#hoverme").hover((function(){console.log("Amk"),$("#modal").modal()}))}));var modal=document.getElementById("myModal"),trigger=document.getElementById("hoverme"),span=document.getElementsByClassName("close")[0];trigger.onmouseover=function(){modal.style.display="block"},span.onclick=function(){modal.style.display="none"};var element=$(".floating-chat"),myStorage=localStorage;function openElement(){var e=element.find(".messages"),t=element.find(".text-box");element.find(">i").hide(),element.addClass("expand"),element.find(".chat").addClass("enter");t.val().length;t.keydown(onMetaAndEnter).prop("disabled",!1).focus(),element.off("click",openElement),element.find(".header button").click(closeElement),element.find("#sendMessage").click(sendNewMessage),e.scrollTop(e.prop("scrollHeight"))}function closeElement(){element.find(".chat").removeClass("enter").hide(),element.find(">i").show(),element.removeClass("expand"),element.find(".header button").off("click",closeElement),element.find("#sendMessage").off("click",sendNewMessage),element.find(".text-box").off("keydown",onMetaAndEnter).prop("disabled",!0).blur(),setTimeout((function(){element.find(".chat").removeClass("enter").show(),element.click(openElement)}),500)}function createUUID(){for(var e=[],t="0123456789abcdef",n=0;n<36;n++)e[n]=t.substr(Math.floor(16*Math.random()),1);return e[14]="4",e[19]=t.substr(3&e[19]|8,1),e[8]=e[13]=e[18]=e[23]="-",e.join("")}function sendNewMessage(){var e=$(".text-box"),t=e.html().replace(/\<div\>|\<br.*?\>/gi,"\n").replace(/\<\/div\>/g,"").trim().replace(/\n/g,"<br>");if(t){var n=$(".messages");n.append(['<li class="self">',t,"</li>"].join("")),e.html(""),e.focus(),n.finish().animate({scrollTop:n.prop("scrollHeight")},250)}}function onMetaAndEnter(e){(e.metaKey||e.ctrlKey)&&13==e.keyCode&&sendNewMessage()}myStorage.getItem("chatID")||myStorage.setItem("chatID",createUUID()),setTimeout((function(){element.addClass("enter")}),1e3),element.click(openElement);const cards=document.querySelectorAll(".cards"),setClasses=()=>{const e=["left","active","right"];cards.forEach(((t,n)=>t.classList.add(e[n])))},changePositions=e=>{const t=e.currentTarget,n=document.querySelector(".cards.active");if(t.classList.contains("active"))return;const s=e.currentTarget.className,o=n.className;t.className=o,n.className=s};if(cards.forEach((e=>{e.addEventListener("click",changePositions)})),setClasses(),/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))document.getElementById("ficons").style.display="none";else{var bgImage=document.getElementById("home");bgImage.className="bgimageDesktop",document.getElementById("ficons1").style.display="none",document.getElementById("increaseSize").style.height="950px",document.getElementById("increaseSize").style.width="550px"}$(document).ready((function(){$(window).width()>991&&$(".navbar-light .d-menu").hover((function(){$(this).find(".sm-menu").first().stop(!0,!0).slideDown(150)}),(function(){$(this).find(".sm-menu").first().stop(!0,!0).delay(120).slideUp(100)}))}));const scrollDown=()=>{$("html, body").animate({scrollTop:$("#about").offset().top},200,"swing")};$((function(){$("a[href*=\\#]:not([href=\\#])").click((function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if((e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length)return $("html,body").animate({scrollTop:e.offset().top},500),!1}}))})),document.querySelectorAll("#nav-link").forEach((function(e){e.onclick=function(){console.log(this.id),$(".navbar-collapse").collapse("hide")}}));const messageClose=document.querySelectorAll(".Message-close"),messages=document.querySelectorAll(".Message");function closeMessage(e){e.addClass("is-hidden")}function openSubpage(){setTimeout((function(){window.open("https://www.koeln.de/branchen/eintrag/3144/hausverwaltungen/curata-wohnungsverwaltungsgesellschaft-mbh","_blank")}),1100)}messageClose.forEach((e=>{e.addEventListener("click",(function(t){console.log("message clicked",t),$(messages).remove(),e.setAttribute("style","background-color: yellow;")}))})),$("#js-helpMe").on("click",(function(e){alert("Versuch es bitte nochmal auszufüllen!"),closeMessage($(this).closest(".Message"))})),$("#js-authMe").on("click",(function(e){alert("Kontaktieren Sie uns über unser Formular!"),$("#regular").remove(),closeMessage($(this).closest(".Message"))})),$("#closeBtn").on("click",(function(e){$("#regular").remove(),closeMessage($(this).closest(".Message"))})),$(document).ready((function(){setTimeout((function(){closeMessage($("#js-timer"))}),5e3)})),$("#success").length>0&&($("#regular").remove(),$([document.documentElement,document.body]).animate({scrollTop:$("#success").offset().top-50},2e3)),$("#error").length>0&&($("#regular").remove(),$("#regular").remove(),$([document.documentElement,document.body]).animate({scrollTop:$("#error").offset().top},2e3));var ranCards=document.getElementsByClassName("card servicesText"),previousRandomCard=null;function repeatOften(){previousRandomCard&&previousRandomCard.classList.toggle("randomCard");var e=Math.floor(Math.random()*(ranCards.length-1))+0,t=ranCards[e];t.classList.toggle("randomCard"),previousRandomCard=t,setTimeout(repeatOften,5e3)}repeatOften();var floatingField=$(".material-form .floating-field").find(".form-control"),formItem=$(".material-form .input-block").find(".form-control");formItem.focus((function(){$(this).parent(".input-block").addClass("focus")})),formItem.blur((function(){$(this).parent(".input-block").removeClass("focus")})),floatingField.each((function(){var e=$(this).parent();$(this).val()&&$(e).addClass("has-value")})),floatingField.blur((function(){$(this).parent(".input-block").removeClass("focus"),0==$(this).val().length?$(this).parent(".input-block").removeClass("has-value"):$(this).parent(".input-block").addClass("has-value")})),$("body").click((function(){$(".custom-select .drop-down-list").is(":visible")&&$(".custom-select").parent().removeClass("focus"),$(".custom-select .drop-down-list:visible").slideUp()})),$(".custom-select .active-list").click((function(){$(this).parent().parent().addClass("focus"),$(this).parent().find(".drop-down-list").stop(!0,!0).delay(10).slideToggle(300)})),$(".custom-select .drop-down-list li").click((function(){var e=$(this).parent().parent();e.parent(".select-block").removeClass("focus").addClass("added"),e.find(".active-list").text($(this).text()),e.find("input.list-field").attr("value",$(this).text())}));
