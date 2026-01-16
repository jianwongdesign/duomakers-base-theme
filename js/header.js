/**
 * Header interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('header');

  if (!header) return;

  // Example: add class on scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
  });
});
