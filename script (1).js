const canvas = document.getElementById('meuCanvas');
    const ctx = canvas.getContext('2d');

    // Crie uma nova imagem
    const imgMapa = new Image();
    imgMapa.src = "mapaJD.png"; // Defina o caminho para a imagem

    const imgCarrinhoVazio = new Image();
    imgCarrinhoVazio.src = "carrinhoVazio.png";

    const imgCarrinhoCheio = new Image();
    imgCarrinhoCheio.src = "carrinhoCheio.png";

    /*
    setTimeout(function() {
        window.location.reload(); // Recarrega a página
    }, 3000); // Tempo em milissegundos (3000 ms = 3 segundos)
    */

    // Desenhe a imagem no canvas assim que ela for carregada
    imgMapa.onload = function() {
        ctx.drawImage(imgMapa, 0, 0, canvas.width, canvas.height); // Preenche o canvas inteiro
    }

    this.onload = function() {

        fetch('http://localhost/ChallengeFiap2024/trazerdados.php')
        .then(response => response.json()) // Converte a resposta para JSON
        .then(data => {
            console.log(data); // Mostra os dados no console

            data.forEach(item => {
                console.log(item)
                localizacao = item.localizacao;
                console.log(localizacao.substring(0, 2))
                console.log(localizacao.substring(4,))
            });

            posicaoX = parseInt(localizacao.substring(0, 2))  * 26,315789473684210526315789473684 //Pegar posição x do banco de dados
            posicaoY = parseInt(localizacao.substring(4, 6))  * 26,315789473684210526315789473684 //Pegar posição y do banco de dados
        
            if(posicaoX > 35){
                ctx.drawImage(imgCarrinhoVazio, posicaoX, posicaoY, 50, 50);
            } else { 
                ctx.drawImage(imgCarrinhoVazio, posicaoX, posicaoY, 50, 50);
                //ctx.drawImage(imgCarrinhoCheio,  posicaoX, posicaoY;
            }
            console.log(localizacao.substring(0, 2))
            console.log(posicaoY)
        })

        .catch(error => console.error('Erro:', error));
    }