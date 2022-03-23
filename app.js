let leading = document.getElementById('swapper');
const text = 
[
"\"Whether it is a philosophical comment, a poor attempt at making a funny joke or a web application — You got it!\"" 
, "\"I learned in Ruby but now I'm happily married with JavaScript\""
, "\"I React a lot, but that does not limit my Vue\""
, "\"I can relocate if needed, just tell me where the coffee is\""
];
let counter = 0;
let interval = setInterval(introChange, 8000);

function introChange() {
    leading.textContent = text[counter];
    counter++;
    if (counter >= text.length) {
        counter = 0;
    }
}

introChange();