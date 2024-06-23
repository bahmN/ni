const overlay = document.getElementById("overlay");


Array.from(document.getElementsByClassName("typesofwork__content_container"))
    .forEach((element, index) =>
        element.addEventListener("click", () => {
            overlay.style.display = "block";

            const modal = document.getElementById(`modal${index}`);
            modal.style.display = "flex";

            const close = document.getElementById(`close${index}`);
            close.addEventListener("click", () => {
                overlay.style.display = "none";
                modal.style.display = "none";
            });

            overlay.addEventListener("click", () => {
                overlay.style.display = "none";
                modal.style.display = "none";
            });
        })
    );

