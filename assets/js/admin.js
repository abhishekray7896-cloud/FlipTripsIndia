// Admin Panel JavaScript

document.addEventListener('DOMContentLoaded', function() {
  initializeAdminPanel();
});

function initializeAdminPanel() {
  // Color picker
  const colorInputs = document.querySelectorAll('input[type="color"]');
  colorInputs.forEach(input => {
    input.addEventListener('change', function() {
      updatePreview();
    });
  });

  // Form submission
  const forms = document.querySelectorAll('.fliptrips-form');
  forms.forEach(form => {
    form.addEventListener('submit', handleFormSubmit);
  });
}

function updatePreview() {
  const primaryColor = document.querySelector('input[name="primary_color"]')?.value || '#FF6B6B';
  const secondaryColor = document.querySelector('input[name="secondary_color"]')?.value || '#4ECDC4';

  const preview = document.querySelector('.fliptrips-preview');
  if (preview) {
    preview.style.setProperty('--fliptrips-primary', primaryColor);
    preview.style.setProperty('--fliptrips-secondary', secondaryColor);
  }
}

function handleFormSubmit(e) {
  e.preventDefault();
  const form = e.target;
  const submitBtn = form.querySelector('button[type="submit"]');
  const originalText = submitBtn.textContent;

  submitBtn.disabled = true;
  submitBtn.textContent = 'Saving...';

  // Simulate form submission (in real scenario, this would be a server request)
  setTimeout(() => {
    submitBtn.disabled = false;
    submitBtn.textContent = originalText;
    showAdminToast('Settings saved successfully!', 'success');
  }, 1000);
}

function showAdminToast(message, type = 'info') {
  const toast = document.createElement('div');
  toast.className = `fliptrips-${type}`;
  toast.textContent = message;
  toast.style.cssText = 'padding: 15px; margin-bottom: 20px; border-radius: 4px;';

  const container = document.querySelector('.fliptrips-admin-panel');
  if (container) {
    container.insertBefore(toast, container.firstChild);

    setTimeout(() => {
      toast.remove();
    }, 3000);
  }
}
