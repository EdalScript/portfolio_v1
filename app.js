const leading = document.getElementById('swapper');
const text = 
[
"\"Whether it is a philosophical trivial comment, a pun or a web application — You got it!\"" 
, "\"I'm happily married with JavaScript\""
, "\"I React a lot, but that does not limit my Vue\""
, "\"I can relocate if needed, just tell me where the coffee is\""
, "\"Would you believe me if I tell you I wrote this line without using hands?\""
, "\"I like coding the same way I like my coffee — without bugs\""
];
let counter = 0;
const interval = setInterval(introChange, 8000);
const modal = document.querySelector('#modal');
const close = document.querySelector('.popup-close');
const popup = document.querySelector('.popup-wrapper');

function introChange() {
    leading.textContent = text[counter];
    counter++;
    if (counter >= text.length) {
        counter = 0;
    }
}

introChange();

modal.addEventListener('click', () => {
    popup.style.display = 'block';
})

close.addEventListener('click', () => {
    popup.style.display = 'none';
})

popup.addEventListener('click', () =>{
    popup.style.display = 'none';
})