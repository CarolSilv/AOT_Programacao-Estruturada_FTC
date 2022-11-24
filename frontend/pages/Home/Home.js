function inserirPalpiteNoBanco(){
    let brasil = document.querySelector(".selecao_brasil").value
    let placar_brasil = document.querySelector(".placar_brasil").value
    let adversario = document.querySelector(".selecao_adversaria").value
    let placar_adversario = document.querySelector(".placar_adversario").value
    let nome_jogador = document.querySelector(".nome_jogador").value

    let palpites = {
        time_brasileiro: brasil,
        placar_brasil: placar_brasil,
        time_adversario: adversario,
        placar_adversario: placar_adversario,
        nome_apostador: nome_jogador
    }

    if(placar_brasil != "" && adversario != "" && placar_adversario != "" && nome_jogador != ""){
        Swal.fire({
            title: 'Sucesso!',
            text: 'Palpite computado!',
            icon: 'success',
            confirmButtonText: 'Entendi'
          })
    }
    else{
        Swal.fire({
            title: 'Error!',
            text: 'Preencha todos os campos!',
            icon: 'error',
            confirmButtonText: 'Entendi'
          })
    }
    
}

// $(document).ready(function () {
//     $('#example').DataTable({
//         language: {
//             emptyTable: "Nenhum registro encontrado",
//             info: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
//             infoFiltered: "(Filtrados de _MAX_ registros)",
//             infoThousands: ".",
//             loadingRecords: "Carregando...",
//             zeroRecords: "Nenhum registro encontrado",
//             search: "Pesquisar",
//             "paginate": {
//                 "next": "Próximo",
//                 "previous": "Anterior",
//                 "first": "Primeiro",
//                 "last": "Último"
//         }}
//     });
// });