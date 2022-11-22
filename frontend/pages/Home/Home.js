function inserirPalpiteNoBanco(){
    let brasil = document.querySelector(".selecao_brasil").value
    let placar_brasil = document.querySelector(".placar_brasil").value
    let adversario = document.querySelector("selecao_adversaria").value
    let placar_adversario = document.querySelector(".placar_adversario").value
    let nome_jogador = document.querySelector(".nome_jogador").value

    let palpites = {
        time_brasileiro: brasil,
        placar_brasil: placar_brasil,
        time_adversario: adversario,
        placar_adversario: placar_adversario,
        nome_apostador: nome_jogador
    }
    
}