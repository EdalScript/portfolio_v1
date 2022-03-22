let leading = document.getElementById('swapper');
const text = 
[
"Whether it is a philosophical comment, a poor attempt at making a funny joke or a web application — You got it!" 
, "I learned in Ruby but now I'm happily married with JavaScript"
, 'I React a lot, but that is just my Vue'
, 'I code for coffee — no, wait! I mean I coffee with code. Yes!'
];
let counter = 0;
let interval = setInterval(introChange, 7000);

function introChange() {
    leading.innerHTML = text[counter];
    counter++;
    if (counter >= text.length) {
        counter = 0;
    }
}

introChange();