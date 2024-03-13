import './bootstrap';
import axios from 'axios';
import toastr from 'toastr'


document.getElementById('signupForm')?.addEventListener('submit', function (e) {
    e.preventDefault();
    axios.post("signup", new FormData(e.target))
            .then(res => {
                toastr.success('You have been registerd successfully!');
                setTimeout(() => window.location.reload(), 1000)
            })
            .catch(err => toastr.error(err.response.data.message))
})
document.getElementById('loginForm')?.addEventListener('submit', function (e) {
    e.preventDefault();
    axios.post("login", new FormData(e.target))
            .then(res => {
                toastr.success('You have been logged successfully!');
                setTimeout(() => window.location.reload(), 1000)
            })
            .catch(err => toastr.error(err.response.data.message))
})

