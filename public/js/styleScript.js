 //MOBILE NAV LINKS WHEN OPENING TRANSITION
 document.getElementById('hamburger').addEventListener('click', function() {
    const nav = document.getElementById('mobile-nav');
    if (nav.clientHeight === 0) {
        // Open the nav element
        nav.style.height = `${nav.scrollHeight}px`;
        nav.style.marginTop = '2rem';
        nav.style.transition = 'height 500ms, margin-top 1000ms';
    } else {
        // Close the nav element
        nav.style.height = '0';
        nav.style.marginTop = '0';
        nav.style.transition = 'height 500ms, margin-top 1000ms ';
    }
});


//ON SCROLL FUNCTIONS
window.onscroll = function() {
    logoSectionScrollFixed();
    backToTop();
};


//LOGO SECTION STICK ON TOP WHEN SCROLL DOWN
function logoSectionScrollFixed() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
       document.getElementById("logo-section").classList.remove("container");
       document.getElementById("logo-section").classList.add("fixed");
       document.getElementById("logo-section").classList.add("top-0");
       document.getElementById("logo-section").classList.add("w-screen");
        
    } else {
       document.getElementById("logo-section").classList.add("container");
       document.getElementById("logo-section").classList.remove("fixed");
       document.getElementById("logo-section").classList.remove("top-0");
       document.getElementById("logo-section").classList.remove("w-screen");   
    }
}


//BACK TO THE TOP OF THE PAGE BUTTON
const backToTopButton = document.getElementById('back-to-top');
// Show the button when user scrolls down 100px from the top of the document
function backToTop() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        backToTopButton.classList.remove('hidden');
    } else {
        backToTopButton.classList.add('hidden');
    }
};
// When the user clicks on the button, scroll to the top of the document
backToTopButton.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});


//SHOW MORE FUNCTIONfunction toggleDetails(button) {
function toggleDetails(button) {
    const content = button.nextElementSibling;
    content.classList.toggle('hidden');

    const icons = button.querySelector('.toggle-icon').children;
    icons[0].classList.toggle('hidden'); // Plus icon
    icons[1].classList.toggle('hidden'); // Minus icon

    const textSpan = button.querySelector('span:last-of-type');
    textSpan.textContent = content.classList.contains('hidden') ? '(prikaži više)' : '(prikaži manje)';
}
    
