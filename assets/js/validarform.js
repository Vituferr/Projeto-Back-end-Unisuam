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
    nomeValida()
    dtnascValida()
    sexoValida()
    nomemValida()
    cpfValida()
    telcValida()
    telfValida()
    enderecoValida()
    nomelValida()
    senhaValida()
    compareSenha()
    formatarCPF()
    formatarTelefone()
    formatarTelefone2()
    
    if(nameInput.value === "") {
    alert("Por favor preencha seu nome");
    return;
    }
})

// form
const forme = document.querySelector('#formcad')
// campos
const campos = document.querySelectorAll('.required')
// span
const spans = document.querySelectorAll('.span-')

function setError(index) {
    campos[index].style.border = '2px solid #e63636'
    spans[index].style.border = 'block'
}

function removeError(index) {
    campos[index].style.border = ''
    spans[index].style.display = 'none'
}

function nomeValida(){
    if(campos[0].value.length < 3) {
        setError(0)
    } else {
        removeError(0)
    }
}
function dtnascValida(){
    if(campos[1]) {
        setError(1)
    } else {
        removeError(1)
    }
}
function sexoValida(){
    if(campos[2]) {
        setError(2)
    } else {
        removeError(2)
    }
}
function nomemValida(){
    if(campos[3].value.length < 6) {
        setError(3)
    } else {
        removeError(3)
    }
}
function cpfValida(){
    if(campos[4].value.length <= 13) {
        setError(4)
    } else {
        removeError(4)
    }
}
function telcValida(){
    if(campos[5].value.length < 12) {
        setError(5)
    } else {
        removeError(5)
    }
}
function telfValida(){
    if(campos[6].value.length < 12) {
        setError(6)
    } else {
        removeError(6)
    }
}
function enderecoValida(){
    if(campos[7].value.length < 10) {
        setError(7)
    } else {
        removeError(7)
    }
}
function nomelValida(){
    if(campos[8].value.length < 6) {
        setError(8)
    } else {
        removeError(8)
    }
}
function senhaValida(){
    if(campos[9].value.length < 6) {
        setError(9)
    } else {
        removeError(9)
        compareSenha()
    }
}

function compareSenha(){
    if(campos[9].value == campos[10].vaalue && campos[10].value.length >= 8) {
        removeError(10)
    } else {
    setError(10)
    }
}

