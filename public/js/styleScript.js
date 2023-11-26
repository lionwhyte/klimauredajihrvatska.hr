//CAROUSEL
// Get all elements with the 'thumb' class
var thumbElements = document.querySelectorAll('.thumb');

// Add click event listener to each element
thumbElements.forEach(function (element, index) {
    const carousel = document.getElementById("carousel");
    element.addEventListener('click', function () {
        if(!element.classList.contains("border-gray-500")){
            // Your click event handling logic here
            carousel.classList.remove(carousel.classList[carousel.classList.length - 1])
            carousel.classList.add(`translate-x-[-${index * 100}%]`)

            thumbElements.forEach(function (el) {
                el.classList.remove("border-gray-500")
                el.classList.add("border-gray-200")
            });
            element.classList.remove("border-gray-200")
            element.classList.add("border-gray-500")
        }
    });
});
 
 
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
    elementsFixedOnScroll();
    backToTop();
};


//LOGO SECTION STICK ON TOP WHEN SCROLL DOWN
function elementsFixedOnScroll() {
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


//SHOW MORE TAB
function toggleDetails(button) {
    const content = button.nextElementSibling;
    content.classList.toggle('hidden');

    const icons = button.querySelector('.toggle-icon').children;
    icons[0].classList.toggle('hidden'); // Plus icon
    icons[1].classList.toggle('hidden'); // Minus icon

    const textSpan = button.querySelector('span:last-of-type');
    textSpan.textContent = content.classList.contains('hidden') ? '(prikaži više)' : '(prikaži manje)';
}

//INFO TABS BUTTONS IN SINGLE PRODUCT PAGE
function showTab(tabId) {
    if (document.getElementById(tabId).style.display !== 'block') {
        // Hide all tabs
        document.getElementById('opisContent').style.display = 'none';
        document.getElementById('informacijeContent').style.display = 'none';

        // Show the selected tab
        document.getElementById(tabId).style.display = 'block';

        // Emphasize the selected button with border
        document.getElementById('opisContentButton').classList.remove('border-b-4', 'border-sky-500');
        document.getElementById('informacijeContentButton').classList.remove('border-b-4', 'border-sky-500');
        document.getElementById(tabId + 'Button').classList.add('border-b-4', 'border-sky-500');
    }  
}

//MOBILE SCREEN FILTER
const filterProizvoda = document.getElementById("filter-proizvoda");
const filterButton = document.getElementById("filter-button");
const darkElement = document.getElementById("dark-element");

function toggleFilter(){
    filterProizvoda.classList.toggle("translate-x-[-140%]");
    darkElement.classList.toggle("hidden");
}
// Close the filter when clicking outside of it
document.body.addEventListener("click", function (event) {
    if(filterProizvoda){
        const isClickInsideFilter = filterProizvoda.contains(event.target);
        const isClickInsideFilterButton = filterButton.contains(event.target);
    
        if (!isClickInsideFilterButton && !isClickInsideFilter && !filterProizvoda.classList.contains("translate-x-[-140%]")) {
            filterProizvoda.classList.toggle("translate-x-[-140%]");
            darkElement.classList.toggle("hidden");

        }
    }
});

//PRICE RANGE FILTER
const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),
priceRange = document.querySelector(".slider .progress");
let priceGap = 0;

function setPriceRange(element){
    let minPrice = parseInt(priceInput[0].value),
    maxPrice = parseInt(priceInput[1].value);

    if(minPrice < parseInt(rangeInput[0].min)){
        minPrice = rangeInput[0].min;
    }
    
    if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
        if(element.target.className === "input-min"){
            rangeInput[0].value = minPrice;
            console.log(minPrice);
            console.log(((minPrice - rangeInput[0].min) / (rangeInput[0].max - rangeInput[0].min) * 100));
            priceRange.style.left = ((minPrice - rangeInput[0].min) / (rangeInput[0].max - rangeInput[0].min) * 100) + "%";
        }else{
            rangeInput[1].value = maxPrice;
            priceRange.style.right = 100 - ((maxPrice - rangeInput[1].min) / (rangeInput[1].max - rangeInput[1].min) * 100) + "%";
        }
    }
}
priceInput.forEach(input =>{
    input.addEventListener("input", e =>{
        setPriceRange(e);
    });
    setPriceRange({
        target: {
            className: input.className,
        }
    });
});

rangeInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);

        if((maxVal - minVal) < priceGap){
            if(e.target.className === "range-min"){
                rangeInput[0].value = maxVal - priceGap
            }else{
                rangeInput[1].value = minVal + priceGap;
            }
        }else{
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            priceRange.style.left = ((minVal - rangeInput[0].min) / (rangeInput[0].max - rangeInput[0].min) * 100) + "%";
            priceRange.style.right = 100 - ((maxVal - rangeInput[1].min) / (rangeInput[1].max - rangeInput[1].min)) * 100 + "%";
        }
    });
});


//SCROLL OVER ANIMATION
// document.addEventListener('scroll', function() {
//     const container = document.getElementById('container');
//     const animateMe = document.getElementById('animateMe');

//     // Check if the element is in view
//     const isInView = container.getBoundingClientRect().top <= window.innerHeight && container.getBoundingClientRect().bottom >= 0;

//     // Trigger the animation only if the element is in view and not already animated
//     if (isInView && !animateMe.classList.contains('animated')) {
//         animateMe.classList.remove('opacity-0', 'translate-y-10');
//         animateMe.classList.add('opacity-100', 'translate-y-0', 'transition', 'duration-[2000ms]', 'animated');
//     }
// });



    
