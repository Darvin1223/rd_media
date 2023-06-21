document.addEventListener("DOMContentLoaded", () => {
    const body = document.querySelector('body');
    const darkModeSwitch = document.getElementById("dark-mode-switch");
    let isDarkMode = false;
  
    darkModeSwitch.addEventListener("click", () => {
      isDarkMode = !isDarkMode;
  
      if (isDarkMode) {
        body.classList.add('dark-mode');
        body.classList.remove('light-mode');
        darkModeSwitch.classList.add('dark-mode_icon');
        darkModeSwitch.innerText = "light_mode";
      } else {
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
        darkModeSwitch.classList.remove('dark-mode_icon');
        darkModeSwitch.innerText = "dark_mode";
      }
    });
  });
  