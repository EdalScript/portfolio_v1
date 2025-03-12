document.addEventListener("DOMContentLoaded", () => {
    const quotes = [
      "“Whether it is a philosophical trivial comment, a pun or a web application — You got it!”",
      "“I'm happily married with JavaScript”",
      "“I React a lot, but that does not limit my Vue”",
      "“I can relocate if needed, just tell me where the coffee is”",
      "“Would you believe me if I tell you I wrote this line without using hands?”",
      "“I like coding the same way I like my coffee — without bugs”",
      "“I should transform this portfolio into a React app eventually…”"
    ];
    let counter = 0;
    const swapper = document.getElementById("swapper");
    if (swapper) {
      swapper.style.opacity = 0;
      
      const updateQuote = () => {
        swapper.style.opacity = 0;
        setTimeout(() => {
          swapper.textContent = quotes[counter];
          swapper.style.opacity = 1;
          counter = (counter + 1) % quotes.length;
        }, 500);
      };
  
      updateQuote();
      let intervalId = setInterval(updateQuote, 8000);
  
      document.addEventListener("visibilitychange", () => {
        if (document.hidden) {
          clearInterval(intervalId);
        } else {
          updateQuote();
          intervalId = setInterval(updateQuote, 8000);
        }
      });
    }
  
    const modalTrigger = document.querySelector("#modal");
    const closeModalBtn = document.querySelector(".popup-close");
    const popupWrapper = document.querySelector(".popup-wrapper");
  
    const showPopup = () => {
      if (popupWrapper) popupWrapper.style.display = "block";
    };
  
    const hidePopup = () => {
      if (popupWrapper) popupWrapper.style.display = "none";
    };
  
    if (modalTrigger) modalTrigger.addEventListener("click", showPopup);
    if (closeModalBtn) closeModalBtn.addEventListener("click", hidePopup);
    if (popupWrapper) {
      popupWrapper.addEventListener("click", (e) => {
        if (e.target === popupWrapper) hidePopup();
      });
    }
  });
  