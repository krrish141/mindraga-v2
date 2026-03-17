function showTab(sectionId, btn) {

    const sections = document.querySelectorAll("#first, #second, #third, #fourth");
    const buttons = document.querySelectorAll(".program-toggle .toggle-btn");

    // hide all sections
    sections.forEach(section => {
        if(section){
            section.classList.add("hidden");
        }
    });

    // show selected section
    document.getElementById(sectionId).classList.remove("hidden");

    // remove active from all buttons
    buttons.forEach(button => button.classList.remove("active"));

    // add active to clicked button
    btn.classList.add("active");
}




document.addEventListener("DOMContentLoaded", function () {

    const connector = document.querySelector(".connector");
    const trigger = document.querySelector(".vuca-image");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                connector.classList.add("animate");
            } else {
                connector.classList.remove("animate");
            }

        });

    }, {
        threshold: 0.01
    });

    observer.observe(trigger);

});