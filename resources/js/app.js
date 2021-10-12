import 'particles.js/particles';
const particlesJS = window.particlesJS;

// JSON file is located in the directory of 'public/js/particlejs-config.json'
// Header
particlesJS.load('particles-js', '../js/particlesjs-config.json', function() {
    console.log('callback - particles.js config loaded');
});

// CTA
particlesJS.load('particles-js-cta', '../js/particlesjscta-config.json', function() {
    console.log('callback - particles.js CTA config loaded');
});

// #### Dark theme switch ####
