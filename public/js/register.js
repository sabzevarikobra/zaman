// نمایش و بستن قوانین و مقررات
function showTerms() {
    document.getElementById('terms-modal').style.display = 'block';
}
function closeTerms() {
    document.getElementById('terms-modal').style.display = 'none';
}

// قدرت رمز عبور
const strength = {
    0: "خیلی ضعیف",
    1: "ضعیف",
    2: "متوسط",
    3: "خوب",
    4: "عالی"
};
const password = document.getElementById('password');
const meter = document.getElementById('password-strength-meter');
const text = document.getElementById('password-strength-text');

if (password) {
    password.addEventListener('input', function() {
        let val = password.value;
        let score = 0;
        if (val.length >= 8) score++;
        if (/[A-Z]/.test(val)) score++;
        if (/[a-z]/.test(val)) score++;
        if (/[0-9]/.test(val)) score++;
        if (/[@$!%*#?&]/.test(val)) score++;
        meter.value = score > 4 ? 4 : score;
        text.textContent = strength[meter.value];
        text.style.color = ["#ff3333", "#ff8800", "#ffd600", "#26c6da", "#43a047"][meter.value];
    });
}

// رفرش کپچا
document.getElementById('refresh-captcha').onclick = function() {
    fetch('/captcha/flat')
        .then(response => response.text())
        .then(data => {
            document.querySelector('.captcha-box span').innerHTML = data;
        });
};
