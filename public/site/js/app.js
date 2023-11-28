"use strict";

const switcher = document.querySelector("#btn");
const icon = document.getElementById("js-icon");
const currentTheme = localStorage.getItem("theme");
const isDark = currentTheme === "dark-theme";

if (isDark) {
    document.documentElement.classList.add("dark-theme");
    icon.classList.add("ph-moon");
} else {
    icon.classList.add("ph-sun");
}

switcher.addEventListener("click", function () {
    const isDarkMode =
        document.documentElement.classList.contains("dark-theme");
    document.documentElement.classList.toggle("dark-theme");

    if (isDarkMode) {
        icon.classList.remove("ph-moon");
        icon.classList.add("ph-sun");
        localStorage.setItem("theme", "light-theme");
    } else {
        icon.classList.remove("ph-sun");
        icon.classList.add("ph-moon");
        localStorage.setItem("theme", "dark-theme");
    }
});

// Função para voltar ao topo
function voltarAoTopo() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}

// Exibir ou ocultar o botão baseado no scroll da página
window.onscroll = function () {
    var botaoVoltarTopo = document.getElementById("main-topo");

    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        botaoVoltarTopo.style.display = "block";
    } else {
        botaoVoltarTopo.style.display = "none";
    }
};
