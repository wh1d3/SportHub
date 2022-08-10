document.querySelector('body').style.color = '#fff'

const notifElem = document.querySelector('.notification')

const notif = {
	open: (color = 'pink') => notifElem.classList.add('go', color),
	close: () => notifElem.classList.remove('go')
}

setTimeout(() => {
	notif.open()
	setTimeout(() => {
		 notif.close()
	}, 15000);
}, 5000);