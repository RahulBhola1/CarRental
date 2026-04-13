// Particle system for hero
const particleContainer = document.getElementById('particles');
if (particleContainer) {
  for (let i = 0; i < 30; i++) {
    const p = document.createElement('div');
    const size = Math.random() * 3 + 1;
    p.style.cssText = `
      position: absolute;
      width: ${size}px; height: ${size}px;
      background: rgba(245,166,35,${Math.random() * 0.4 + 0.1});
      border-radius: 50%;
      left: ${Math.random() * 100}%;
      top: ${Math.random() * 100}%;
      animation: particleFloat ${Math.random() * 6 + 4}s ease-in-out ${Math.random() * 4}s infinite alternate;
    `;
    particleContainer.appendChild(p);
  }

  const style = document.createElement('style');
  style.textContent = `
    @keyframes particleFloat {
      from { transform: translateY(0) translateX(0); opacity: 0.3; }
      to { transform: translateY(-40px) translateX(${Math.random() > 0.5 ? '' : '-'}20px); opacity: 0.8; }
    }
  `;
  document.head.appendChild(style);
}
