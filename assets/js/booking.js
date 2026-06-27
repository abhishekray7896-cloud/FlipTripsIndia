// Booking Form JavaScript

document.addEventListener('DOMContentLoaded', function() {
  initializeBookingForm();
  initializeDestinationFilter();
  initializeTourFilter();
});

function initializeBookingForm() {
  const bookingForm = document.getElementById('fliptrips-booking-form');
  if (!bookingForm) return;

  bookingForm.addEventListener('submit', handleBookingSubmit);
}

function handleBookingSubmit(e) {
  e.preventDefault();

  const form = e.target;
  const submitBtn = form.querySelector('button[type="submit"]');
  const originalText = submitBtn.textContent;

  // Show loading state
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Submitting...';

  const formData = {
    name: form.querySelector('[name="name"]').value,
    email: form.querySelector('[name="email"]').value,
    phone: form.querySelector('[name="phone"]').value,
    check_in: form.querySelector('[name="check_in"]').value,
    check_out: form.querySelector('[name="check_out"]').value,
    guests: form.querySelector('[name="guests"]').value,
    message: form.querySelector('[name="message"]')?.value || '',
  };

  fliptripsAjax('submit_booking', formData)
    .then(response => {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;

      if (response.success) {
        showToast(response.data.message, 'success');
        form.reset();
      } else {
        showToast(response.data.message, 'error');
      }
    })
    .catch(error => {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;
      console.error('Error:', error);
      showToast('An error occurred. Please try again.', 'error');
    });
}

function initializeDestinationFilter() {
  const filterBtns = document.querySelectorAll('.destination-filter-btn');
  if (filterBtns.length === 0) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      // Update active button
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const region = this.dataset.region;

      fliptripsAjax('filter_destinations', { region: region })
        .then(response => {
          if (response.success) {
            document.getElementById('destinations-list').innerHTML = response.data.html;
          } else {
            showToast(response.data.message, 'error');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          showToast('An error occurred. Please try again.', 'error');
        });
    });
  });
}

function initializeTourFilter() {
  const filterBtns = document.querySelectorAll('.package-filter-btn');
  if (filterBtns.length === 0) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      // Update active button
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const category = this.dataset.category;

      fliptripsAjax('filter_tours', { category: category })
        .then(response => {
          if (response.success) {
            document.getElementById('packages-list').innerHTML = response.data.html;
          } else {
            showToast(response.data.message, 'error');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          showToast('An error occurred. Please try again.', 'error');
        });
    });
  });
}
