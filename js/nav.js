
// for making navbar responsive


const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.nav');

menu.addEventListener('click', function () {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
})



const subMenu = document.getElementById('sub-menu');
const dropdownArrow = document.getElementById('dropdown-arrow');

dropdownArrow.addEventListener('click', function subMenuToggle() {
    if (subMenu.style.display != 'none') {
        subMenu.style.display = 'none';
        dropdownArrow.style.transform = 'rotate(45deg)';
        dropdownArrow.style.top = '-2px';
    }

    else {
        subMenu.style.display = 'block';
        dropdownArrow.style.transform = 'rotate(-135deg)';
        dropdownArrow.style.top = '2px';
    }
}
)
