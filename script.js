window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    const scrollPosition = window.scrollY;
    header.style.transform = `translateY(-${scrollPosition * 0.5}px)`;
  });