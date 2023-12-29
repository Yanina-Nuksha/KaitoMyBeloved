const elementToDisappear = document.getElementById('col2-navbar');
const details = document.getElementById('details');

function isElementInViewport(el) {

  if (!el) return false;

  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0
  );
}

function handleScroll() {
  if (isElementInViewport(details)) {
    if (elementToDisappear) {
      elementToDisappear.style.display = 'none';
    }
  } else {
    if (elementToDisappear) {
      elementToDisappear.style.display = 'block';
    }
  }
}

window.addEventListener('scroll', handleScroll);