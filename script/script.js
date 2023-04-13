const container = document.querySelector('.container');
	const sidebar = document.querySelector('.sidebar');
	const closeBtn = document.querySelector('.close-btn');
    const carrinhoIcone = document.querySelector('.carrinho-icone');

	carrinhoIcone.addEventListener('click', () => {
	    container.classList.toggle('active');
	});

	closeBtn.addEventListener('click', () => {
	    container.classList.remove('active');
	});