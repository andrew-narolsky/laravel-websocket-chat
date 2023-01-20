require('./bootstrap');

Echo.private(`chat`)
    .listen('MessageSent', (res) => {
        console.log(res);
    });
