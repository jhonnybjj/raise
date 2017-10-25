function someDiv(){
    document.getElementById('login').style.display = 'none';
    document.getElementById('cadastro').style.display = 'none';
    document.getElementById('lembrete').style.display = 'none';
    document.getElementById('inicio').style.display = 'none';
}
function abreLogin(){
    someDiv();
    document.getElementById('login').style.display = 'block';

}
function fechaLogin(){
    someDiv();
    document.getElementById('inicio').style.display = 'block';
}
function abreCadastro(){
    someDiv();
    document.getElementById('cadastro').style.display = 'block';
}
function fechaCadastro(){
    someDiv();
    document.getElementById('inicio').style.display = 'block';
}
function abreLembrete(){
    someDiv();
    document.getElementById('lembrete').style.display = 'block';
}
function fechaLembrete(){
    someDiv();
    document.getElementById('inicio').style.display = 'block';
}
function executaCadastro(){
    document.getElementById('loading').style.display = 'block';
    setInterval(function(){
        location='indexb.html';
    }, 2000);
}
function executaCadastroFacebook(){
    document.getElementById('loading').style.display = 'block';
    setInterval(function(){
        location='indexb.html';
    }, 2000);
}
function executaLogin(){
    document.getElementById('loading').style.display = 'block';
    setInterval(function(){
        location='indexb.html';
    }, 2000);
}
function executaLoginFacebook(){
    document.getElementById('loading').style.display = 'block';
    setInterval(function(){
        location='indexb.html';
    }, 2000);
}
function executalembrete(){
    document.getElementById('loading').style.display = 'block';
    setInterval(function(){
        location='indexb.html';
    }, 2000);
}
