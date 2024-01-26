const msgStatus = document.querySelector('msg-status')

console.log(document.location.search);

if (document.location.search === '?mail_status=sent') {
    msgStatus.classList.add('success')
    msgStatus.textContent = 'Wiadomość wysłana!'

    setTimeout(() => {
        msgStatus.classList.add('success')
    }, 3000);

}

if (document.location.search === '?mail_status=error') {
    msgStatus.classList.add('error')
    msgStatus.textContent = 'Wysyłanie nie powiodło się.'

    setTimeout(() => {
        msgStatus.classList.add('error')
    }, 3000);

}