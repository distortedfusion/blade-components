// Removes the `.no-js` class from the html element and replaces it with `.js`.
// This is used for some elements to determine JS support and respond accordingly.
const html = document.getElementsByTagName("html")[0];
html.className = html.className.replace(/\bno-js\b/, 'js');
