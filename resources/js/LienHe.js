// ContactSchedule.js

document.addEventListener('DOMContentLoaded', () => {
    const steps = document.querySelectorAll('.step');
    const formSteps = document.querySelectorAll('.form-step');
    const btnNext = document.querySelectorAll('.btn-next');
    const btnPrev = document.querySelectorAll('.btn-prev');
    let current = 1;

    // Show the given step
    function showStep(n) {
        formSteps.forEach(fs => fs.classList.remove('form-step-active'));
        document.querySelector(`.form-step[data-step="${n}"]`).classList.add('form-step-active');
        steps.forEach(s => s.classList.remove('active'));
        document.querySelector(`.step[data-step="${n}"]`).classList.add('active');
    }

    btnNext.forEach(btn => btn.addEventListener('click', () => {
        const fs = document.querySelector(`.form-step[data-step="${current}"]`);
        // collect only the required controls inside this step
        const requiredControls = fs.querySelectorAll('input[required], select[required], textarea[required]');

        // check them one by one
        for (let ctrl of requiredControls) {
            if (!ctrl.checkValidity()) {
                // focus + show browser message
                ctrl.reportValidity();
                return;
            }
        }

        // all good → next step
        current = Math.min(current + 1, formSteps.length);
        showStep(current);
    }));


    // Prev buttons
    btnPrev.forEach(btn => btn.addEventListener('click', () => {
        current = Math.max(current - 1, 1);
        showStep(current);
    }));

    // AJAX form submit
    const form = document.getElementById('appointment-form');
    const modal = document.getElementById('confirmation-modal');
    form.addEventListener('submit', async e => {
        e.preventDefault();
        const fd = new FormData(form);

        try {
            const res = await fetch(form.action, {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
                body: fd
            });
            const json = await res.json();
            if (json.success) {
                modal.classList.remove('hidden');
            } else {
                alert(json.message || 'Lỗi, vui lòng thử lại.');
            }
        } catch (err) {
            console.error(err);
            alert('Lỗi hệ thống, xin thử lại sau.');
        }
    });

    // Modal “cancel” redirects home
    modal.querySelector('.btn-cancel')
        .addEventListener('click', () => window.location = "{{ route('home') }}");
});
