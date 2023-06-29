// function App(){
//     window.onload = function(event) {
//         var app = new App();
//         window.app = app;
//     }

//     App.prototype.processingButton = function(event) {
//         const btn = event.currentTarget;
//         const carruselList = event.currentTarget.parentMode;
//         const track = event.currentTarget.parentMode.querySelector("#track");
//         const carrusel = track.querySelector(".carrusel");

//         const carruselWidth = carrusel[0].offsetWidth;

//         const trackWidth = track.offsetWidth;
//         const listWidth = carruselList.offsetWidth;

//         track.style.left == "" ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0,-2) *-1);
//         btn.dataset.button == "button-prev" ? prevAction(leftPosition,carruselWidth, track) : nextAction(leftPosition,trackWidth, listWidth, carruselWidth, track);
//     }
//     let prevAction = (leftPosition, carruselWidth, track) => {
//         if(leftPosition > 0) {
//             track.style.left = `${-1 * (leftPosition - carruselWidth)}px`;
//         }
//     }
//     let nextAction = (leftPosition, trackWidth, listWidth, carruselWidth, track) => {
//         if(leftPosition < (trackWidth - listWidth)){
//             track.style.left = `${-1 * (leftPosition + carruselWidth)}px`;
//         }

//     }



// const carousel = document.querySelector(".carousel");

// let isDragStart = false, prevPageX, prevScrollLeft;

// const dragStart = (e) => {
//     isDragStart = true;
//     prevPageX = e.pageX;
//     prevScrollLeft = carousel.scrollLeft;
// }

// const dragging = (e) => {
//     //teoricamente tiene que andar
//     if(!isDragStart) return;
//     e.preventDefault();
//     let positionDiff = e.pageX - prevPageX;
//     carousel.scrollLeft = prevScrollLeft - positionDiff;
// }

// const dragStop = () => {
//     isDragStart = false;
// }

// carousel.addEventListener("mousemove", dragStart);
// carousel.addEventListener("mousdown", dragging);
// carousel.addEventListener("mousup", dragStop);