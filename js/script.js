
// Hämta knappen och texten från HTML
const button = document.querySelector('[data-js-action="toggle-info"]');
const info = document.querySelector('[data-js-target="extra-info"]');

// Visa eller dölj texten när knappen klickas
if (button && info) {
    button.addEventListener("click", function () {
        info.hidden = !info.hidden;
        button.setAttribute("aria-expanded", String(!info.hidden));
    });
}
