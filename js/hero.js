console.log('Welcome to the DOJO rookie!');


//===============================

// This is a JavaScript code for a typewriter effect with two messages
// The first message says 'Lemuel Walkinshaw' with an id of 'hero-title'
// The second message says 'aspiring web developer' with an id of 'hero-text'
// The messages run one after the other with a 1 second delay on loading the page

// Define the messages and the elements
const messages = ["Lemuel Walkinshaw", "Aspiring Web Developer"];
const elements = [document.getElementById("hero-title"), document.getElementById("hero-text")];

// Define a function to type a message on an element
function typeMessage(message, element, callback) {
  // Initialize the index and the interval
  let index = 0;
  let interval = setInterval(function() {
    // Append the next character to the element
    element.textContent += message[index];
    // Increment the index
    index++;
    // If the index reaches the end of the message, clear the interval and invoke the callback
    if (index === message.length) {
      clearInterval(interval);
      callback();
    }
  }, 100); // Adjust the typing speed here
}

// Define a function to run the typewriter effect
function runTypewriter() {
  // Type the first message on the first element
  typeMessage(messages[0], elements[0], function() {
    // Wait for 1 second before typing the second message on the second element
    setTimeout(function() {
      typeMessage(messages[1], elements[1], function() {
        // Do nothing after typing the second message
      });
    }, 1000); // Adjust the delay here
  });
}

// Run the typewriter effect on loading the page
window.onload = runTypewriter;
