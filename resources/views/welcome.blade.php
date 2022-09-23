<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Daraja</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Obtain Access Token
                    </div>
                    <div class="card-body">
                        <h4 id="access_token"></h4>
                        <button id="getAccessToken" class="btn btn-primary">Request Access Token</button>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header">Register URLs</div>
                    <div class="card-body">
                        <div id="response"></div>
                        <button id="registerURLS" class="btn btn-primary">Register URLs</button>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header">Simulate Transaction</div>
                    <div class="card-body">
                        <div id="c2b_response"></div>
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" class="form-control" id="amount">
                            </div>
                            <div class="form-group">
                                <label for="account">Account</label>
                                <input type="text" name="account" class="form-control" id="account">
                            </div>
                            <button id="simulate" class="btn btn-primary">Simulate Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    {{-- <script>
        document.getElementById('simulate').addEventListener('click', (event) => {
            event.preventDefault()

            const requestBody = {
                amount: document.getElementById('amount').value,
                account: document.getElementById('account').value
            }

            axios.post('/simulate', requestBody)
            .then((response) => {
                if(response.data.ResponseDescription){
                    document.getElementById('c2b_response').innerHTML = response.data.ResponseDescription
                } else {
                    document.getElementById('c2b_response').innerHTML = response.data.errorMessage
                }
            })
            .catch((error) => {
                console.log(error);
            })
        })













const { default: axios } = require('axios');

// require('./bootstrap');












document.getElementById('getAccessToken').addEventListener('click', (event) => {
    event.preventDefault()
    axios.post('/get-token', {})
    .then((response) => {
        console.log(response.data);
        document.getElementById('access_token').innerHTML = response.data
    })
    .catch((error) => {
        console.log(error);
    })
});


// document.getElementById('registerURLS').addEventListener('click', (event) => {
//     event.preventDefault()

//     axios.post('register-urls', {})
//     .then((response) => {
//         if(response.data.ResponseDescription){
//             document.getElementById('response').innerHTML = response.data.ResponseDescription
//         } else {
//             document.getElementById('response').innerHTML = response.data.errorMessage
//         }
//         console.log(response.data);
//     })
//     .catch((error) => {
//         console.log(error);
//     })

// });



// document.getElementById('stkpush').addEventListener('click', (event) => {
//     event.preventDefault()

//     const requestBody = {
//         amount: document.getElementById('amount').value,
//         account: document.getElementById('account').value,
//         phone: document.getElementById('phone').value
//     }

//     axios.post('stkpush', requestBody)
//     .then((response) => {
//         if(response.data.ResponseDescription){
//             document.getElementById('c2b_response').innerHTML = response.data.ResponseDescription
//         } else {
//             document.getElementById('c2b_response').innerHTML = response.data.errorMessage
//         }
//     })
//     .catch((error) => {
//         console.log(error);
//     })
// })


// document.getElementById('b2csimulate').addEventListener('click', (event) => {
//     event.preventDefault()

//     const requestBody = {
//         amount: document.getElementById('amount').value,
//         occasion: document.getElementById('occasion').value,
//         remarks: document.getElementById('remarks').value,
//         phone: document.getElementById('phone').value
//     }

//     axios.post('simulateb2c', requestBody)
//     .then((response) => {
//         if(response.data.Result){
//             document.getElementById('c2b_response').innerHTML = response.data.Result.ResultDesc
//         } else {
//             document.getElementById('c2b_response').innerHTML = response.data.errorMessage
//         }
//     })
//     .catch((error) => {
//         console.log(error);
//     })
// })

// document.getElementById('status').addEventListener('click', (event) => {
//     event.preventDefault()

//     const requestBody = {
//         transactionid: document.getElementById('transactionid').value
//     }

//     axios.post('check-status', requestBody)
//     .then((response) => {
//         if(response.data.Result){
//             document.getElementById('c2b_response').innerHTML = response.data.Result.ResultDesc
//         } else {
//             document.getElementById('c2b_response').innerHTML = response.data.errorMessage
//         }
//     })
//     .catch((error) => {
//         console.log(error);
//     })
// })
// document.getElementById('reverse').addEventListener('click', (event) => {
//     event.preventDefault()

//     const requestBody = {
//         transactionid: document.getElementById('transactionid').value,
//         amount: document.getElementById('amount').value,
//     }

//     axios.post('reversal', requestBody)
//     .then((response) => {
//         if(response.data){
//             document.getElementById('c2b_response').innerHTML = response.data.ResultDescription
//         } else {
//             document.getElementById('c2b_response').innerHTML = response.data.errorMessage
//         }
//     })
//     .catch((error) => {
//         console.log(error);
//     })
// })








import _ from 'lodash';
window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

    </script> --}}
</body>
</html>
