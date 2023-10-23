(function(){
    const titlepreguntas = [...document.querySelectorAll('.preguntas__title')];
    console.log(titlepreguntas)

    titlepreguntas.forEach(pregunta =>{
        pregunta.addEventListener('click', ()=>{
            let height = 0;
            let answer = pregunta.nextElementSibling;
            let addPadding = pregunta.parentElement.parentElement;

            addPadding.classList.toggle('preguntas__padding--add');
            pregunta.children[0].classList.toggle('preguntas__flecha--rotate');

            if(answer.clientHeight === 0){
                height = answer.scrollHeight;
            }

            answer.style.height = `${height}px`;
        });
    });
})();