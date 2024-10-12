function scrollSlider(direction) {
    const slider = document.querySelector(".slider");
    const scrollAmount = slider.clientWidth; // Use slider's width for consistent scrolling
    slider.scrollBy({ left: direction * scrollAmount, behavior: "smooth" });
}
