// Seletor do botão de alternância
const themeButton = document.getElementById('theme-toggle');

// Função para alternar o tema
themeButton.addEventListener('click', () => {
  document.body.classList.toggle('dark-theme');
  document.body.classList.toggle('light-theme');
  
  // Alterna as classes para os elementos do menu e header
  const menuItems = document.querySelectorAll('.menu a');
  menuItems.forEach(item => {
    item.classList.toggle('dark-theme');
    item.classList.toggle('light-theme');
  });
  const header = document.querySelector('header');
  header.classList.toggle('dark-theme');
  header.classList.toggle('light-theme');
  const nav = document.querySelector('nav');
  nav.classList.toggle('dark-theme');
  nav.classList.toggle('light-theme');
});

 // Função para filtrar os produtos
 function filterProducts() {
  let input = document.getElementById('searchInput');
  let filter = input.value.toLowerCase();
  let productList = document.getElementById('product-list');
  let products = productList.getElementsByClassName('product-card');

  for (let i = 0; i < products.length; i++) {
      let title = products[i].getElementsByClassName('card-title')[0];
      if (title) {
          let textValue = title.textContent || title.innerText;
          if (textValue.toLowerCase().indexOf(filter) > -1) {
              products[i].style.display = "";
          } else {
              products[i].style.display = "none";
          }
      }
  }
}

/*tema_inicio*/
function alterarTema() {
    var body = document.body;
    var themeIcon = document.getElementById('themeIcon');
    if (body.classList.contains('light-mode')) {
      body.classList.remove('light-mode');
      body.classList.add('dark-mode');
      themeIcon.classList.remove('fa-sun');
      themeIcon.classList.add('fa-moon');
    } else {
      body.classList.remove('dark-mode');
      body.classList.add('light-mode');
      themeIcon.classList.remove('fa-moon');
      themeIcon.classList.add('fa-sun');
    }
  }
  /*tema_fim*/
  
  
