// hide dropdown menu

window.onclick = function (e) {
  if (!e.target.matches('#dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

// show dropdown menu
document.getElementById("dropbtn").addEventListener('click', () => {
  document.getElementById("myDropdown").classList.toggle("show");
});

// smooth scroling nav

const smoothLinks = document.querySelectorAll('a[href^="#"]');
for (let smoothLink of smoothLinks) {
  smoothLink.addEventListener('click', function (e) {
    e.preventDefault();
    const id = smoothLink.getAttribute('href');

    document.querySelector(id).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  });
};

// smooth scroling signature

document.querySelector('#signature').addEventListener('click', function (e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
