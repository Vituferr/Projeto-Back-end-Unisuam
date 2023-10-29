const nameInput = document.getElementById('nomelogin');
const form = document.getElementById('formcad');
const telInput = document.getElementById('telefone');


// Função para formatar numero de telefone celular e fixo.
function mTel(tel) {
    tel = tel.replace(/\D/g, "");
    tel = tel.replace(/^(\d)/, "+$1");
    tel = tel.replace(/(.{3})(\d)/, "$1($2");
    tel = tel.replace(/(.{6})(\d)/, "$1)$2");
    if (tel.length == 12) {
        tel = tel.replace(/(.{1})$/, "-$1");
    } else if (tel.length == 13) {
        tel = tel.replace(/(.{2})$/, "-$1");
    } else if (tel.length == 14) {
        tel = tel.replace(/(.{3})$/, "-$1");
    } else if (tel.length == 15) {
        tel = tel.replace(/(.{4})$/, "-$1");
    } else if (tel.length > 15) {
        tel = tel.replace(/(.{4})$/, "-$1");
    }
    return tel;
}

function formatarTelefone() {
    const telefoneInput = document.getElementById('telefone');
    const telefoneFormatado = mTel(telefoneInput.value);
    telefoneInput.value = telefoneFormatado;
}
function formatarTelefone2() {
    const telefoneInput = document.getElementById('telefoneFixo');
    const telefoneFormatado = mTel(telefoneInput.value);
    telefoneInput.value = telefoneFormatado;
}
//Fim função de formatação telefone celular e fixo.

// Essa função é para formatar o CPF.
function ajustaCpf(v) {
    v = v.replace(/\D/g, "");
    // Adiciona ponto após os três primeiros números
    v = v.replace(/^(\d{3})(\d)/, "$1.$2");
    // Adiciona ponto após os seis primeiros números
    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    // Adiciona o hífen antes dos últimos 2 caracteres
    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    return v; // Retorna o valor formatado
}

function formatarCPF() {
    const cpfInput = document.getElementById('cpf');
    const cpfFormatado = ajustaCpf(cpfInput.value);
    cpfInput.value = cpfFormatado;
}
//Aqui acaba a função formatação de CPF.

// Aqui é um evento para que o submit comece a função de enviar os dados
  form.addEventListener("submit" ,(event) => {
    event.preventDefault();
    
    if(nameInput.value === "") {
    alert("Por favor preencha seu nome");
    return;
    }
})

