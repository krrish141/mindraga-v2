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


document.addEventListener("DOMContentLoaded", () => {

    // 🔥 MOBILE CHECK
    if (window.innerWidth <= 768) return;

    const wrapper = document.querySelector(".diag-section");
    const scroller = document.getElementById("diagScroll");

    if (!wrapper || !scroller) return;

    let current = 0;
    let target = 0;
    const ease = 0.08;

    function setHeight() {
        const scrollWidth = scroller.scrollWidth;
        wrapper.style.height = (scrollWidth + window.innerHeight) + "px";
    }

    setHeight();
    window.addEventListener("resize", setHeight);

    function animate() {
        current += (target - current) * ease;
        scroller.style.transform = `translate3d(-${current}px, 0, 0)`;
        requestAnimationFrame(animate);
    }

    animate();

    window.addEventListener("scroll", () => {

        const rect = wrapper.getBoundingClientRect();
        const scrollWidth = scroller.scrollWidth - window.innerWidth + 200;
        const totalScroll = wrapper.offsetHeight - window.innerHeight;

        let progress = -rect.top / totalScroll;
        progress = Math.max(0, Math.min(progress, 1));

        target = progress * scrollWidth;
    });

});