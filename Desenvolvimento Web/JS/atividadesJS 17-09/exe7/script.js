const btnAlterarTema = document.getElementById('alterar-tema');
let temaClaro = true

btnAlterarTema.addEventListener('click', () =>{
    if (temaClaro) {
        document.body.style.backgroundColor = 'black';
        document.body.style.color = 'white';
        
    } else {
        document.body.style.backgroundColor = 'white';
        document.body.style.color = 'black';
    }

    temaClaro = !temaClaro;
})