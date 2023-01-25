function sim(){
  $('#mos_sim').show(1000);
  $('#mos_hbb').hide(1000);
  $('#mos_mifi').hide(1000);
}
function hbb(){
  $('#mos_hbb').show(1000);
  $('#mos_sim').hide(1000);
  $('#mos_mifi').hide(1000);
}
function mifi(){
  $('#mos_mifi').show(1000);
  $('#mos_hbb').hide(1000);
  $('#mos_sim').hide(1000);
}

function paqSim(){
  $('.view_clos__sim').show(1000);
  $('.view_clos__paqt').hide(1000);
  $('.view_clos__paqt2').hide(1000);
  $('.view_clos__paqt3').hide(1000);
  $('.view_clos__pagoAnticipado').hide(1000);
}
function pagoAnticipado(){
  $('.view_clos__pagoAnticipado').show(1000);
  $('.view_clos__paqt2').hide(1000);
  $('.view_clos__paqt3').hide(1000);
  $('.view_clos__paqt').hide(1000);
  $('.view_clos__sim').hide(1000);
}
function paqMifi(){
  $('.view_clos__paqt').show(1000);
  $('.view_clos__paqt2').hide(1000);
  $('.view_clos__paqt3').hide(1000);
  $('.view_clos__sim').hide(1000);
  $('.view_clos__pagoAnticipado').hide(1000);
}
function paqHbb5(){
  $('.view_clos__paqt2').show(1000);
  $('.view_clos__paqt3').hide(1000);
  $('.view_clos__paqt').hide(1000);
  $('.view_clos__sim').hide(1000);
  $('.view_clos__sim').hide(1000);
  $('.view_clos__pagoAnticipado').hide(1000);
}
function paqHbb10(){
  $('.view_clos__paqt3').show(1000);
  $('.view_clos__paqt2').hide(1000);
  $('.view_clos__paqt').hide(1000);
  $('.view_clos__sim').hide(1000);
  $('.view_clos__pagoAnticipado').hide(1000);
}

/**EFECTO 3D TARJETAS**/
// const wrapper = document.querySelectorAll(".cardWrap");

// wrapper.forEach(element => {
//   let state = {
//     mouseX: 0,
//     mouseY: 0,
//     height: element.clientHeight,
//     width: element.clientWidth
//   };

//   element.addEventListener("mousemove", ele => {
//     const card = element.querySelector(".cardA");
//     const cardBg = card.querySelector(".cardBg");
//     state.mouseX = ele.pageX - element.offsetLeft - state.width / 2;
//     state.mouseY = ele.pageY - element.offsetTop - state.height / 2;

//     // parallax angle in card
//     const angleX = (state.mouseX / state.width) * 30;
//     const angleY = (state.mouseY / state.height) * -30;
//     card.style.transform = `rotateY(${angleX}deg) rotateX(${angleY}deg) `;

//     // parallax position of background in card
//     const posX = (state.mouseX / state.width) * -40;
//     const posY = (state.mouseY / state.height) * -40;
//     cardBg.style.transform = `translateX(${posX}px) translateY(${posY}px)`;
//   });

//   element.addEventListener("mouseout", () => {
//     const card = element.querySelector(".cardA");
//     const cardBg = card.querySelector(".cardBg");
//     card.style.transform = `rotateY(0deg) rotateX(0deg) `;
//     cardBg.style.transform = `translateX(0px) translateY(0px)`;
//   });
// });



//////CAMBIAR COLOR EN RESPONSE

var barra__burt2 = document.getElementById('barra__burt2'),
    fixed = document.getElementById('ftco-navbar'),
    contador = 0;

    function cambioColor(){
      if(contador==0){
        fixed.classList.add('fixed2');
        contador=1;
      }
      else{
        fixed.classList.remove('fixed2');
        contador=0;
      }
    }

    barra__burt2.addEventListener('click',cambioColor,true)