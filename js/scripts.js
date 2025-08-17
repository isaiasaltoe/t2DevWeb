// Placeholder para futuras melhorias de UX
document.addEventListener('DOMContentLoaded', function() {
  // Clique em cards inteiros (se tiver data-href)
  document.querySelectorAll('[data-href]').forEach(card => {
    card.addEventListener('click', () => location.href = card.getAttribute('data-href'));
  });
});
