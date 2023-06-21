function save() {
  fetch(`/livrariapassos/book`).then((data) =>data.json().then(console.log))
}

function changeBook(id) {
  const values = {
    id_livro: id,
    nome: document.querySelector(`input[name="nome"]`).value,
    genero: document.querySelector(`input[name="genero"]`).value,
    editora: document.querySelector(`input[name="editora"]`).value,
    ano_publi: document.querySelector(`input[name="ano_publi"]`).value
  }

  const formulario = new FormData();

  formulario.append('id_livro', values.id_livro);
  formulario.append('nome', values.nome);
  formulario.append('genero', values.genero);
  formulario.append('editora', values.editora);
  formulario.append('ano_publi', values.ano_publi);

  fetch(`/livrariapassos/updatebook`, {
    method: 'POST',
    body: formulario
  })
  .then(response => response.json())
  .then(data => {
    return data;
  });
}

function deleteBook (id) {
  return fetch(`/livrariapassos/book?id=${id}`, {
    method: 'DELETE'
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Erro ao excluir o livro');
    }

    const element = document.getElementById(id)
    element.innerHTML = ''
  })
}

function handleSubmit (event) {
  event.preventDefault();

  const formulario = new FormData(event.target);
  const nome = 'nome=' + formulario.get("nome")
  console.log(nome)
  const novoLivro = {
    nome: formulario.get("nome"),
    genero: formulario.get("genero"),
    editora: formulario.get("editora"),
    imagem: formulario.get("imagem"),
    ano_publi: formulario.get("ano_publi")
  };

  adicionarLivro(formulario)
    .then(livroAdicionado => {
      console.log("Livro adicionado:", livroAdicionado);
      alert(`Livro adicionado`)
      // Limpar o formulário após a adição do livro
      event.target.reset();
    })
    .catch(error => {
      console.error("Erro ao adicionar livro:", error);
      alert(`Erro ao adicionar livro`)
    });
}

function adicionarLivro(novoLivro) {
  return fetch("/livrariapassos/book", {
    method: "POST",
    headers: {
      // "Content-Type": 'application/x-www-form-urlencoded',
      // 'Content-Type': 'application/json'
    },
    body: novoLivro,
  })
  .then(response => console.log(response))
  .then(data => {
    // Retorna os dados do livro adicionado
    return data;
  });
}