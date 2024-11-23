// Função chamada ao clicar no botão "Inscrever-se"
function inscrever(botao) {
    const curso = botao.getAttribute('data-curso'); // Obtém o nome do curso a partir do atributo data-curso
    let cursos = JSON.parse(localStorage.getItem('cursos')) || []; // Recupera os cursos já salvos ou inicializa uma lista vazia

    // Verifica se o curso já está na lista; se não, adiciona
    if (!cursos.includes(curso)) {
        cursos.push(curso);
    }

    // Salva a lista atualizada no localStorage
    localStorage.setItem('cursos', JSON.stringify(cursos));

    // Redireciona para a página do perfil
    window.location.href = 'fd_perfil.html';
}
