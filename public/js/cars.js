// Filter functionality
document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.dataset.filter;
    document.querySelectorAll('.car-card').forEach(card => {
      if (filter === 'all' || card.dataset.tags.includes(filter)) {
        card.style.display = '';
        card.style.animation = 'fadeIn 0.4s ease';
      } else {
        card.style.display = 'none';
      }
    });
  });
});

// Animate price amount
document.querySelectorAll('.price-amount').forEach(el => {
  el.style.transform = 'scale(0.8)';
  el.style.opacity = '0';
  el.style.transition = 'all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.transform = 'scale(1)';
        e.target.style.opacity = '1';
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });
  obs.observe(el);
});

// Add fadeIn keyframe
const style = document.createElement('style');
style.textContent = `@keyframes fadeIn { from { opacity: 0; transform: scale(0.97); } to { opacity: 1; transform: scale(1); } }`;
document.head.appendChild(style);
