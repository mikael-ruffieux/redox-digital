// Accordions
function toggle(id) {
    let title = document.getElementById(`accordion-title-${id}`);
    let body = document.getElementById(`accordion-content-${id}`);

    console.log();

    title
        .querySelector("button")
        .setAttribute(
            "aria-expanded",
            (
                title.querySelector("button").getAttribute("aria-expanded") ===
                "false"
            ).toString()
        );
    body.classList.toggle("show");
}
